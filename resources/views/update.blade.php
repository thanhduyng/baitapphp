<!DOCTYPE html>
<html lang="en">

<head>
    <title>sửa </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container"><br><br>
        <form action="" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label>Id:{{$users->id}}</label>
                <input class="form-control" type="hidden" name="id" value="{{$users->id}}" /><br>
            </div>

            <div class="form-group">
                <label>Name :</label>
                <input class="form-control" type="text" name="name" value="{{$users->name}}" /><br>
            </div>
            <div class="form-group">
                <label>Tên Chức danh :</label>
                <select name="tenChucDanh">
                  
                </select>
            </div>

            <?php
                    var_dump($chucdanhid)

                    ?>
            <input  class="btn btn-primary" type="submit" value="Sửa" />
        </form>
    </div>
</body>

</html>