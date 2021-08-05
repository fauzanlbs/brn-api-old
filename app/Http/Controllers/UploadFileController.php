<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadFileRequest;
use Illuminate\Http\Request;

/**
 * @group Upload File
 */
class UploadFileController extends Controller
{
    /**
     * Upload File
     */
    public function store(UploadFileRequest $request)
    {

        if ($request['key'] != env('UPLOAD_FILE_KEY')) {
            return response()->json(['message' => 'Upload file key tidak valid'], 400);
        }

        $results  = [];
        foreach ($request->file('files') as $value) {
            $path = $value->storePublicly(
                'uploads',
                ['disk' => 'public']
            );

            array_push($results, $path);
        }

        return response()->json([
            'data' => [
                'file_paths' => $results,
            ]
        ], 201);
    }
}
