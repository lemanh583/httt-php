<!DOCTYPE html>
<html lang="en">
<?php require_once "./connectDB.php" ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container">
        <form method="POST" action="create.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Nhập tên nhân viên</label>
                <input name="name" type="text" class="form-control" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">Xác nhận</button>
        </form>
    </div>
    <?php
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        if ($name == '') {
            print('Không được bỏ trống');
        } else {
            $query = "INSERT INTO staffs (name) VALUES ('$name')";
            if (mysqli_query($conn, $query)) {
                echo "New record created successfully";
                header('Location: index.php');
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        }
    }



    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>