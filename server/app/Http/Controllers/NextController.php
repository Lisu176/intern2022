<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NextController extends Controller
{
    $sc = $request->input('sc');
    return view('next' ,compact('sc'));
}
