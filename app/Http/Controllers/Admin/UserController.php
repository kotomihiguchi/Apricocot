<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //追記
    public function add()
    {
        return view('admin.user.create');
    }

    public function create()
    {
        return redirect('admin/user/create');
    }

    public function edit()
    {
        return view('admin.user.edit');
    }

    public function update()
    {
        return redirect('admin/blog/edit');
    }
    
     public function delete()
    {
        return redirect('admin/user/delete');
    }
}
