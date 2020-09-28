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
        <form action="{{Route('update_sach')}}" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label>Id:{{$sach['id']}}</label>
                <input class="form-control" type="hidden" name="id" value="{{$sach['id']}}" /><br>
            </div>

            <div class="form-group">
                <label>Tên sách :</label>
                <input class="form-control" type="text" name="tensach" value="{{$sach['tensach']}}" /><br>
            </div>
         
            <input  class="btn btn-primary" type="submit" value="Sửa" />
        </form>
    </div>
</body>

</html>