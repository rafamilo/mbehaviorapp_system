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
  $.ajax({
    url: 'http://localhost:8765/party-hall-schedules.json'
  }).done(data => {
    console.log(data);
  }).fail();

  $('#calendar').fullCalendar({
    locale: 'pt-br',
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month'
    },
    navLinks: true, // can click day/week names to navigate views
    editable: true,
    selectable: true,
    selectHelder: true,
    selectOverlap: false,
    eventLimit: true,
    buttonText: {
      today: 'hoje',
      month: 'mes',
      week: 'semana',
      day: 'dia',
      list: 'lista'
    },
    events: [
        {
          title: 'All Day Event',
          start: '2018-11-01',
        },
        {
          title: 'Long Event',
          start: '2018-11-07'
          
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-11-09'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-11-16'
        },
        {
          title: 'Conference',
          start: '2018-11-11'
          
        },
        {
          title: 'Birthday Party',
          start: '2018-11-13'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2018-11-28'
        }
      ],events: [
        {
          title: 'All Day Event',
          start: '2018-11-01',
        },
        {
          title: 'Long Event',
          start: '2018-11-07'
          
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-11-09'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-11-16'
        },
        {
          title: 'Conference',
          start: '2018-11-11'
          
        },
        {
          title: 'Birthday Party',
          start: '2018-11-13'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2018-11-28'
        }
      ],
    dayClick: function(date, allDay, jsEvent, view) {
                  var eventsCount = 0;
                 var date = date.format('YYYY-MM-DD');
                  $('#calendar').fullCalendar('clientEvents', function(event) {
                    var start = moment(event.start).format("YYYY-MM-DD");
                    var end = moment(event.end).format("YYYY-MM-DD");
                    if(date == start)
                    {
                      eventsCount++;
                    }
                  });
                  if (eventsCount)
                    return alert('Já existe um agendamento para esse dia!');
        },
    timezone: 'America/Cuiaba',
    eventRender: function(event, element)
    { 
        console.log(event);
    },
    select: function (start, end, jsEvent, view) {
      const abc = prompt('Enter Title');
      const allDay = true;
      const newEvent = new Object();
      newEvent.title = abc;
      newEvent.start = moment(start).format();
      newEvent.end = moment(end).format();
      newEvent.allDay = allDay;
      $('#calendar').fullCalendar('renderEvent', newEvent);
    }
  })
  $('.datepicker').datepicker({
    "dateFormat": "dd/mm/yy"
  });
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