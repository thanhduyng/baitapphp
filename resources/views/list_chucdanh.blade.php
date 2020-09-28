
<!DOCTYPE html>
<html lang="en">

<head>
    <title>danh sách chức danh</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <?php
    // var_dump($chuc_danh);
    ?>
    <table class="table table-bordered"><br><br>
        <h2>danh sách chức danh</h2><br>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên Chức danh</th>
                <th><a href="/them_chucdanh">Thêm</a></th>

            </tr>
        </thead>
        <tbody>
            <?php
            $stt = 0;
            foreach ($chuc_danh as $value) : $stt++
            ?>
                <tr>
                    <td>{{$stt}}</td>
                    <td>{{ $value['tenChucDanh']}}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="sua_chucdanh/{{$value['id']}}">Sửa</a>
                         <a class="btn btn-danger btn-sm" href="xoa_chucdanh/{{$value['id']}}">Xoá</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
</body>

</html>