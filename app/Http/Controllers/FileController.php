<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function show($folder, $img)
    {

        $path = $folder . '/' . $img;

        $filePath = storage_path('app/' . $path);

        // Check if the file exists
        if (file_exists($filePath)) {
            $file = file_get_contents($filePath);
            $type = mime_content_type($filePath);
            $response = response($file, 200)->header('Content-Type', $type);
            return $response;
        }

        abort(404);
    }
}
