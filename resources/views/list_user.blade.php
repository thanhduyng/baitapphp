<!DOCTYPE html>
<html lang="en">
<head>
<title>danh sách user</title>
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
    // var_dump($users);
    ?>
<table class="table table-bordered"><br><br>
        <h2>danh sách user</h2><br>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên User</th>
                <th>Email</th>
                <th>Tên Chức Danh</th>
                <th>Tên Phòng Ban</th>
                <th> <a class="btn btn-primary btn-sm" href="/them_user">Thêm</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stt = 0;
            foreach ($users as $value) : $stt++
            ?>
                <tr>
                    <td>{{$stt}}</td>
                    <td>{{ $value['name']}}</td>
                    <td>{{ $value['email']}}</td>
                    <td><?php echo \App\model_ChucDanh::find($value['chucdanhid'])->tenChucDanh ?></td>
                    <td><?php echo \App\model_PhongBan::find($value['phongbanid'])->tenPhongBan ?></td>     
                    <td>
                        <a class="btn btn-primary btn-sm" href="sua_user/{{$value['id']}}">Sửa</a>
                         <a class="btn btn-danger btn-sm" href="xoa_user/{{$value['id']}}">Xoá</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>