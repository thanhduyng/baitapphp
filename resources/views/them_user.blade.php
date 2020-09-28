<!DOCTYPE html>
<html lang="en">

<head>
    <title>thêm user</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container"><br><br>
        <h2>thêm user</h2><br>
        <form action="{{Route('save_user')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label>Tên user:</label>
                <input class="form-control" type="text" name="name" /><br>
            </div>

            <div class="form-group">
                <label>Email:</label>
                <input class="form-control" type="email" name="email" /><br>
            </div>

            <div class="form-group">
                <label>Password:</label>
                <input class="form-control" type="password" name="password" /><br>
            </div>
            
            <div class="form-group">
                <label>Tên chức danh</label>
                <select name="tenChucDanh">
                <?php foreach ($cd as $value) : ?>
                        <option value="{{$value['id']}}">{{$value['tenChucDanh']}}</option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label>Tên phòng ban</label>
                <select name="tenPhongBan">
                <?php foreach ($pb as $value) : ?>
                        <option value="{{$value['id']}}">{{$value['tenPhongBan']}}</option>
                    <?php endforeach ?>
                </select>
            </div>

           
            <input class="btn btn-primary" type="submit" value="Thêm" />
            <a class="btn btn-primary" href="/user" role="button">Danh sách</a>
        </form>
    </div>
</body>

</html>