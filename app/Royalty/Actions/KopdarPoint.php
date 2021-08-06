<?php

namespace App\Royalty\Actions;

use App\Actions\ActionAbstract;

class KopdarPoint extends ActionAbstract
{
    /**
     * Set the action key.
     *
     * @return mixed
     */
    public function key()
    {
        return 'kopdar-brn';
    }
}
