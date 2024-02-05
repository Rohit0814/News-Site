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
                                <h5 class="card-title">Total View</h5>
                                <p class="card-text"><i class="fa-solid fa-eye"></i> 1000</p>
                                <a href="#" class="btn btn-primary">Check</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mx-4">
                        <div class="card" style="width: 18rem; background:#012052; color:white">
                            <div class="card-body">
                                <h5 class="card-title">Active User</h5>
                                <p class="card-text"><i class="fa-solid fa-eye"></i> 500</p>
                                <a href="#" class="btn btn-primary">Check</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mx-4">
                        <div class="card" style="width: 18rem; background:#012052; color:white">
                            <div class="card-body">
                                <h5 class="card-title">Active Publisher</h5>
                                <p class="card-text"><i class="fa-solid fa-eye"></i> 700</p>
                                <a href="#" class="btn btn-primary">Check</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mx-4" style="margin-bottom:25px">
                <div class="card-header">
                    Complaint Box
                </div>
                <div class="card-body">
                    <div class="card text-bg-light mb-3">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Light card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <div class="card text-bg-light mb-3">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Light card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <div class="card text-bg-light mb-3">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Light card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>


                    <div class="card text-bg-light mb-3">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Light card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>


                    <div class="card text-bg-light mb-3">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Light card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
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