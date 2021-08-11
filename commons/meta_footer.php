<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!-- Modal login layanan mandiri-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Silahkan login dengan NIK dan PIN Anda</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form>
          <div class="mb-3">
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="NIK...">
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="PIN...">
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>

<!-- Vendor JS Files -->
<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/vendor/aos/aos.js"); ?>">
<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>">
<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/vendor/glightbox/js/glightbox.min.js"); ?>">
<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/vendor/isotope-layout/isotope.pkgd.min.js"); ?>">
<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/vendor/php-email-form/validate.js"); ?>">
<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/vendor/swiper/swiper-bundle.min.js"); ?>">
<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/vendor/waypoints/noframework.waypoints.js"); ?>">

<!-- Template Main JS File -->
<link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/js/main.js"); ?>">