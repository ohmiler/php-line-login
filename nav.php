
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        Line Login
    </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <?php 
            if (!isset($_SESSION['profile'])) {
                $line = new LineLogin();
                $link = $line->getLink();
        ?>
        <a href="<?php echo $link; ?>" class="btn btn-success me-2">Line Login</a>
        <?php } else { ?>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        <?php } ?>
        </div>
    </header>
  </div>