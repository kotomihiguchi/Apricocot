<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// top Modelが扱えるようになる
use App\Top;

class TopController extends Controller
{
    public function add()
    {
        return view('admin.top.create');
    }
    
    public function create(Request $request)
    {
      // Varidationを行う
      $this->validate($request, Top::$rules);
      $top = new Top;
      $form = $request->all();
      // フォームから画像が送信されてきたら、保存して、$job->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $top->image_path = basename($path);
      } else {
          $top->image_path = null;
      }
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
     // データベースに保存する
    $top->fill($form);
      $top->save();
        return redirect('admin/top/index');
        
    }
    
    public function index(Request $request)
    {
      // それ以外はすべてのニュースを取得する
          $top = Top::find(1);

        return view('admin.top.index',['top' => $top]);
    }

    public function edit(Request $request)
    {
        $top = top::find(1);
        return view('admin.top.edit',['top' => $top]);
    }

    public function update(Request $request)
    {  
      $top = Top::find(1);
      $top->image_path = $request->input('image_path');
      $top->save();
        return redirect('admin/top/index');
    }
    public function check(Request $request)
    {
      $form = $request->all();
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $image_path = basename($path);
      } else {
          $image_path = $request->input('image_path');;
      }
        return view('admin.job.check',['image_path' => $image_path]);
    }
}
