<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
@extends('layouts.base')
@section('title','書籍情報確認')
@section('main')
<h2>書籍削除</h2>
<p>以下の書籍を削除します。</p>
<div class="form_conf">
<form method="POST" action="/{{$b->id}}">
  @csrf
  @method('DELETE')
  <div class="pl-2">
    <span id="isbn">管理番号：</span><br>
    {{$b->isbn}}
  </div>
  <div class="pl-2">
    <span id="isbn">書名：</span><br>
    {{$b->title}}
  </div>
  <div class="pl-2">
    <span id="isbn">価格：</span><br>
    {{$b->price}}
  </div>
  <div class="pl-2">
    <span id="isbn">出版社：</span><br>
    {{$b->publisher}}
  </div>
  <div class="pl-2">
    <span id="isbn">刊行日：</span><br>
    {{$b->published}}
  </div>
  <div class="pl-2">
    <input type="submit" value="削除" />
  </div>
</form>
<form action="/list">
  <input type="submit" value="戻る">
</form>
</div>
@endsection