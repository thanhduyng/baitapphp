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
                <th>Tên tài sản</th>
                <th>Gía tiền</th>
                <th>Số lượng</th>
                <th>Tên người dùng</th>
                <th>Tên nhà cung cấp</th>
                <th>Tên chủng loại</th>
                <th><a href="/createts">Thêm</a></th>
            </tr>
            @foreach($taisan as $ts)
            <tr>
                <td>
                    {{$ts->id}}
                </td>
                <td>
                    {{$ts->tentaisan}}
                </td>
                <td>
                    {{$ts->giatien}}
                </td>
                <td>
                    {{$ts->soluong}}
                </td>
               
                <td><?php echo \App\nguoidung::find($ts->id_nguoidung)->tennguoidung ?></td>

                <td><?php echo \App\nhacungcap::find($ts->id_nhacc)->tennhacungcap ?></td>

                <td><?php echo \App\chungloai::find($ts->id_chungloai)->tenchungloai ?></td>

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