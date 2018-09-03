<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap-4 Admin Dashboard Template</title>
  <!-- plugins:css -->
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/admin/css/style.css">
  <link rel="stylesheet" href="/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="/admin/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/img/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?= $this->element('header'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?= $this->element('sidebar'); ?>
      <!-- partial -->
      <div class="main-panel">
        <!-- / .main-navbar -->
        <?= $this->fetch('content'); ?>
        <?= $this->element('footer'); ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- plugins:js -->
  <!-- endinject -->
  <!-- inject:js -->
  <script src="/admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="/admin/vendors/js/vendor.bundle.addons.js"></script>
  <script src="/admin/js/off-canvas.js"></script>
  <script src="/admin/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="/admin/js/dashboard.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="/admin/js/maps.js"></script>
  <!-- End custom js for this page-->
</body>

</html>