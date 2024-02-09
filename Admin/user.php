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
                    Users Box
                </div>
                <div class="card-body">


                    <table class="table  table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Profile Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Message</th>
                                <th scope="col">Remove</th>
                            </tr>
                        </thead>
                        <tbody>


                        <?php 
                                $server_name = "localhost";
                                $user_name = "root";
                                $password = "";
                                $database_name = "newsdb";

                                $conn = mysqli_connect($server_name, $user_name, $password, $database_name);
                                $sql = "select * from users";
                                $result = mysqli_query($conn, $sql);
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr style='cursor:pointer;'>
                                    <th scope='row' style='line-height:50px'>".$row["user_id"]."</th>
                                    <td><img src=../Assets/images/ProfilePic/ProfilePic".$row["profile_img"]." height=50px width=50px style='border-radius:50%'></td>
                                    <td style='line-height:50px'>".$row["Username"]."</td>
                                    <td style='line-height:50px'>".$row["email"]."</td>
                                    <td style='line-height:50px'>".$row["Gender"]."</td>
                                    <td style='line-height:50px'>".$row["timestamp"]."</td>
                                    <td style='line-height:50px'><button type='button' class='btn btn-success'><i class='fa-solid fa-circle-check'></i></button></td>
                                    <td style='line-height:50px'><button type='button' class='btn btn-danger'><i class='fa-solid fa-circle-xmark'></i></button></td>
                                </tr>";
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