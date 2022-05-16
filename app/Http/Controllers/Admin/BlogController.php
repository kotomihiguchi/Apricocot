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
      $this->validate($request, Blog::$rules);
      $blog = new Blog;
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
    $blog->fill($form);
      $blog->save();
        return redirect('admin/blog/index');
    }
    public function index()
    {
      // それ以外はすべてのニュースを取得する
          $blog = Blog::find(1);
        return view('admin.blog.index',['blog' => $blog]);
    }
    public function edit()
    {
        $blog = Blog::find(1);
        return view('admin.blog.edit',['blog' => $blog]);
    }
    public function update()
    {
        return redirect('admin/blog/index');
    }
     public function check()
    {
        return view('admin.blog.check');
    }
     public function delete()
    {
        return redirect('admin/blog/delete');
    }
}
