<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InquiyController extends Controller
{
    //追記
    public function add()
    {
        return view('admin.inquiy.create');
    }

    public function create()
    {
        return redirect('admin/inquiy/create');
    }

    public function edit()
    {
        return view('admin.inquiy.edit');
    }

    public function update()
    {
        return redirect('admin/inquiy/edit');
    }
    
     public function delete()
    {
        return redirect('admin/inquiy/delete');
    }
}
