<?php

namespace App\Royalty\Actions;

use App\Actions\ActionAbstract;

class CompletedLesson extends ActionAbstract
{
    /**
     * Set the action key.
     *
     * @return mixed
     */
    public function key()
    {
        return 'grades-very-good';
    }
}
