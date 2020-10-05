@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <title>thêm book</title>
</head>

<body>
  <div class="container"><br><br>
    <form method="post" action="{{route('createbook2')}}">
      @csrf
      <div class="form-group">
        <label>Tên sách :</label>
        <input class="form-control" type="text" name="tensach" /><br>
      </div>

      <div class="form-group">
        <label>Gía tiền :</label>
        <input class="form-control" type="number" name="giatien" /><br>
      </div>

      <div class="form-group">
        <label>Tên lop hoc :</label>
        <select name="id_lophoc">
          @foreach($lophoc as $nd => $value)
          <option value="{{$nd}}">{{$value}}</option>
          @endforeach
        </select>
      </div>

      <input class="btn btn-primary" type="submit" value="Thêm" />
            <a class="btn btn-primary" href="/dsbook" role="button">Danh sách</a>
  </div>
</body>
@endsection