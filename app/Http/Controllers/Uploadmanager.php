<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Uploadmanager extends Controller
{
    //
    public function uploadFile(Request $request){
        return $request->file('fileUpload')->store("images");
    }
}
