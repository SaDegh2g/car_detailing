<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function Exterior() {
        return view('components.services.exterior');
    }

    public function Interior() {
        return view('components.services.interior');
    }

    public function Special() {
        return view('components.services.special');
    }
}
