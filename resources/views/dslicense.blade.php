@extends('layouts.app')

@section('content')
<header>
    <title>danh sách license </title>
  
</header>

<body>
<div class="container">

    <form method=get action="<?= route("dslicense") ?>">
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Mã license</th>
                <th>Tên sách</th>      
                <th>Trạng thái </th>
                <th>Ngày dùng </th>
                <th><a href="/createlicense">Thêm</a></th>
            </tr>
            @foreach($license as $ts)
            <tr>
                <td>
                    {{$ts->id}}
                </td>
                <td>
                    {{$ts->ma_license}}
                </td>
                <td><?php echo \App\book::find($ts->id_book)->tensach ?></td>
                <td>
                    {{$ts->trangthai}}
                </td>
                <td>
                    {{$ts->ngaydung}}
                </td>
                <td>
                    <a class="btn btn-success" href="editlicense/{{$ts->id}}">Edit</a>
                    <a class="btn btn-danger" href="deletelicense/{{$ts->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </form>
</div>
</body>
@endsection 