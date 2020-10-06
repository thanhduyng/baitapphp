@extends('layouts.app')

@section('content')
<header>
    <title>danh sách lop hoc </title>
</header>
<body>
<div class="container">
  
    <form method=get action="<?= route("dscaphoc") ?>">
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Tên lớp học</th>
                <th>Tên Cấp học</th>
                <th><a href="/createlophoc">Thêm</a></th>
            </tr>
            @foreach($lophoc as $cl)
            <tr>
                <td>
                    {{$cl->id}}
                </td>
                <td>
                    {{$cl->tenlop}}
                </td>
                <td><?php echo \App\caphoc::find($cl->id_caphoc)->tencap ?></td>
                <td>
                    <a class="btn btn-success" href="editlophoc/{{$cl->id}}">Edit</a>
                    <a class="btn btn-danger" href="deletelophoc/{{$cl->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </form>
</div>
</body>
@endsection 