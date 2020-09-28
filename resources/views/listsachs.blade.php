
<!DOCTYPE html>
<html lang="en">

<head>
    <title>danh sách sách</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <?php
    // var_dump($sachs);
    ?>
    <table class="table table-bordered"><br><br>
        <h2>danh sách sách</h2><br>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên sách</th>
              
            </tr>
        </thead>
        <tbody>
        <?php
            $stt = 0;
            foreach ($sachs as $value) : $stt++
            ?>
                <tr>
                    <td>{{$stt}}</td>
                    <td>{{ $value->tensach}}</td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
</body>

</html>