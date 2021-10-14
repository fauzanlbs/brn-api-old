<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

trait Analytics
{
    public $dataTitle;
    public $bot_this_title;
    public $bot_last_title;

    public $this_title;
    public $this_data_one;
    public $this_data_two;

    public function getAnalyticsData($table, $value)
    {
        $analistycDate = new AnalyticClass();
        $bot_title = $analistycDate->chartTitle($value);

        $dates = $analistycDate->checkDate($value);
        $data = $this->analistycData($table, $dates[0], $dates[1], $dates[2], $dates[3], $value);

        return [
            'title' => $value,
            'title_of_this_date' => $bot_title['this_title'],
            'title_of_last_date' => $bot_title['last_title'],
            'charts' => $data['charts'],
        ];
    }

    public function analistycData($table, $this_date_one, $this_date_two, $last_date_one, $last_date_two, $action)
    {

        $analistycData = new AnalyticClass();

        $charts = [];

        if ($action == 'hari-ini') {
            for ($i = 0; $i < 24; $i++) {
                $first = Carbon::parse($this_date_two)->addHour($i)->format('H:i:s');
                $last = Carbon::parse($this_date_two)->addHour($i + 1)->format('H:i:s');
                $first_two = Carbon::parse($last_date_two)->addHour($i)->format('H:i:s');
                $last_two = Carbon::parse($last_date_two)->addHour($i + 1)->format('H:i:s');

                $m = null;
                $t = null;
                $l = null;

                $thisCount = $analistycData->countDataTime($table, $this_date_one, $this_date_two, $last, $first, 'created_at');
                $lastCount = $analistycData->countDataTime($table, $last_date_one, $last_date_two, $last_two, $first_two, 'created_at');

                $charts[] = [
                    'title' => substr($last, 0, 5),
                    'this_date' => $thisCount,
                    'last_date' => $lastCount,
                ];
            }
        } else {
            $counter = 1;

            $period_one = Carbon::parse($this_date_two)->range($this_date_one, $counter, 'days');
            $period_two = Carbon::parse($last_date_two)->range($last_date_one, $counter, 'days');

            $dates_result_one = [];
            $dates_result_two = [];

            foreach ($period_one as $date) {
                $dates_result_one[] = $date->format('Y-m-d');
            }
            foreach ($period_two as $date) {
                $dates_result_two[] = $date->format('Y-m-d');
            }

            for ($i = 0; $i < count($dates_result_one); $i++) {

                $m = null;
                $t = null;
                $l = null;

                if ($i < count($dates_result_one) - 1) {
                    $thisSumTransaction = $analistycData->countData($table, $dates_result_one[$i], $dates_result_one[$i + 1], 'created_at');
                    $t  = $thisSumTransaction;
                }
                if ($i < count($dates_result_two) - 1) {
                    $lastSumTransaction = $analistycData->countData($table, $dates_result_two[$i], $dates_result_two[$i + 1], 'created_at');
                    $l  = $lastSumTransaction;
                }

                $charts[] = [
                    'title' => Carbon::create($dates_result_one[$i])->translatedFormat('D, Y-m-d'),
                    'this_date' => $t,
                    'last_date' => $l,
                ];
            }
        }

        if ($action == '7-hari-terakhir') {
            array_pop($charts);
        }

        return [
            'charts' => $charts,
            'bot_title' => [
                $this->bot_this_title, $this->bot_last_title
            ],

        ];
    }
}

class AnalyticClass
{
    public function headerAnalistycCount($tables, $this_date, $last_date, bool $percentage = true)
    {
        $results = [
            'total' => [],
            'percentage' => [],
            'percentage_status' => [],
        ];

        foreach ($tables as $t) {
            $count = DB::table($t)
                ->count();

            array_push($results['total'], $count);

            if ($percentage) {
                $countThisDate = DB::table($t)
                    ->whereDate('created_at', '>=', $this_date)
                    ->count();
                $countLastDate = DB::table($t)
                    ->whereDate('created_at', '<', $this_date)
                    ->whereDate('created_at', '>=', $last_date)
                    ->count();

                $countPercentage = $this->percentageData($countThisDate, $countLastDate);
                array_push($results['percentage'], $countPercentage['value']);
                array_push($results['percentage_status'], $countPercentage['status']);
            }
        }

        return $results;
    }

    function percentageData($value_one, $value_two)
    {

        if ($value_one == 0) {
            return [
                'value' => null,
                'status' => null,
            ];
        }
        $decreaseValue = $value_one - $value_two;

        $percentage = ($decreaseValue / $value_one) * 100;


        $percentageStatus = 'plus';

        if ($percentage <= 0) {
            $percentageStatus = 'minus';
        }

        $collection = Str::of($percentage)->explode('.');
        if (count($collection) > 1) {
            $truncated = Str::limit($collection[1], 1, (''));
            $result = $collection[0] . '.' . $truncated;
        } else {
            $result = $collection[0];
        }


        return [
            'value' => $result,
            'status' => $percentageStatus,
        ];
    }

    public function chartTitle($dataTitle)
    {
        switch ($dataTitle) {
            case 'hari-ini':
                $title = 'hari ini';
                $title2 = 'kemarin';
                break;
            case '7-hari-terakhir':
                $title = '7 hari terakhir';
                $title2 = '7 hari sebelumnya';
                break;
            case '30-hari-terakhir':
                $title = '30 hari terakhir';
                $title2 = '30 hari sebelumnya';
                break;
            case 'bulan-ini':
                $title = 'bulan ini';
                $title2 = 'bulan lalu';
                break;
            case 'bulan-lalu':
                $title = 'bulan lalu';
                $title2 = 'bulan sebelumnya';
                break;
            default:
                $title = '3 bulan terakhir';
                $title2 = '3 bulan sebelumnya';
        }

        return [
            'this_title' => $title,
            'last_title' => $title2,
        ];
    }

    public function checkDate($date)
    {
        switch ($date) {

            case 'hari-ini':
                // get data today and yesterday
                $this_date_one = Carbon::tomorrow()->format('Y-m-d');
                $this_date_two = Carbon::today()->format('Y-m-d');
                $last_date_one = Carbon::today()->format('Y-m-d');
                $last_date_two = Carbon::yesterday()->format('Y-m-d');
                break;
            case '7-hari-terakhir':

                // get date this week and lat week
                $this_date_one = Carbon::now()->addDays(1)->format('Y-m-d');
                $this_date_two = Carbon::now()->subDay(6)->format('Y-m-d');
                $last_date_one = Carbon::now()->subDay(7)->format('Y-m-d');
                $last_date_two = Carbon::now()->subDay(14)->format('Y-m-d');
                break;
            case '30-hari-terakhir':

                // get date lats 30 days and last 60days
                $this_date_one = Carbon::now()->addDays(1)->format('Y-m-d');
                $this_date_two = Carbon::now()->subDay(30)->format('Y-m-d');
                $last_date_one = Carbon::now()->subDay(30)->format('Y-m-d');
                $last_date_two = Carbon::now()->subDay(60)->format('Y-m-d');
                break;
            case 'bulan-ini':

                // get date this month and lat month
                $this_date_one = Carbon::now()->endOfMonth()->format('Y-m-d');
                $this_date_two = Carbon::now()->startOfMonth()->format('Y-m-d');
                $last_date_one = Carbon::now()->subMonth(1)->endOfMonth()->format('Y-m-d');
                $last_date_two = Carbon::now()->subMonth(1)->startOfMonth()->format('Y-m-d');
                break;
            case 'bulan-lalu':

                // get date last month and lats last month
                $this_date_one = Carbon::now()->subMonth(1)->endOfMonth()->format('Y-m-d');
                $this_date_two = Carbon::now()->subMonth(1)->startOfMonth()->format('Y-m-d');
                $last_date_one = Carbon::now()->subMonth(1)->startOfMonth()->format('Y-m-d');
                $last_date_two = Carbon::now()->subMonth(2)->startOfMonth()->format('Y-m-d');
                break;

            default:

                // get date 3 lats month and 6 lats month
                $this_date_one = Carbon::now()->endOfMonth()->format('Y-m-d');
                $this_date_two = Carbon::now()->subMonth(2)->startOfMonth()->format('Y-m-d');
                $last_date_one = Carbon::now()->subMonth(2)->startOfMonth()->format('Y-m-d');
                $last_date_two = Carbon::now()->subMonth(5)->startOfMonth()->format('Y-m-d');
        }

        return array($this_date_one, $this_date_two, $last_date_one, $last_date_two);
    }

    public function sumDataTime($table, $created_at_one, $created_at_two, $time_one, $time_two, $sum, $field = 'created_at')
    {
        return DB::table($table)
            ->where($field, '<', $created_at_one)
            ->where($field, '>=', $created_at_two)
            ->whereTime($field, '<', $time_one)
            ->whereTime($field, '>=', $time_two)
            ->sum($sum);
    }

    public function countDataTime($table, $created_at_one, $created_at_two, $time_one, $time_two, $field = 'created_at')
    {
        return DB::table($table)
            ->where($field, '<', $created_at_one)
            ->where($field, '>=', $created_at_two)
            ->whereTime($field, '<', $time_one)
            ->whereTime($field, '>=', $time_two)
            ->count();
    }

    public function sumData($table, $created_at_one, $created_at_two, $sum, $field = 'created_at')
    {
        return DB::table($table)
            ->whereBetween('created_at', [$created_at_two, $created_at_one])
            ->sum($sum);
    }

    public function countData($table, $from, $to, $field = 'created_at')
    {
        return DB::table($table)
            ->whereBetween('created_at', [$from, $to])
            ->count();
    }
}
