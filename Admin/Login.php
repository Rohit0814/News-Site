<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../Assets/CSS/AdminStyle.css">
</head>

<body>

    <?php
    session_start();
    if (!isset($_SESSION["admin_name"]) and !isset($_SESSION["admin_password"])) {
        // die($_SESSION["admin_name"]);
    ?>
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;background:#d4deff;">
            <div class="login-form card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="../Assets/images/login-form-v13.jpg" class="img-fluid rounded-start" alt="..." style="height:100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <form method="post" action="LoginHandler.php">
                                <h5 class="card-title text-center">Admin Login</h5>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="userName">
                                </div>
                                <label for="inputPassword5" class="form-label">Password</label>
                                <input type="password" id="inputPassword5" name="password" class="form-control" aria-describedby="passwordHelpBlock">
                                <div id="passwordHelpBlock" class="form-text">
                                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                                </div>
                                <?php
                                if (isset($_COOKIE['failed'])) {
                                    echo "<span style='color:red;'>Username and password not match</span>";
                                }
                                ?>
                                <div class="my-3 d-flex">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-2">
                                        <li class="nav-item dropdown">
                                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Admin
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="../Author/Login.php">Editor</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="../User/Login.php">Users</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </form>

                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
    } else {
        header("location: http://localhost/NewsSite/Admin/dashboard.php");
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>