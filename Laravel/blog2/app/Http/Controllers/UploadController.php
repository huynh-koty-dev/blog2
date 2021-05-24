<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    public function uploadFile(Request $req){
        return $req->file('uploadFile')->store('docs');
    }
}
