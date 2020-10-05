@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <title>thêm cấp học</title>
</head>

<body>
  <div class="container"><br><br>
    <form method="post" action="{{route('createcaphoc2')}}">
      @csrf
      <div class="form-group">
        <label>Tên cấp học :</label>
        <input class="form-control" type="text" name="tencap" /><br>
      </div>
      <input class="btn btn-primary" type="submit" value="Thêm" />
            <a class="btn btn-primary" href="/dscaphoc" role="button">Danh sách</a>
  </div>
</body>
@endsection