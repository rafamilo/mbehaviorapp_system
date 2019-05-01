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
  <link rel="stylesheet" href="../admin/css/style.css">
  <link rel="stylesheet" href="../admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../admin/vendors/iconfonts/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../admin/vendors/iconfonts/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="../admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../admin/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="../css/meuappe.css">
  <link rel="stylesheet" href="../css/fullcalendar.min.css">
  <!-- <link rel="stylesheet" href="/css/fullcalendar.print.css"> -->
  <link rel="stylesheet" href="../css/jquery-ui.min.css">
  <script src="../js/sweetalert.min.js"></script>
  <script src="../js/sweetAlertFunctions.js"></script>
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> -->
  <!-- endinject -->
  <link rel="shortcut icon" href="../img/favicon.png" />
</head>

<body>
  <div class="container-scroller">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content'); ?>
    </div>
  </div>
</body>
</html>