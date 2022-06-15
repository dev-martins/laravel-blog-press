<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\UploadFiles;

class UploadFilesController extends Controller
{
    use UploadFiles;

    public function compressImage(Request $request)
    {
        return $this->compressImages($request->file('image'));
    }
}
