@extends('layouts.app')

@section('content')
<header>
    <title>danh sách người dùng </title>
</header>
<body>
<div class="container">
  
    <form method=get action="<?= route("dsnguoidung") ?>">
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Tên người dùng</th>
                <th>SDT</th>
                <th>Địa chỉ</th>
                <th><a href="/createnguoidung">Thêm</a></th>
            </tr>
            @foreach($nguoidung as $nd)
            <tr>
                <td>
                    {{$nd->id}}
                </td>
                <td>
                    {{$nd->tennguoidung}}
                </td>
                <td>
                    {{$nd->sdt}}
                </td>
                <td>
                    {{$nd->diachi}}
                </td>

                <td>
                    <a class="btn btn-success" href="editnguoidung/{{$nd->id}}">Edit</a>
                    <a class="btn btn-danger" href="deletenguoidung/{{$nd->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </form>
</div>
</body>
@endsection 