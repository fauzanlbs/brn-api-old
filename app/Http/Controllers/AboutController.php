<?php

namespace App\Http\Controllers;

use App\Http\Resources\AboutResource;
use App\Models\About;
use App\Traits\ResponseAPI;
use Illuminate\Support\Facades\Storage;

/**
 * @group Tentang BRN
 */
class AboutController extends Controller
{
    use ResponseAPI;


    /**
     * Mendapatkan data tentang BRN.
     *
     * @return AboutResource
     *
     * @responseFile storage/responses/about-resource.response.json
     */
    public function getAbout()
    {
        $about = About::first();
        if (!$about) {
            return $this->responseMessage('No Data Found', 404);
        }

        $about->histories = $this->transfom($about->histories);
        $about->organizational_regulations = $this->transfom($about->organizational_regulations);
        $about->tujuh_sapta_cipta = $this->transfom($about->tujuh_sapta_cipta);
        $about->adarts = $this->transfom($about->adarts);
        $about->organizational_structures = $this->transfom($about->organizational_structures);

        return response()->json($about);
        return new AboutResource($about);
    }

    /**
     * Transfom json image path to array image with full url
     *
     * @param mixed $values
     * @return array
     */
    private function transfom($values)
    {
        $casting_values = [];
        foreach (json_decode($values) as $key =>  $value) {
            $casting_values[$key]['key'] = $key;
            $casting_values[$key]['image'] =  $value->image
                ? Storage::disk('public')->url($value->image)
                : null;
        }
        return $casting_values;
    }
}
