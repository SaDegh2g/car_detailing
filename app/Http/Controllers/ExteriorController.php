<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExteriorController extends Controller
{
    public function index(){
        return view('components.services.exterior');
    }
}
