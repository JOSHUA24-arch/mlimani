<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "fred");

if($conn === false){
    die("Error: Invalid Connection " . mysqli_connect_error());
}


$user = $_POST['username'];
$pwd = $_POST['password'];

$rabo = "SELECT * FROM admin";
$mallya = mysqli_query($conn, $rabo);


if($mallya && mysqli_num_rows($mallya) > 0){
    $row = mysqli_fetch_array($mallya);

    if($row['username'] === $user && $row['password'] === $pwd){
        header("Location: retrieve.php");
        exit();

    }
    else{
        header("Location: admin.php");
        exit();
    }
}

mysqli_close($conn);

?>