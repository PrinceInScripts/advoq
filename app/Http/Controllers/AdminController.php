<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addIIA()
    {
        return view('admin.addIIA');
    }

    public function addVideo()
    {
        return view('admin.addVideo');
    }
}


