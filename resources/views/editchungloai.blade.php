@extends('layouts.app')

@section('content')
<header>
  <title>update chủng loại</title>
</header>
<body>
  <div class="container"><br><br>
    <form method="post" action="{{ route('edit2',[$chungloai->id])}} ">
      @csrf

      <div class="form-group">
        <label>Id:{{$chungloai->id}}</label>
        <input class="form-control" type="hidden" name="id" value="{{$chungloai->id}}" /><br>
      </div>

      <div class="form-group">
        <label>Tên người dùng :</label>
        <input class="form-control" type="text" name="tenchungloai" value="{{$chungloai->tenchungloai}}" /><br>
      </div>
     
      <input class="btn btn-primary" type="submit" value="Edit" />
    </form>
  </div>
</body>
@endsection