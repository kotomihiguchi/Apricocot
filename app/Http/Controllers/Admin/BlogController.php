<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    //追記
    public function add()
    {
        return view('admin.blog.create');
    }

    public function create()
    {
        return redirect('admin/blog/create');
    }

    public function edit()
    {
        return view('admin.blog.edit');
    }

    public function update()
    {
        return redirect('admin/blog/edit');
    }
    
     public function delete()
    {
        return redirect('admin/blog/delete');
    }
}

