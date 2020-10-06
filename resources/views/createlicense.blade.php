@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>thêm license</title>
</head>

<body>
    <div class="container"><br><br>
        <form method="post" action="{{route('createlicense2')}}">
            @csrf
            <div class="form-group">
                <label>Mã license :</label>
                <input class="form-control" type="text" name="ma_license" /><br>
            </div>

            <div class="form-group">
                <label>Tên sách :</label>
                <select name="id_book">
                    @foreach($book as $nd => $value)
                    <option value="{{$nd}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Trạng thái :</label>
                <div class="radio">
                    <label class="checkbox-inline">
                        <input type="radio"  name="trangthai" checked="checked" value="1" id="trangthai1">Đã dùng</label>
                    <label class="checkbox-inline">
                        <input type="radio"  name="trangthai"  value="0" id="trangthai2">Chưa dùng</label>
                </div>
            </div>

            <div class="form-group">
                <label>Ngày dùng :</label>
                <input class="form-control" type="date" name="ngaydung" /><br>
            </div>

            <input class="btn btn-primary" type="submit" value="Thêm" />
            <a class="btn btn-primary" href="/dslicense" role="button">Danh sách</a>
    </div>
</body>
@endsection