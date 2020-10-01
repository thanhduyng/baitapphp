@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <title>thêm tài sản</title>
</head>

<body>
  <div class="container"><br><br>
    <form method="post" action="{{route('createts2')}}">
      @csrf
      <div class="form-group">
        <label>Tên tài sản :</label>
        <input class="form-control" type="text" name="tentaisan" /><br>
      </div>

      <div class="form-group">
        <label>Gía tiền :</label>
        <input class="form-control" type="number" name="giatien" /><br>
      </div>

      <div class="form-group">
        <label>Số lượng :</label>
        <input class="form-control" type="text" name="soluong" /><br>
      </div>

      <div class="form-group">
        <label>Tên người dùng :</label>
        <select name="id_nguoidung">
          @foreach($nguoidung as $nd => $value)
          <option value="{{$nd}}">{{$value}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label>Tên nhà cung cấp :</label>
        <select name="id_nhacc">
          @foreach($nhacc as $nd => $value)
          <option value="{{$nd}}">{{$value}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label>Tên chủng loại :</label>
        <select name="id_chungloai">
          @foreach($chungloai as $nd => $value)
          <option value="{{$nd}}">{{$value}}</option>
          @endforeach
        </select>
      </div>

      <input class="btn btn-primary" type="submit" value="Thêm" />
            <a class="btn btn-primary" href="/dstaisan" role="button">Danh sách</a>
  </div>
</body>
@endsection