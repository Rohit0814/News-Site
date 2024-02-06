<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../Assets/CSS/AdminStyle.css">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;background:#d4deff;">
        <div class="login-form card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../Assets/images/userLogin.jpg" class="img-fluid rounded-start" alt="..." style="height:100%">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <form method="post" action="RegisterHandler.php" enctype="multipart/form-data">
                            <h5 class="card-title text-center">User Register</h5>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="userName">
                            </div>
                            <label for="inputPassword5" class="form-label">Password</label>
                            <input type="password" id="inputPassword5" name="password" class="form-control" aria-describedby="passwordHelpBlock">
                            <label for="inputPassword5" class="form-label">Confirm Password</label>
                            <input type="password" id="inputPassword5" name="confirm-password" class="form-control" aria-describedby="passwordHelpBlock">
                            <div id="passwordHelpBlock" class="form-text">
                                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                            </div>

                            <div class="mb-3 my-3">
                                <label for="formFile" class="form-label">Profile pic</label>
                                <input class="form-control" type="file" name="profilePic" id="formFile">
                            </div>


                            <div class="mb-3 my-3">
                                <label for="formFile" class="form-label">Gender</label>
                                <div class="form-check form-check-inline mx-3">
                                    <input class="form-check-input" type="radio" name="gen" id="inlineCheckbox1" value="male">
                                    <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gen" id="inlineCheckbox2" value="female">
                                    <label class="form-check-label" for="inlineCheckbox2">Female</label>
                                </div>
                            </div>
                            <?php
                            if (isset($_COOKIE['failed'])) {
                                echo "<span style='color:red;'>Username and password not match</span>";
                            }
                            ?>
                            <div class="my-3 d-flex">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>

                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="Login.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>