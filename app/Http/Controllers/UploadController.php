<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(Request $request){
    	$file = $request->file('filepond');
    	return Storage::put('tmp', $file);
    }
}
