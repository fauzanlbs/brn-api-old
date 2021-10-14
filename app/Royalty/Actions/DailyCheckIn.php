<?php

namespace App\Royalty\Actions;

use App\Actions\ActionAbstract;

class DailyCheckIn extends ActionAbstract
{
    /**
     * Set the action key.
     *
     * @return mixed
     */
    public function key()
    {
        return 'daily-check-in';
    }
}
