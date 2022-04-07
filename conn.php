<?php 

session_start();

$conn = mysqli_connect('localhost', 'root', '', 'church');

if(!$conn){
    die("connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){


    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $num = $_POST['num'];
    $add = $_POST['address'];
    $gen = $_POST['gender'];

    $sql = "INSERT INTO user VALUES ('','$fname','$lname','$num','$add','$gen')";
    mysqli_query($conn, $sql);


    echo
    "
    <script> alert('Data are successfully taken') </script>

    ";




}

   


mysqli_close($conn);

?>