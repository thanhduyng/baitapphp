@extends('layouts.app')

@section('content')
<header>
  <title>update license</title>
</header>
<body>
  <div class="container"><br><br>
    <form method="post" action="{{ route('edit2',[$license->id])}} ">
      @csrf

      <div class="form-group">
        <label>Id:{{$license->id}}</label>
        <input class="form-control" type="hidden" name="id" value="{{$license->id}}" /><br>
      </div>

      <div class="form-group">
        <label>Mã license :</label>
        <input class="form-control" type="text" name="ma_license" value="{{$license->ma_license}}" /><br>
      </div>
      <div class="form-group">
        <label>Tên sách :</label>
        <select name="id_book">
          @foreach($book as $nd => $value)
          <option value="{{$nd}}" {{($nd == $license->id_book) ? 'selected' : ''}}>{{$value}}</option>
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
        <input class="form-control" type="date" name="ngaydung" value={{$license->ngaydung}} /><br>
      </div>

    
      <input class="btn btn-primary" type="submit" value="Edit" />
    </form>
  </div>
</body>
@endsection