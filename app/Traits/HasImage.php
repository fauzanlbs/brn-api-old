<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait HasImage
{
    /**
     * Update the image
     *
     * @param  \Illuminate\Http\UploadedFile  $image
     * @return void
     */
    public function updateImage(UploadedFile $image)
    {
        tap($this->image, function ($previous) use ($image) {
            $this->forceFill([
                'image' => $image->storePublicly(
                    $this->storageFolderName ?? 'globals',
                    ['disk' => 'public']
                ),
            ])->save();

            if ($previous) {
                Storage::disk('public')->delete($previous);
            }
        });
    }

    /**
     * Delete the image
     *
     * @return void
     */
    public function deleteImage()
    {
        Storage::disk('public')->delete($this->image);

        $this->forceFill([
            'image' => null,
        ])->save();
    }

    /**
     * Get the URL to the image
     *
     * @return string
     */
    public function getImageUrlAttribute()
    {
        return $this->image
            ? Storage::disk('public')->url($this->image)
            : $this->defaultImageUrl();
    }

    /**
     * Get the default profile photo URL if no profile photo has been uploaded.
     *
     * @return string
     */
    protected function defaultImageUrl()
    {
        return 'https://ui-avatars.com/api/?name=' . urlencode($this->title ?? 'IM') . '&color=7F9CF5&background=EBF4FF';
    }
}
