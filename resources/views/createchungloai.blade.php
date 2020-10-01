@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <title>thêm chủng loại</title>
</head>

<body>
  <div class="container"><br><br>
    <form method="post" action="{{route('createchungloai2')}}">
      @csrf
      <div class="form-group">
        <label>Tên chủng loại :</label>
        <input class="form-control" type="text" name="tenchungloai" /><br>
      </div>
      <input class="btn btn-primary" type="submit" value="Thêm" />
            <a class="btn btn-primary" href="/dschungloai" role="button">Danh sách</a>
  </div>
</body>
@endsection