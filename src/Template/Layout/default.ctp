<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Meu appe</title>
  <!-- plugins:css -->
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/admin/css/style.css">
  <link rel="stylesheet" href="/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/admin/vendors/iconfonts/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/admin/vendors/iconfonts/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="/admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="/admin/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="/css/meuappe.css">
  <link rel="stylesheet" href="/css/fullcalendar.min.css">
  <!-- <link rel="stylesheet" href="/css/fullcalendar.print.css"> -->
  <link rel="stylesheet" href="/css/jquery-ui.min.css">
  <script src="/js/sweetalert.min.js"></script>
  <script src="/js/sweetAlertFunctions.js"></script>
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> -->
  <!-- endinject -->
  <link rel="shortcut icon" href="/img/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <div class="main-panel col-lg-12">
        <!-- / .main-navbar -->
        <?= $this->Flash->render() ?>
        <div class="offset-lg-4 col-lg-4">
            <?= $this->fetch('content'); ?>
        </div>
        <div class="col-lg-12" style="position: absolute; bottom: 0">
        <?= $this->element('footer'); ?>
        </div>
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
  <script src="/js/jquery-ui.min.js"></script>
  <script src="/js/fullcalendar-locale-all.js"></script>
  <script src="/js/fullcalendar.min.js"></script>
  <script src="/js/moment.min.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="/admin/js/dashboard.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="/admin/js/maps.js"></script>
  <script src="/js/jquery.mask.min.js"></script>
  <!-- End custom js for this page-->
</body>
</html>