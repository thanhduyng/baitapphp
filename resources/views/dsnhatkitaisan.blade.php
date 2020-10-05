@extends('layouts.app')

@section('content')
<header>
    <title>danh sách tài sản </title>
  
</header>

<body>
<div class="container">

    <form method=get action="<?= route("dstaisan") ?>">
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Tên nguời nhận tài sản</th>
                <th>Tên tài sản</th>
                <th>Ngày di chuyển</th>
                <th><a href="/createnkts">Thêm</a></th>
            </tr>
            @foreach($nkts as $ts)
            <tr>
                <td>
                    {{$ts->id}}
                </td>
               
                <td><?php echo \App\nguoidung::find($ts->id_nguoidung)->tennguoidung ?></td>

                <td><?php echo \App\taisan::find($ts->id_taisan)->tentaisan ?></td>

                <td>
                    {{$ts->ngaydichuyen}}
                </td>

                <td>
                    <a class="btn btn-success" href="editts/{{$ts->id}}">Edit</a>
                    <a class="btn btn-danger" href="deletets/{{$ts->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </form>
</div>
</body>
@endsection 