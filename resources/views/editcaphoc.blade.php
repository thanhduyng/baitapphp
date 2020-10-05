@extends('layouts.app')

@section('content')
<header>
  <title>update cấp học</title>
</header>
<body>
  <div class="container"><br><br>
    <form method="post" action="{{ route('edit2',[$caphoc->id])}} ">
      @csrf

      <div class="form-group">
        <label>Id:{{$caphoc->id}}</label>
        <input class="form-control" type="hidden" name="id" value="{{$caphoc->id}}" /><br>
      </div>

      <div class="form-group">
        <label>Tên cấp :</label>
        <input class="form-control" type="text" name="tencap" value="{{$caphoc->tencap}}" /><br>
      </div>
     
      <input class="btn btn-primary" type="submit" value="Edit" />
    </form>
  </div>
</body>
@endsection