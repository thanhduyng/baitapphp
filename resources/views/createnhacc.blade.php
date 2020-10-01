@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <title>thêm nhà cung cấp</title>
</head>

<body>
  <div class="container"><br><br>
    <form method="post" action="{{route('createnhacc2')}}">
      @csrf
      <div class="form-group">
        <label>Tên nhà cung cấp :</label>
        <input class="form-control" type="text" name="tennhacungcap" /><br>
      </div>
      <input class="btn btn-primary" type="submit" value="Thêm" />
            <a class="btn btn-primary" href="/dsnhacungcap" role="button">Danh sách</a>
  </div>
</body>
@endsection