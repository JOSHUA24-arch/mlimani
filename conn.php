<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "fred");

if($conn === false){
    die("Error: Invalid Connection " . mysqli_connect_error());
}

$fname = mysqli_real_escape_string($conn, $_REQUEST['firstname']);
$lname = mysqli_real_escape_string($conn, $_REQUEST['lastname']);
$numb= mysqli_real_escape_string($conn, $_REQUEST['num']);
$addr = mysqli_real_escape_string($conn, $_REQUEST['address']);
$gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);

$sql = "INSERT INTO User VALUES ('$fname', '$lname', '$numb', '$addr', '$gender')";
$result = mysqli_query($conn, $sql);

if($result){
    echo "Successfully Registered!";
    header("Location: registration.php");
    exit();
}


mysqli_close($conn);

?>