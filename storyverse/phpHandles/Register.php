<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require '_dbConnect.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $sql = "INSERT INTO `users` ( `email`, `username`, `password`) VALUES ( '$email', '$username', '$cpassword');";
    $result = mysqli_query($conn , $sql);
    if($result){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $sql =  "SELECT * FROM `users` WHERE `email` = '$email';";
        $resultFetchSno = mysqli_query($conn , $sql);
        $row = mysqli_fetch_assoc($resultFetchSno);
        $sno = $row['sno'];
        $_SESSION['sno'] = $sno;
        header('location: /localhost/index.php');

    }


}

?>