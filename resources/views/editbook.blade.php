@extends('layouts.app')

@section('content')
<header>
  <title>update book</title>
</header>
<body>
  <div class="container"><br><br>
    <form method="post" action="{{ route('edit2',[$book->id])}} ">
      @csrf

      <div class="form-group">
        <label>Id:{{$book->id}}</label>
        <input class="form-control" type="hidden" name="id" value="{{$book->id}}" /><br>
      </div>

      <div class="form-group">
        <label>Tên sách :</label>
        <input class="form-control" type="text" name="tensach" value="{{$book->tensach}}" /><br>
      </div>
      <div class="form-group">
        <label>Gía tiền :</label>
        <input class="form-control" type="number" name="giatien" value="{{$book->giatien}}" /><br>
      </div>

      <div class="form-group">
        <label>Tên lớp :</label>
        <select name="id_lophoc">
          @foreach($lophoc as $nd => $value)
          <option value="{{$nd}}" {{($nd == $book->id_lophoc) ? 'selected' : ''}}>{{$value}}</option>
          @endforeach
        </select>
      </div>
      <input class="btn btn-primary" type="submit" value="Edit" />
    </form>
  </div>
</body>
@endsection