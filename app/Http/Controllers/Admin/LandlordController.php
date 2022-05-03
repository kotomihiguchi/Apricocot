<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandlordController extends Controller
{
    //追記
    public function index()
    {
        return view('admin.landlord.index');
    }
    

}
