<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRequestController extends Controller
{
    public function admin()
    {
        return view('admin');
    }
}
