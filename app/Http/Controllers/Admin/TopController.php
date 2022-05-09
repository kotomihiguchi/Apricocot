<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopController extends Controller
{
    //追記
    public function index()
    {
        return view('admin.top.index');
    }
}
