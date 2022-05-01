<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    //追記
    public function add()
    {
        return view('admin.item.create');
    }

    public function create()
    {
        return redirect('admin/item/create');
    }

    public function edit()
    {
        return view('admin.item.edit');
    }

    public function update()
    {
        return redirect('admin/item/edit');
    }
    
     public function delete()
    {
        return redirect('admin/item/delete');
    }
}
