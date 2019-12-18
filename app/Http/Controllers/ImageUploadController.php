<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        FilesController::store($imageName);

        request()->pdffile->move(public_path('images'), $imageName);

        return back()
            ->with('success','You have successfully upload file.')
            ->with('pdffile',$imageName);
    }
}
