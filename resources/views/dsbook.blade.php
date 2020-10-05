@extends('layouts.app')

@section('content')
<header>
    <title>danh sách book </title>
  
</header>

<body>
<div class="container">

    <form method=get action="<?= route("dsbook") ?>">
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Tên sách</th>
                <th>Gía tiền</th>      
                <th>Tên lớp </th>
                <th><a href="/createbook">Thêm</a></th>
            </tr>
            @foreach($book as $ts)
            <tr>
                <td>
                    {{$ts->id}}
                </td>
                <td>
                    {{$ts->tensach}}
                </td>
                <td>
                    {{$ts->giatien}}
                </td>
               
                <td><?php echo \App\lophoc::find($ts->id_lophoc)->tenlop ?></td>

                <td>
                    <a class="btn btn-success" href="editbook/{{$ts->id}}">Edit</a>
                    <a class="btn btn-danger" href="deletebook/{{$ts->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </form>
</div>
</body>
@endsection 