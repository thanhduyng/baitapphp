<!DOCTYPE html>
<html lang="en">

<head>
    <title>danh sách </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
  
    <table class="table table-bordered"><br><br>
        <h2>danh sách  </h2><br>
        <div><a href="/them_divao">Thêm</a></div>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên Người Dùng</th>
                <th>Tên Máy Quét</th>
                <th>Giờ vào</th>
                <th>Giờ ra</th>
              
            </tr>
        </thead>
        <tbody>
            <?php
            $stt = 0;
            foreach ($divao as $value) : $stt++
            ?>
                <tr>
                    <td>{{$stt}}</td>
                    <td><?php echo \App\model_nguoidung::find($value['id_nguoidung'])->tennguoidung ?></td>
                    <td><?php echo \App\mayquetthe::find($value['id_mayquetthe'])->tenmay ?></td>
                    <td>{{ $value['created_at']}}</td>
                    <td>{{ $value['updated_at']}}</td>
                    
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
</body>

</html>