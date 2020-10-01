@extends('layouts.app')

@section('content')
<header>
  <title>update tài sản</title>
</header>
<body>
  <div class="container"><br><br>
    <form method="post" action="{{ route('edit2',[$taisan->id])}} ">
      @csrf

      <div class="form-group">
        <label>Id:{{$taisan->id}}</label>
        <input class="form-control" type="hidden" name="id" value="{{$taisan->id}}" /><br>
      </div>

      <div class="form-group">
        <label>Tên tài sản :</label>
        <input class="form-control" type="text" name="tentaisan" value="{{$taisan->tentaisan}}" /><br>
      </div>
      <div class="form-group">
        <label>Gía tiền :</label>
        <input class="form-control" type="number" name="giatien" value="{{$taisan->giatien}}" /><br>
      </div>

      <div class="form-group">
        <label>Số lượng :</label>
        <input class="form-control" type="number" name="soluong" value={{$taisan->soluong}} /><br>
      </div>

      <div class="form-group">
        <label>Tên người dùng :</label>
        <select name="id_nguoidung">
          @foreach($nguoidung as $nd => $value)
          <option value="{{$nd}}" {{($nd == $taisan->id_nguoidung) ? 'selected' : ''}}>{{$value}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label>Tên nhà cung cấp :</label>
        <select name="id_nhacc">
          @foreach($nhacc as $nd => $value)
          <option value="{{$nd}}" {{($nd == $taisan->id_nhacc) ? 'selected' : ''}}>{{$value}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label>Tên chủng loại :</label>
        <select name="id_chungloai">
          @foreach($chungloai as $nd => $value)
          <option value="{{$nd}}" {{($nd == $taisan->id_chungloai) ? 'selected' : ''}}>{{$value}}</option>
          @endforeach
        </select>
      </div>
      <input class="btn btn-primary" type="submit" value="Edit" />
    </form>
  </div>
</body>
@endsection