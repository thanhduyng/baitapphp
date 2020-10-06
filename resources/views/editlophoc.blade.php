@extends('layouts.app')

@section('content')
<header>
  <title>update lớp học</title>
</header>

<body>
  <div class="container"><br><br>
    <form method="post" action="{{ route('edit22',[$lophoc->id])}} ">
      @csrf

      <div class="form-group">
        <label>Id:{{$lophoc->id}}</label>
        <input class="form-control" type="hidden" name="id" value="{{$lophoc->id}}" /><br>
      </div>

      <div class="form-group">
        <label>Tên lớp :</label>
        <input class="form-control" type="text" name="tenlop" value="{{$lophoc->tenlop}}" /><br>
      </div>
      <div class="form-group">
        <label>Tên cấp học :</label>
        <select name="id_caphoc">
          @foreach($caphoc as $nd => $value)
          <option value="{{$nd}}" {{($nd == $lophoc->id_caphoc) ? 'selected' : ''}}>{{$value}}</option>
          @endforeach
        </select>
    
      </div>
      <input class="btn btn-primary" type="submit" value="Edit" />
    </form>
  </div>
</body>
@endsection