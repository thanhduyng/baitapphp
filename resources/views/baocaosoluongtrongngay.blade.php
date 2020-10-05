@extends('layouts.app')

@section('content')
<header>
    <title>danh sách book </title>

</header>

<body>
    <div class="container">

        <form method=get action="<?= route("baocao") ?>">
            <table class="table table-bordered">
                <tr>
                    <th>Tên cấp</th>
                    <th>Tên lớp</th>
                    <th>Ngày dùng</th>
                    <th>Số lượng</th>
                </tr>
                <tr>
                    <?php for ($i = 0; $i < count($baocao); $i++) { ?>
                <tr>

                    <td><?= $baocao[$i]->tencap ?></td>
                    <td><?= $baocao[$i]->tenlop ?></td>
                    <td><?= $baocao[$i]->ngaydung ?></td>
                    <td><?= $baocao[$i]->soluong ?></td>
                </tr>
            <?php } ?>
            </tr>
            </table>
        </form>
    </div>
</body>
@endsection