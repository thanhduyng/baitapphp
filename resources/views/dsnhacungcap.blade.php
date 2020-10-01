@extends('layouts.app')

@section('content')
<header>
    <title>danh sách nhà cung cấp </title>
</header>
<body>
<div class="container">
  
    <form method=get action="<?= route("dschungloai") ?>">
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Tên nhà cung cấp</th>
                <th><a href="/createnhacc">Thêm</a></th>
            </tr>
            @foreach($nhacc as $ncc)
            <tr>
                <td>
                    {{$ncc->id}}
                </td>
                <td>
                    {{$ncc->tennhacungcap}}
                </td>
                <td>
                    <a class="btn btn-success" href="editnhacc/{{$ncc->id}}">Edit</a>
                    <a class="btn btn-danger" href="deletenhacc/{{$ncc->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </form>
</div>
</body>
@endsection 