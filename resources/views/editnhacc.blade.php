@extends('layouts.app')

@section('content')
<header>
  <title>update nhà cung cấp</title>
</header>
<body>
  <div class="container"><br><br>
    <form method="post" action="{{ route('edit2',[$nhacc->id])}} ">
      @csrf

      <div class="form-group">
        <label>Id:{{$nhacc->id}}</label>
        <input class="form-control" type="hidden" name="id" value="{{$nhacc->id}}" /><br>
      </div>

      <div class="form-group">
        <label>Tên nhà cung cấp :</label>
        <input class="form-control" type="text" name="tennhacungcap" value="{{$nhacc->tennhacungcap}}" /><br>
      </div>
     
      <input class="btn btn-primary" type="submit" value="Edit" />
    </form>
  </div>
</body>
@endsection