<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Analistyc
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

    function headerAnalistycUserRoleCount(array $roles, string $this_date, string $last_date)
    {
        $results = [];
        foreach ($roles as $key => $value) {
            $count =  User::role($value)
                ->count();

            $results[is_array($value) ? $key : $value]['total'] = $count;

            $countThisDate = User::role($value)
                ->whereDate('created_at', '>=', $this_date)
                ->count();
            $countLastDate = User::role($value)
                ->whereDate('created_at', '<', $this_date)
                ->whereDate('created_at', '>=', $last_date)
                ->count();

            $countPercentage = $this->percentageData($countThisDate, $countLastDate);
            $results[is_array($value) ? $key : $value]['percentage'] =  $countPercentage['value'];
            $results[is_array($value) ? $key : $value]['percentage_status'] =  $countPercentage['status'];
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
                $this_date_one = Carbon::now()->format('Y-m-d');
                $this_date_two = Carbon::now()->subDay(7)->format('Y-m-d');
                $last_date_one = Carbon::now()->subDay(7)->format('Y-m-d');
                $last_date_two = Carbon::now()->subDay(14)->format('Y-m-d');
                break;
            case '30-hari-terakhir':

                // get date lats 30 days and last 60days
                $this_date_one = Carbon::now()->format('Y-m-d');
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

    public function sumData($table, $created_at_one, $created_at_two, $sum, $field = 'created_at')
    {
        return DB::table($table)
            ->where($field, '<', $created_at_one)
            ->where($field, '>=', $created_at_two)
            ->sum($sum);
    }
}
