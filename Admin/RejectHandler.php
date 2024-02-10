<?php
    $id=$_GET["id"];
    $server_name="localhost";
    $user_name="root";
    $password= "";
    $database_name="newsdb";
    $conn=mysqli_connect($server_name,$user_name,$password,$database_name);

    $sql1="delete from userrequest where request_id=$id";
    $result1=mysqli_query($conn, $sql1);

    $sql2="update users set req_id=NULL where req_id=$id";
    $result2=mysqli_query($conn, $sql2);

    $sql3="select * from status";
    $result3=mysqli_query($conn,$sql3);
    $row=mysqli_fetch_array($result3);
    $pending= $row["Pending_request"];
    $pending=$pending-1;
    $rejected= $row["Rejected_request"];
    $rejected=$rejected+1;
    $sql5="update status set Pending_request=$pending, Rejected_request=$rejected where status_Id=1";
    $result5=mysqli_query($conn,$sql5);
    mysqli_close($conn);
    header("location: http://localhost/NewsSite/Admin/Request.php");
?>