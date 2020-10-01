<!DOCTYPE html>
<html lang="en">

<head>
    <title>sửa  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container"><br><br>
        <form action="{{Route('update_nguoidung')}}" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label>Id:{{$nguoi_dung['id']}}</label>
                <input class="form-control" type="hidden" name="id" value="{{$nguoi_dung['id']}}" /><br>
            </div>

            <div class="form-group">
                <label>Tên Người dùng :</label>
                <input class="form-control" type="text" name="tennguoidung" value="{{$nguoi_dung['tennguoidung']}}" /><br>
            </div>

            <div class="form-group">
                <label>Tên Phòng Ban :</label>
                <select name="id_phongban">
                    <?php foreach ($pb as $value) : ?>
                        <option value="{{$value['id']}}" <?php if ($nguoi_dung['id_phongban'] == $value['id']) : ?> selected="selected" <?php endif ?>> {{$value['tenphongban']}}
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <input  class="btn btn-primary" type="submit" value="Sửa" />
        </form>
    </div>
</body>

</html>