<?php

namespace App\Models\Scopes;

use Illuminate\Support\Facades\Storage;

trait ImageUrlable
{
    /**
     * Get image url attribute
     *
     * @return string
     */
    public function getImageUrlAttribute()
    {
        return Storage::disk('public')->url($this->image ?? ('https://ui-avatars.com/api/?name=' . urlencode($this->name) . '&color=7F9CF5&background=EBF4FF'));
    }
}
