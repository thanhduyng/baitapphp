<!DOCTYPE html>
<html lang="en">

<head>
    <title>thêm  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container"><br><br>
        <h2>thêm  </h2><br>
        <form action="{{('save_divao')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label>Giờ vào:</label>
                <input class="form-control" type="date" name="created_at" /><br>
            </div>

            <div class="form-group">
                <label>Giờ ra:</label>
                <input class="form-control" type="date" name="updayted_at /><br>
            </div>

            <div class="form-group">
                <label>Giờ vào:</label>
                <input class="form-control" type="date" name="giovao" value="2020-09-09" /><br>
            </div>

            <div class="form-group">
                <label>Tên máy quét:</label>
                <select name="id_mayquetthe">
                    <?php foreach ($mayquetthe as $value) : ?>
                        <option value="{{$value['id']}}">{{$value['tenmay']}}</option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="form-group">
                <label>Tên người dùng:</label>
                <select name="id_nguoidung">
                    <?php foreach ($nguoi_dung as $value) : ?>
                        <option value="{{$value['id']}}">{{$value['tennguoidung']}}</option>
                    <?php endforeach ?>
                </select>
            </div>

          
            <input class="btn btn-primary" type="submit" value="Thêm" />
            <a class="btn btn-primary" href="/divao" role="button">Danh sách</a>
        </form>
    </div>
</body>

</html>