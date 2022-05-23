<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InquiyController extends Controller
{
  //add
    public function add()
    {
        return view('admin.inquiy.create');
    }
  //create
    public function create(Request $request)
    {
      // Varidationを行う
      $this->validate($request, Inquiy::$rules);
      $inquiy = new Inquiy;
      $form = $request->all();
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      
      // データベースに保存する
      $inquiy->fill($form);
      $inquiy->save();
        return redirect('admin/inquiy');
    }
  //edit
    public function edit(Request $request)
  {
      // Inquiy Modelからデータを取得する
      $inquiy = Inquiy::find($request->id);
      if (empty($inquiy)) {
        abort(404);    
      }
        return view('admin.inquiy.edit', ['inquiy_form' => $inquiy]);
    }
  //Update
    public function update(Request $request)
    {
        $this->validate($request, Inquiy::$rules);
        $inquiy = Inquiy::find($request->id);
        $inquiy_form = $request->all();
       
        unset($inquiy_form['_token']);
        
        $inquiy->fill($inquiy_form)->save();

        $history = new InquiyHistory;
        $history->inquiy_id = $inquiy->id;
        $history->edited_at = Carbon::now();
        $history->save();
    
        return redirect('admin/inquiy');
    }
  //index
  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Inquiy::where('name', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Inquiy::all();
      }
      return view('admin.inquiy.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
}
