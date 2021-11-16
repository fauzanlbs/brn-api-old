<?php

namespace App\Royalty\Actions;

use App\Actions\ActionAbstract;

class RegisterPoint extends ActionAbstract
{
    /**
     * Set the action key.
     *
     * @return mixed
     */
    public function key()
    {
        return 'register-brn';
    }
}
