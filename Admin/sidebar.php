<div class="offcanvas offcanvas-start show" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel" style="width: 20%;">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasLabel"><?php echo $_SESSION["admin_name"]; ?></h5>
        <form method="post" action="Logout.php">
            <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="This top tooltip is themed via CSS variables." data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-right-from-bracket"></i></button>
        </form>
    </div>
    <hr>
    <div class="offcanvas-body">
        <ul class="sidebar-menu">
            <?php
            $DBactiveClass = '';
            $reqactiveClass = '';
            $pubactiveClass = '';
            $useractiveClass = '';
            $settingactiveClass = '';

            $currentURL = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

            if ($currentURL == 'http://localhost/NewsSite/Admin/dashboard.php') {
                $DBactiveClass = 'active';
            } elseif ($currentURL == 'http://localhost/NewsSite/Admin/Request.php') {
                $reqactiveClass = 'active';
            } elseif ($currentURL == 'http://localhost/NewsSite/Admin/publisher.php') {
                $pubactiveClass = 'active';
            } elseif ($currentURL == 'http://localhost/NewsSite/Admin/user.php') {
                $useractiveClass = 'active';
            } elseif ($currentURL == 'http://localhost/NewsSite/Admin/setting.php') {
                $settingactiveClass = 'active';
            }
            // die(''.$DBactiveClass.''.$reqactiveClass.'');
            ?>
            <a href="dashboard.php">
                <li class="<?php echo $DBactiveClass ?>">Dashboard</li>
            </a>
            <a href="Request.php">
                <li class="<?php echo $reqactiveClass ?>">Request</li>
            </a>
            <a href="publisher.php">
                <li class="<?php echo $pubactiveClass  ?>">Publisher</li>
            </a>
            <a href="user.php">
                <li class="<?php echo $useractiveClass  ?>">User</li>
            </a>
            <a href="setting.php">
                <li class="<?php echo $settingactiveClass  ?>">Setting</li>
            </a>
        </ul>
    </div>
</div>


<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>