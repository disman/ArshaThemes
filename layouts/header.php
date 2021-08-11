<header id="header" class="fixed-top header-inner-pages">
  <div class="container d-flex align-items-center">

    <!-- Uncomment below if you prefer to use an image logo -->
    <a href="<?= site_url(); ?>" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
    <h1 class="logo me-auto"><a href="<?= site_url(); ?>"><b>SIDesa Bahari</b></a></h1>

    <nav id="navbar" class="navbar">
      <?php $this->load->view("$folder_themes/partials/menu_head.php"); ?>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header>