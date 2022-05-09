<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    //追記
    public function index()
    {
        return view('admin.job.index');
    }

    public function edit()
    {
        return view('admin.job.edit');
    }

    public function update()
    {
        return redirect('admin/job/index');
    }
    
     public function check()
    {
        return view('admin.job.check');
    }
}
