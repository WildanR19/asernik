<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class SertifikatController extends Controller
{
    public function index()
    {
        $imagePath = public_path('sertifikat'); // Path to the public/images folder
        $files = File::files($imagePath);

        $imageList = [];
        foreach ($files as $file) {
            $imageList[] = $file->getFilename();
        }

        return view('sertifikat', ['imageList' => $imageList]);
    }

    public function download()
    {
        $filename = request('filename');
        $path = public_path('sertifikat/'.$filename);
        return response()->download($path, $filename);
    }
}
