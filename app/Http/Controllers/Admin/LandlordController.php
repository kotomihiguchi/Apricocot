<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandlordController extends Controller
{
    //追記
    public function add()
    {
        return view('admin.landlord.create');
    }

    public function create()
    {
        return redirect('admin/landlord/create');
    }

    public function edit()
    {
        return view('admin.landlord.edit');
    }

    public function update()
    {
        return redirect('admin/landlord/edit');
    }
    
     public function delete()
    {
        return redirect('admin/landlord/delete');
    }
    

}
