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
                                <th scope="col">Name</th>
                                <th scope="col">TagLine</th>
                                <th scope="col">Channel Name</th>
                                <th scope="col">Message</th>
                                <th scope="col">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td><button type="button" class="btn btn-success"><i class="fa-solid fa-message"></i></button></td>
                                <td><button type="button" class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i></button></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td><button type="button" class="btn btn-success"><i class="fa-solid fa-message"></i></button></td>
                                <td><button type="button" class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i></button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                <td><button type="button" class="btn btn-success"><i class="fa-solid fa-message"></i></button></td>
                                <td><button type="button" class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i></button></td>
                            </tr>
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