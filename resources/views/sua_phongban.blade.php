<!DOCTYPE html>
<html lang="en">

<head>
    <title>sửa phòng ban</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container"><br><br>
        <form action="{{Route('save_phongban2')}}" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label>Id:{{$pb['id']}}</label>
                <input class="form-control" type="hidden" name="id" value="{{$pb['id']}}" /><br>
            </div>

            <div class="form-group">
                <label>Tên Phòng ban :</label>
                <input class="form-control" type="text" name="tenPhongBan" value="{{$pb['tenPhongBan']}}" /><br>
            </div>

            <div class="form-group">
                <label>Tên Chức danh :</label>
                <select name="id_cd">
                    <?php foreach ($cd as $value) : ?>
                        <option value="{{$value['id']}}" <?php if ($pb['id_cd'] == $value['id']) : ?> selected="selected" <?php endif ?>> {{$value['tenChucDanh']}}
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <!-- <?php
                    var_dump($pb)

                    ?> -->
            <input  class="btn btn-primary" type="submit" value="Sửa" />
        </form>
    </div>
</body>

</html>