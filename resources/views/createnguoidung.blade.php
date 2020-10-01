@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <title>thêm nguoi dung</title>
</head>

<body>
  <div class="container"><br><br>
    <form method="post" action="{{route('createnguoidung2')}}">
      @csrf
      <div class="form-group">
        <label>Tên người dùng :</label>
        <input class="form-control" type="text" name="tennguoidung" /><br>
      </div>

      <div class="form-group">
        <label>Sdt :</label>
        <input class="form-control" type="number" name="sdt" /><br>
      </div>

      <div class="form-group">
        <label>Địa chỉ :</label>
        <input class="form-control" type="text" name="diachi" /><br>
      </div>

      <input class="btn btn-primary" type="submit" value="Thêm" />
            <a class="btn btn-primary" href="/dsnguoidung" role="button">Danh sách</a>
  </div>
</body>
@endsection