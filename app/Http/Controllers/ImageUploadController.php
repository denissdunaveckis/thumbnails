<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Spatie\PdfToImage\Pdf;
use Imagick;

class ImageUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUpload()
    {
        return view('image.upload');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUploadPost()
    {
        request()->validate([
            'pdffile' => 'required|mimes:pdf|max:2048',
        ]);

        $imageName = time().'.'.request()->pdffile->getClientOriginalExtension();

        request()->pdffile->move(public_path('images'), $imageName);
        $thumbName = time().'.jpg';

        FilesController::store($imageName, $thumbName);

        $pathImage = public_path( "images").'\\'. $imageName;
        $pathThumb = public_path( "images").'\\'. $thumbName;
        $im = new Imagick();
        $im->setResolution(300,300);
        $im->readImage($pathImage.'[0]');
        $im->setImageFormat('jpeg');
        $im->writeImage($pathThumb);
        $im->clear();
        $im->destroy();

        return back()
            ->with('success','You have successfully upload file.')
            ->with('pdffile',$thumbName);
    }
}
