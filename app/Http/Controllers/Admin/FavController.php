<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FavController extends Controller
{
    ////追記
    public function add()
    {
        return view('admin.fav.create');
    }

    public function create()
    {
        return redirect('admin/fav/create');
    }

    public function edit()
    {
        return view('admin.fav.edit');
    }

    public function update()
    {
        return redirect('admin/fav/edit');
    }
    
     public function delete()
    {
        return redirect('admin/fav/delete');
    }
}
