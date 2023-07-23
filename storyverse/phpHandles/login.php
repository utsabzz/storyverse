<?php  

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require '_dbConnect.php';
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` where `email`  = '$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if ($numRows == 1) {
        $row = mysqli_fetch_assoc($result);
        session_start();
            $_SESSION['email'] = $row['email'];
            $_SESSION['sno'] = $row['sno'];
            $_SESSION['username'] = $row['username'];
            header('location: /localhost/storyverse/index.php');
        
    }



}



?>