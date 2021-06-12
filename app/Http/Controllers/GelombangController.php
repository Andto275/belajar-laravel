<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GelombangController extends Controller
{
    public function index()
    {
        return view('gelombang.index');
    }
}
