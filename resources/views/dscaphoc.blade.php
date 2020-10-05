@extends('layouts.app')

@section('content')
<header>
    <title>danh sách cấp hoc </title>
</header>
<body>
<div class="container">
  
    <form method=get action="<?= route("dscaphoc") ?>">
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Tên cấp học</th>
                <th><a href="/createcaphoc">Thêm</a></th>
            </tr>
            @foreach($caphoc as $cl)
            <tr>
                <td>
                    {{$cl->id}}
                </td>
                <td>
                    {{$cl->tencap}}
                </td>
                <td>
                    <a class="btn btn-success" href="editcaphoc/{{$cl->id}}">Edit</a>
                    <a class="btn btn-danger" href="deletecaphoc/{{$cl->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </form>
</div>
</body>
@endsection 