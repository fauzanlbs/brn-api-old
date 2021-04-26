<?php

namespace App\Http\ArCode;

trait WithArError
{
    public function showError()
    {
        $this->dispatchBrowserEvent('show-alert', [
            'type' => 'error',
            'title' => 'Error',
            'description' => 'Kesalahan server dari dalam'
        ]);
    }
}
