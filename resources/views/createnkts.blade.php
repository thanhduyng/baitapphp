@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <title>thêm nhật kí di chuyển</title>
</head>

<body>
  <div class="container"><br><br>
    <form method="post" action="{{route('createnkts2')}}">
      @csrf
      <div class="form-group">
        <label>Tên người nhận tài sản :</label>
        <select name="id_nguoidung">
          @foreach($nd as $nd => $value)
          <option value="{{$nd}}">{{$value}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label>Tên tài sản :</label>
        <select name="id_taisan">
          @foreach($ts as $nd => $value)
          <option value="{{$nd}}">{{$value}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label>Ngày di chuyển :</label>
        <input class="form-control" type="date" name="ngaydichuyen" /><br>
      </div>

      <input class="btn btn-primary" type="submit" value="Thêm" />
            <a class="btn btn-primary" href="/dsnhatkitaisan" role="button">Danh sách</a>
  </div>
</body>
@endsection