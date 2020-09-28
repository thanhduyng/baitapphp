<!DOCTYPE html>
<html lang="en">

<head>
    <title>sửa user</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container"><br><br>
        <form action="{{Route('update_user')}}" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label>Id:{{$users['id']}}</label>
                <input class="form-control" type="hidden" name="id" value="{{$users['id']}}" /><br>
            </div>

            <div class="form-group">
                <label>Tên Chức danh :</label>
                <select name="chucdanhid">
                    <?php foreach ($cd as $value) : ?>
                        <option value="{{$value['id']}}" <?php if ($users['chucdanhid'] == $value['id']) : ?> selected="selected" <?php endif ?>> {{$value['tenChucDanh']}}
                        </option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="form-group">
                <label>Tên Phòng Ban :</label>
                <select name="phongbanid">
                    <?php foreach ($pb as $value) : ?>
                        <option value="{{$value['id']}}" <?php if ($users['phongbanid'] == $value['id']) : ?> selected="selected" <?php endif ?>> {{$value['tenPhongBan']}}
                        </option>
                    <?php endforeach ?>
                </select>
            </div>


            <input class="btn btn-primary" type="submit" value="Sửa" />
            <a class="btn btn-primary" href="/user" role="button">Danh sách</a>
        </form>
    </div>
</body>

</html>