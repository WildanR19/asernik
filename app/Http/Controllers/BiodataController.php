<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('biodata');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama' => ['required', 'string', 'max:255'],
                'alamat' => ['required', 'string'],
                'nik' => ['required', 'string', 'max:255'],
                'vaksin' => ['required', 'string', 'max:255'],
                'tgl_lahir' => ['required', 'date'],
            ]);
    
            $certificate = Certificate::create([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'nik' => $request->nik,
                'vaksin' => $request->vaksin,
                'tgl_lahir' => $request->tgl_lahir,
            ]);

            $image = Image::make(public_path('assets/images/sertif.png'));

            $image->text(strtoupper($certificate->nama), 540, 255, function ($font) {
                $font->file(public_path('assets/fonts/Poppins-Bold.otf'));
                $font->size(36);
                $font->color('#ffffff');
                $font->align('center');
                $font->valign('top');
            });
            $image->text(strtoupper($certificate->nik), 295, 370, function ($font) {
                $font->file(public_path('assets/fonts/Poppins-Bold.otf'));
                $font->size(18);
                $font->color('#ffffff');
                $font->align('left');
                $font->valign('top');
            });
            $tgl = date_create($certificate->tgl_lahir);
            $image->text(date_format($tgl, "d F Y"), 565, 370, function ($font) {
                $font->file(public_path('assets/fonts/Poppins-Bold.otf'));
                $font->size(18);
                $font->color('#ffffff');
                $font->align('left');
                $font->valign('top');
            });
            $image->text(date_format(Carbon::now(), "d F Y"), 630, 620, function ($font) {
                $font->file(public_path('assets/fonts/Poppins-Bold.otf'));
                $font->size(24);
                $font->color('#3b458a');
                $font->align('center');
                $font->valign('top');
            });
            $filename = 'sertifikat_' . $certificate->nama;
            $path = public_path('sertifikat/'. $filename . '.png');
            $image->save($path);

            
            return response()->download($path, $filename. '.png');
        } catch (Exception $e) {
            return response()->json(array('error' => $e->getMessage()));
        }
    }
}
