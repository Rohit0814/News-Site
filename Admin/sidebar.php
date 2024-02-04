<div class="offcanvas offcanvas-start show" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel" style="width: 20%;">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasLabel"><?php echo $_SESSION["admin_name"]; ?></h5>
    <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="This top tooltip is themed via CSS variables." data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-right-from-bracket"></i></button>
  </div>
  <hr>
  <div class="offcanvas-body">
    <ul class="sidebar-menu">
        <a href="#"><li class="active">Dashboard</li></a>
        <a href="#"><li>Request</li></a>
        <a href="#"><li>Publisher</li></a>
        <a href="#"><li>User</li></a>
        <a href="#"><li>Setting</li></a>
    </ul>
  </div>
</div>


<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>