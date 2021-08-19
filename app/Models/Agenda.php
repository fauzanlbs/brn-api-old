<?php

namespace App\Models;

use App\Models\Scopes\ImageUrlable;
use App\Models\Scopes\Searchable;
use App\Traits\HasImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class Agenda extends Model
{
    use HasFactory;
    use Searchable;
    use HasImage;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $storageFolderName = 'agendas';

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'image_url',
        'qr_code_url',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'start_date'      => 'datetime:Y-m-d',
        'end_date'      => 'datetime:Y-m-d',
    ];

    /**
     * The attributes that are mass searchable.
     *
     * @var array
     */
    protected $searchableFields = ['*'];

    /**
     * Get qr code url attribute
     *
     * @return string
     */
    public function getQrCodeUrlAttribute()
    {
        return $this->qr_path
            ? Storage::disk('public')->url($this->qr_path)
            : ('https://ui-avatars.com/api/?name=qr&color=7F9CF5&background=EBF4FF');
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return void
     */
    public function generateQrCode()
    {
        $uniqId = uniqid('a-');
        $qrPath = 'qr-codes/' . $uniqId . 'A' . $this->id . '.svg';
        $toUrl = config('app.url') . '/agendas/qr-scan/' . $this->id;

        $qr = QrCode::format('svg')->size(250)->generate($toUrl);
        Storage::disk('public')->put($qrPath, $qr);

        $this->forceFill([
            'qr_path' => $qrPath
        ])->save();
    }

    public function absentUsers()
    {
        return $this->belongsToMany(User::class);
    }
}
