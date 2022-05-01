<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    //追記
    public function add()
    {
        return view('admin.cart.create');
    }

    public function create()
    {
        return redirect('admin/cart/create');
    }

    public function edit()
    {
        return view('admin.cart.edit');
    }

    public function update()
    {
        return redirect('admin/cart/edit');
    }
    
     public function delete()
    {
        return redirect('admin/cart/delete');
    }
}
