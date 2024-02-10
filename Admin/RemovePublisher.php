<?php 
    $id=$_GET["id"];
    $server_name="localhost";
    $user_name="root";
    $password= "";
    $database_name="newsdb";
    $conn=mysqli_connect($server_name,$user_name,$password,$database_name);

    $sql="select req_id from publisher where pub_id=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $req_id=$row["req_id"];
    $sql2="delete from publisher where pub_id=$id";
    $result2=mysqli_query($conn,$sql2);

    $sql3="update users set status=NULL, req_id=NULL where req_id=$req_id";
    $result3=mysqli_query($conn,$sql3);
    $sql4= "delete from userrequest where request_id=$req_id";
    $result4=mysqli_query($conn,$sql4);

    mysqli_close($conn);
    header("location: http://localhost/NewsSite/Admin/publisher.php");
?>