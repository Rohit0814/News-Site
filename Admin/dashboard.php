<?php
    session_start();
    if(isset($_SESSION["admin_name"]) and isset($_SESSION["admin_password"])){
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
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Total View</h5>
                            <p class="card-text"><i class="fa-solid fa-eye"></i> 1000</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col mx-4">
                <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Active User</h5>
                            <p class="card-text"><i class="fa-solid fa-eye"></i> 500</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col mx-4">
                <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Active Publisher</h5>
                            <p class="card-text"><i class="fa-solid fa-eye"></i> 700</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    }
    else{
        header("location: http://localhost/NewsSite/Admin/Login.php");
    }
?>
    
</body>
</html>