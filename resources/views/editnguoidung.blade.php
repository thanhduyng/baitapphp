@extends('layouts.app')

@section('content')
<header>
  <title>update người dùng</title>
</header>
<body>
  <div class="container"><br><br>
    <form method="post" action="{{ route('edit2',[$nguoidung->id])}} ">
      @csrf

      <div class="form-group">
        <label>Id:{{$nguoidung->id}}</label>
        <input class="form-control" type="hidden" name="id" value="{{$nguoidung->id}}" /><br>
      </div>

      <div class="form-group">
        <label>Tên người dùng :</label>
        <input class="form-control" type="text" name="tennguoidung" value="{{$nguoidung->tennguoidung}}" /><br>
      </div>
      <div class="form-group">
        <label>Sdt :</label>
        <input class="form-control" type="number" name="sdt" value="{{$nguoidung->sdt}}" /><br>
      </div>

      <div class="form-group">
        <label>Địa chỉ:</label>
        <input class="form-control" type="text" name="diachi" value={{$nguoidung->diachi}} /><br>
      </div>
      <input class="btn btn-primary" type="submit" value="Edit" />
    </form>
  </div>
</body>
@endsection