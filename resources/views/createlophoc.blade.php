@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <title>thêm lớp học</title>
</head>

<body>
  <div class="container"><br><br>
    <form method="post" action="{{route('createlophoc2')}}">
      @csrf
      <div class="form-group">
        <label>Tên lớp học :</label>
        <input class="form-control" type="text" name="tenlop" /><br>
      </div>
      <input class="btn btn-primary" type="submit" value="Thêm" />
            <a class="btn btn-primary" href="/dslophoc" role="button">Danh sách</a>
  </div>
</body>
@endsection