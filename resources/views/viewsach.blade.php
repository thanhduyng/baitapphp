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
        <!-- <form method="get" action="{{route('viewbaocaosach')}}">
            <label>Bao cao sach</label>
            <input type="text" name="search">
            <button type="submit">Tim kiem</button>
        </form> -->
        <form method=get action="<?= route("viewsach") ?>">
            <table class="table table-bordered"><br><br>
                <h2>danh sách</h2><br>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Ten sach</th>
                        <th><a href="/create">Thêm</a></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($sachs as $re)
                    <tr>
                        <td>
                            {{$re->id}}
                        </td>
                        <td>
                            {{$re->tensach}}
                        </td>
                        <td>
                        <a href="edit/{{$re->id}}">Sửa</a>
                        <a href="del/{{$re->id}}">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</body>

</html>