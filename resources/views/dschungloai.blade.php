@extends('layouts.app')

@section('content')
<header>
    <title>danh sách chủng loại </title>
</header>
<body>
<div class="container">
  
    <form method=get action="<?= route("dschungloai") ?>">
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Tên chủng loại</th>
                <th><a href="/createchungloai">Thêm</a></th>
            </tr>
            @foreach($chungloai as $cl)
            <tr>
                <td>
                    {{$cl->id}}
                </td>
                <td>
                    {{$cl->tenchungloai}}
                </td>
                <td>
                    <a class="btn btn-success" href="editchungloai/{{$cl->id}}">Edit</a>
                    <a class="btn btn-danger" href="deletechungloai/{{$cl->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </form>
</div>
</body>
@endsection 