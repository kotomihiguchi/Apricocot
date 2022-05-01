<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    //追記
    public function add()
    {
        return view('admin.job.create');
    }

    public function create()
    {
        return redirect('admin/job/create');
    }

    public function edit()
    {
        return view('admin.job.edit');
    }

    public function update()
    {
        return redirect('admin/job/edit');
    }
    
     public function delete()
    {
        return redirect('admin/job/delete');
    }
}
