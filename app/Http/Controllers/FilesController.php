<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\files;

class FilesController extends Controller
{
    public function home(){
        $files = files::simplePaginate(4);
        return view('files.home', compact('files'));
    }

    public function show($id){
        $file = files::find($id);
        return view('files.show', compact('file'));
    }

    public static function store($path){
        $file = new files;
        $file->pdfFile = $path;
        $file->thumbnail = "b12";
        $file->save();
    }
}
