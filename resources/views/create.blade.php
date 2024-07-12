<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
@extends('layouts.base')
@section('title', '新規登録')
@section('main')
@if($errors->any())
  <ul>
    @foreach($errors->all() as $err)
    <li class="text-danger">{{$err}}</li>
    @endforeach
  </ul>
@endif
<h2>新規登録</h2>
<div class="form_conf">
<form method="POST" action="/store">
  @csrf
  <div class="pl-2">
    <label id="isbn">管理番号：</label><br>
    <input id="isbn" name="isbn" type="text" size="15" value="{{old('isbn')}}"
    class="@error('isbn') bg-danger @enderror" />
  </div>
  <div class="pl-2">
    <label id="title">書名：</label><br>
    <input id="title" name="title" type="text" size="30" value="{{old('title')}}"
    class="@error('title') bg-danger @enderror" />
  </div>
  <div class="pl-2">
    <label id="price">価格：</label><br>
    <input id="price" name="price" type="text" size="5" value="{{old('price')}}" 
    class="@error('price') bg-danger @enderror" />円
  </div>
  <div class="pl-2">
    <label id="publisher">出版社：</label><br>
    <input id="publisher" name="publisher" type="text" size="10" value="{{old('publisher')}}"
    class="@error('publisher') bg-danger @enderror" />
  </div>
  <div class="pl-2">
    <label id="published">刊行日：</label><br>
    <input id="published" name="published" type="text" size="10" value="{{old('published')}}"
    class="@error('published') bg-danger @enderror" />
  </div>
  <div class="pl-2">
    <input type="submit" value="登録" />
  </div>
</form>
<form action="/list">
  <input type="submit" value="戻る">
</form>
</div>
<!-- <button type="button" onclick=history.back()>戻る</button> -->
@endsection