<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class SaveController extends Controller
{
  // データを一覧表示
  public function list()
  {
    // booksテーブルから全行取得
    $data = [
      'records' => Book::all()
    ];
    return view('list', $data);
  }

  // 入力フォーム生成
  public function create(){
    return view('create');
  }

  // フォームからの入力値をデータベースに登録
  public function store(Request $req){
    // 入力の検証
    $this->validate($req,Book::$rules);

    // bookオブジェクトを介してデータ保存
    $b = new Book();
    $b->fill($req->except('_token'))->save();
    return redirect('list');
  }

  // 指定された書籍情報を取得
  public function edit($id){
    return view('edit',[
      'b'=>Book::findOrFail($id)
    ]);
  }

  // 書籍情報を更新
  public function update(Request $req, $id){
    // 入力の検証
    $this->validate($req,Book::$rules);

    // 目的のデータを取得
    $b = Book::findOrFail($id);

    // 入力値でモデルを更新＆保存
    $b->fill($req->except('_token','_method'))->save();
    return redirect('list');
  }

  // 選択された書籍情報を表示
  public function show($id){
    return view('show',[
      'b'=>Book::findOrFail($id)
    ]);
  }

  // 書籍情報を削除
  public function destroy($id){
    $b = Book::findOrFail($id);
    $b->delete();
    return redirect('list');
  }

}
