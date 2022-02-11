<?php require_once "./connectDB.php" ?>
<?php
$id = $_GET['id'];
$sql = "DELETE FROM staffs where id = '$id'";
// echo $sql;
$result = mysqli_query($conn, $sql);
header('Location: /httt/index.php');