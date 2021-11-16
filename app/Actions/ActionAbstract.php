<?php

namespace App\Actions;

use App\Models\Point;

abstract class ActionAbstract
{
    /**
     * Set the action key.
     *
     * @return mixed
     */
    abstract public function key();

    /**
     * Get the model for the given.
     *
     * @return mixed
     */
    public function getModel()
    {
        return Point::where('key', $this->key())->first();
    }
}
