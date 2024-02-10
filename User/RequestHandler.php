<?php
    session_start();
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database_name="newsdb";

    $conn = mysqli_connect($server_name,$user_name,$password,$database_name);

    $rowCount = 0;
    $sql = "select * from userrequest";
    if($result = mysqli_query($conn, $sql)){
        $rowCount=mysqli_num_rows($result);
        $current_id=$rowCount+1;
        $request_channel_name = $_POST["request_channel_name"];
        $request_channel_tagline = $_POST["request_channel_tagline"];
        $request_password = $_POST["request_password"];

        $file_name = $_FILES["channel_logo"]["name"];
        $file_tmp = $_FILES["channel_logo"]["tmp_name"];
        $file_type = $_FILES["channel_logo"]["type"];
        $file_size = $_FILES["channel_logo"]["size"];

        $upload_directory = "../Assets/images/ChannelLogo/";
        $target_file = $upload_directory . $file_name;
        move_uploaded_file($file_tmp, $target_file);

        $sql3="select req_id from users where user_id=".$_SESSION["id"];
        $result3 = mysqli_query($conn, $sql3);
        $row2=mysqli_fetch_assoc($result3);
        if(is_null($row2["req_id"])){
            $sql1 = "insert into userrequest(channel_name,channel_tagline,channel_password,channel_logo) values('$request_channel_name','$request_channel_tagline','$request_password','$file_name')";
            $result1 = mysqli_query($conn, $sql1);
            $lastInsertedId = mysqli_insert_id($conn);

            $sql4="select Total_request,Pending_request from status";
            $result4 = mysqli_query($conn, $sql4);
            $row4=mysqli_fetch_array($result4);
            $total_request = $row4["Total_request"];
            $pending_request=$row4["Pending_request"];
            $total_request=$total_request+1;
            $pending_request= $pending_request+ 1;
            $sql5="update status set Total_request=$total_request, Pending_request=$pending_request where status_Id=1";
            $result5 = mysqli_query($conn, $sql5);

            $sql2="update users set req_id=".$lastInsertedId." where user_id=".$_SESSION["id"];
            $result2 = mysqli_query($conn, $sql2);
            setcookie("request", 'success', time()+ 10);
        }else{
            setcookie("request", 'failed', time()+ 10);
        }
    }


    mysqli_close($conn);
    header("location: http://localhost/NewsSite/user/Home.php");




?>