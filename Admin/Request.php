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
            <div class="text-center d-flex justify-content-center my-5 ">
                <div class="row">
                    <div class="col mx-4">
                        <div class="card" style="width: 18rem; background:#012052; color:white">
                            <div class="card-body">
                                <h5 class="card-title">Total Request</h5>
                                <p class="card-text"><i class="fa-solid fa-eye"></i> 1000</p>
                                <a href="#" class="btn btn-primary">Check</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mx-4">
                        <div class="card" style="width: 18rem; background:#012052; color:white">
                            <div class="card-body">
                                <h5 class="card-title">Pending</h5>
                                <p class="card-text"><i class="fa-solid fa-eye"></i> 500</p>
                                <a href="#" class="btn btn-primary">Check</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mx-4">
                        <div class="card" style="width: 18rem; background:#012052; color:white">
                            <div class="card-body">
                                <h5 class="card-title">Approved</h5>
                                <p class="card-text"><i class="fa-solid fa-eye"></i> 700</p>
                                <a href="#" class="btn btn-primary">Check</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mx-4" style="margin-bottom:25px">
                <div class="card-header">
                    Approval Box
                </div>
                <div class="card-body">


                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Channel Name</th>
                                <th scope="col">TagLine</th>
                                <th scope="col">Approve</th>
                                <th scope="col">Reject</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                                $server_name = "localhost";
                                $user_name = "root";
                                $password = "";
                                $database_name = "newsdb";

                                $conn = mysqli_connect($server_name, $user_name, $password, $database_name);
                                $sql = "select * from users as us, userrequest as ur where us.req_id=ur.request_id";
                                $result = mysqli_query($conn, $sql);
                                if($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr style='cursor:pointer'>
                                    <th scope='row'>".$row["request_id"]."</th>
                                    <td>".$row["Username"]."</td>
                                    <td>".$row["email"]."</td>
                                    <td>".$row["Channel_Name"]."</td>
                                    <td>".$row["Channel_Tagline"]."</td>
                                    <td><button type='button' class='btn btn-success'><i class='fa-solid fa-circle-check'></i></button></td>
                                    <td><button type='button' class='btn btn-danger'><i class='fa-solid fa-circle-xmark'></i></button></td>
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