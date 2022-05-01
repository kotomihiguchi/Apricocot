<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopController extends Controller
{
    //追記
    public function add()
    {
        return view('admin.top.create');
    }

    public function create()
    {
        return redirect('admin/top/create');
    }

    public function edit()
    {
        return view('admin.top.edit');
    }

    public function update()
    {
        return redirect('admin/top/edit');
    }
    
     public function delete()
    {
        return redirect('admin/top/delete');
    }
}
