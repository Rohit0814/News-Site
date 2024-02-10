<?php
    $id=$_GET["id"];
    $server_name="localhost";
    $user_name="root";
    $password= "";
    $database_name="newsdb";
    $conn=mysqli_connect($server_name,$user_name,$password,$database_name);

    $sql1="select * from publisher";
    $result1=mysqli_query($conn,$sql1);
    $current_id=mysqli_num_rows($result1);
    $current_id = $current_id+ 1;

    $sql2= "insert into publisher(pub_id,req_id) values($current_id,$id)";
    $result2=mysqli_query($conn,$sql2);
    $sql3="update users set status='Publisher' where req_id=$id";
    $result3=mysqli_query($conn,$sql3);
    $sql4="select * from status";
    $result4=mysqli_query($conn,$sql4);
    $row=mysqli_fetch_array($result4);
    $pending= $row["Pending_request"];
    $pending=$pending-1;
    $approved= $row["Approved_request"];
    $approved=$approved+1;
    $sql5="update status set Pending_request=$pending, Approved_request=$approved where status_Id=1";
    $result5=mysqli_query($conn,$sql5);
    mysqli_close($conn);
    header("location: http://localhost/NewsSite/Admin/Request.php");
?>