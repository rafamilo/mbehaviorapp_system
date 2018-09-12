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
    <!-- partial:partials/_navbar.html -->
    <?= $this->element('header'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?= $this->element('sidebar'); ?>
      <!-- partial -->
      <div class="main-panel">
        <!-- / .main-navbar -->
        <?= $this->Flash->render() ?>
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
<script>
  $(document).ready(function(){
  $('#calendar').fullCalendar({
    locale: 'pt-br',
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay,listWeek'
    },
    navLinks: true, // can click day/week names to navigate views
    editable: true,
    selectable: true,
    eventLimit: true,
    buttonText: {
      today: 'hoje',
      month: 'mes',
      week: 'semana',
      day: 'dia',
      list: 'lista'
    },
    timezone: 'America/Cuiaba',
    select: function (start, end, jsEvent, view) {
      let abc = prompt('Enter Title');
      let allDay = !start.hasTime && !end.hasTime;
      let newEvent = new Object();
      newEvent.title = abc;
      newEvent.start = moment(start).format();
      newEvent.allDay = false;
      $('#calendar').fullCalendar('renderEvent', newEvent);
      console.log(start);
      console.log(end);
      console.log(jsEvent);
      console.log(view);
      console.log(newEvent);
    }
  })
  $('.datepicker').datepicker();
  $('[mask="date"]').mask('00/00/0000');
  $('[mask="time"]').mask('00:00:00');
  $('[mask="date_time"]').mask('00/00/0000 00:00:00');
  $('[mask="cep"]').mask('00000-000');
  $('[mask="phone"]').mask('0000-0000');
  $('[mask="phone_with_ddd"]').mask('(00) 0000-0000');
  $('[mask="phone_us"]').mask('(000) 000-0000');
  $('[mask="mixed"]').mask('AAA 000-S0S');
  $('[mask="cpf"]').mask('000.000.000-00', {reverse: true});
  $('[mask="cnpj"]').mask('00.000.000/0000-00', {reverse: true});
  $('[mask="money"]').mask('000.000.000.000.000,00', {reverse: true});
  $('[mask="money2"]').mask("#.##0,00", {reverse: true});
  $('[mask="ip_address"]').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
      'Z': {
        pattern: /[0-9]/, optional: true
      }
    }
  });
  $('[mask="ip_address"]').mask('099.099.099.099');
  $('[mask="percent"]').mask('##0,00%', {reverse: true});
  $('[mask="clear"]-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
  $('[mask="placeholder"]').mask("00/00/0000", {placeholder: "__/__/____"});
  $('[mask="fallback"]').mask("00r00r0000", {
      translation: {
        'r': {
          pattern: /[\/]/,
          fallback: '/'
        },
        placeholder: "__/__/____"
      }
    });
  $('[mask="selectonfocus"]').mask("00/00/0000", {selectOnFocus: true});
});
  </script>
</html>