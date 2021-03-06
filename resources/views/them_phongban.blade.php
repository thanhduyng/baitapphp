<!DOCTYPE html>
<html lang="en">

<head>
    <title>thêm phòng ban</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container"><br><br>
        <h2>thêm phòng ban</h2><br>
        <form action="{{Route('save_phongban')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label>Tên phòng ban:</label>
                <input class="form-control" type="text" name="tenPhongBan" /><br>
            </div>

            <div class="form-group">
                <label>Tên chức danh:</label>
                <select name="id_cd">
                    <?php foreach ($cd as $value) : ?>
                        <option value="{{$value['id']}}">{{$value['tenChucDanh']}}</option>
                    <?php endforeach ?>
                </select>
            </div>

            <!-- <?php
                    var_dump($cd)
                    ?> -->
            <input class="btn btn-primary" type="submit" value="Thêm" />
            <a class="btn btn-primary" href="/phongban" role="button">Danh sách</a>
        </form>
    </div>
</body>

</html>