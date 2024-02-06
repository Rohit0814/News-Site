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
                    Setting Box
                </div>
                <div class="card-body">


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="<?php echo $_SESSION['admin_name']; ?>" disabled>
                    </div>

                    <label for="inputPassword5" class="form-label">Change Password</label>
                    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">

                    <label for="inputPassword5" class="form-label my-2">Confirm Password</label>
                    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                    <div id="passwordHelpBlock" class="form-text">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </div>

                    <div class="mb-3 my-4">
                        <label for="formFile" class="form-label">Profile Image</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>

                    <button type="button" class="btn btn-primary">Submit</button>

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