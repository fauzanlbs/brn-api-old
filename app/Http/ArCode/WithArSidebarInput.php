<?php

namespace App\Http\ArCode;

trait WithArSidebarInput
{
    public function closeSidebarInput($id)
    {
        $this->dispatchBrowserEvent('close-sidebar', $id);
        $this->dispatchBrowserEvent('reset-preview-image', $id);
        $this->reset();
        $this->resetErrorBag();
        $this->resetValidation();
    }
}
