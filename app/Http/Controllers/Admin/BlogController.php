<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// Blog Modelが扱えるようになる
use App\Blog;

class BlogController extends Controller
{
  //add
    public function add()
    {
      return view('admin.blog.create');
    }
  //create
    public function create(Request $request)
    {      
      // Varidationを行う
      $this->validate($request, Blog::$rules);
      $blog = new Blog;
      $form = $request->all();
      // フォームから画像が送信されてきたら、保存して、$job->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $blog->image_path = basename($path);
      } else {
          $blog->image_path = null;
      }
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
     // データベースに保存する
      $blog->fill($form);
      $blog->save();
      // admin/blog/createにリダイレクトする
        return redirect('admin/blog/create');
    }
  //index
    public function index(Request $request)
    {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Blog::where('title', $cond_title)->get();
      } else {
      // それ以外はすべてのニュースを取得する
          $blog = Blog::all();
        return view('admin.blog.index',['blog' => $blog,'posts' => $posts, 'cond_title' => $cond_title]);
      }
    }
  //edit
    public function edit(Request $request)
    {
        $blog = Blog::all();
        $blog = Blog::find($request->id);
      if (empty($blog)) {
        abort(404);    
      }
        return view('admin.blog.edit',['blog_form' => $blog]);
    }
    public function update(Request $request)
    {
      // Validationをかける
      $this->validate($request, Blog::$rules);
      // News Modelからデータを取得する
      $blog = Blog::find($request->id);
      // 送信されてきたフォームデータを格納する
      $blog_form = $request->all();
      if ($request->remove == 'true') {
          $blog_form['image_path'] = null;
      } elseif ($request->file('image')) {
          $path = $request->file('image')->store('public/image');
          $blog->image_path = basename($path);
      } else {
          $blog_form['image_path'] = $blog->image_path;
      }

      unset($blog_form['image']);
      unset($blog_form['remove']);
      unset($blog_form['_token']);

      // 該当するデータを上書きして保存する
      $blog->fill($blog_form)->save();
      
       $history = new History;
       $history->news_id = $blog->id;
       $history->edited_at = Carbon::now();
       $history->save();
        return redirect('admin/blog/index');
    }
     public function check()
    {
        return view('admin.blog.check');
    }
     public function delete()
    {
      // 該当するNews Modelを取得
      $blog = Blog::find($request->id);
      // 削除する
      $blog->delete();
        return redirect('admin/blog/delete');
    }
}
