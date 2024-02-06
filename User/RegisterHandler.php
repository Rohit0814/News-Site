<?php
    $userName = $_POST["userName"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm-password"];
    $profile_pic = $_FILES["profilePic"];
    $gender = $_POST["gen"];

    $server_name = "localhost";
    $user_name="root";
    $pass="";
    $database_name = "newsdb";

    $conn = mysqli_connect($server_name, $user_name, $pass,$database_name);

    if($password==$confirm_password){
        $file_name = $_FILES["profilePic"]["name"];
        $file_tmp = $_FILES["profilePic"]["tmp_name"];
        $file_type = $_FILES["profilePic"]["type"];
        $file_size = $_FILES["profilePic"]["size"];

        $upload_directory = "../Assets/images/ProfilePic/ProfilePic"; 
        $target_file = $upload_directory . $file_name;
        if(move_uploaded_file($file_tmp, $target_file)) {
            $sql = "insert into users(email,password,profile_img,Gender) values('$userName','$password','$file_name','$gender')";
            $result = mysqli_query($conn, $sql);
            header("location: http://localhost/NewsSite/User/Login.php");
        } 
    }
    else{
        setcookie("failed", "fail", time() + 1);
        header("location: http://localhost/NewsSite/User/Register.php");
    }

    mysqli_close($conn);
