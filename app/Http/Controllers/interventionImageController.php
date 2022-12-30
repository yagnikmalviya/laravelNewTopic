<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class interventionImageController extends Controller
{
    public function interventionImage(){
        return response()->json(['status' => 200,'message' => 'successfully show data']);
    }
}
