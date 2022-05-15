<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// Blog Modelが扱えるようになる
use App\Blog;

class BlogController extends Controller
{
    public function add()
    {
        return view('admin.blog.create');
    }
    
    public function create(Request $request)
    {      
      // Varidationを行う
      $this->validate($request, Job::$rules);
      $job = new Job;
      $form = $request->all();
      // フォームから画像が送信されてきたら、保存して、$job->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $job->image_path = basename($path);
      } else {
          $job->image_path = null;
      }
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
     // データベースに保存する
    $job->fill($form);
      $job->save();
        return redirect('admin/job/index');
    }
    public function index()
    {
      // それ以外はすべてのニュースを取得する
          $job = Job::find(1);
        return view('admin.job.index',['job' => $job]);
    }
    public function edit()
    {
        $job = Job::find(1);
        return view('admin.job.edit',['job' => $job]);
    }
    public function update()
    {
        return redirect('admin/job/index');
    }
     public function check()
    {
        return view('admin.job.check');
    }
}<?php

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

