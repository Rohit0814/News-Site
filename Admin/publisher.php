<?php
session_start();
if (isset($_SESSION["admin_name"]) and isset($_SESSION["admin_password"])) {
    include("CommanLayout.php");
?>

    <?php
    include("sidebar.php");
    ?>

    <div class="main-board">
        <div class="sub-board">
            <div class="card my-4 mx-4" style="margin-bottom:25px">
                <div class="card-header">
                    Publisher Box
                </div>
                <div class="card-body">


                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Logo</th>
                                <th scope="col">Channel Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Channel Tagline</th>
                                <th scope="col">Message</th>
                                <th scope="col">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $server_name="localhost";
                                $user_name="root";
                                $password= "";
                                $database_name="newsdb";
                                $conn=mysqli_connect($server_name,$user_name,$password,$database_name);

                                $sql="select * from publisher";
                                $result=mysqli_query($conn,$sql);
                                while($row=mysqli_fetch_assoc($result)){
                                    $sql2="select * from userrequest as ur, users as us where ur.request_id=".$row["req_id"]." and ur.request_id=us.req_id";
                                    $result2=mysqli_query($conn,$sql2);
                                    $row2=mysqli_fetch_assoc($result2);

                                    echo "
                                    <tr style='cursor:pointer;'>
                                <th scope='row' style='line-height:50px'>".$row["pub_id"]."</th>
                                <td><img src=../Assets/images/ChannelLogo/".$row2["Channel_Logo"]." height=50px width=50px style='border-radius:50%'></td>
                                <td style='line-height:50px'>".$row2["Channel_Name"]."</td>
                                <td style='line-height:50px'>".$row2["email"]."</td>
                                <td style='line-height:50px'>".$row2["Channel_Tagline"]."</td>
                                <td style='line-height:50px'><button type='button' class='btn btn-success'><i class='fa-solid fa-message'></i></button></td>
                                <td style='line-height:50px'><a href='RemovePublisher.php?id=".$row["pub_id"]."' class='btn btn-danger'><i class='fa-solid fa-circle-xmark'></i></a></td>
                            </tr>
                                    ";
                                }

                                mysqli_close($conn);
                            ?>
                        </tbody>
                    </table>


                </div>
            </div>

        </div>
    </div>

<?php
} else {
    header("location: http://localhost/NewsSite/Admin/Login.php");
}
?>

</body>

</html>