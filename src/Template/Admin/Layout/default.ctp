<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Meu appe</title>
  <?= $this->Html->css('style.css');?>
  <?= $this->Html->css('../vendors/iconfonts/mdi/css/materialdesignicons.min.css');?>
  <?= $this->Html->css('../vendors/iconfonts/font-awesome/css/font-awesome.min.css');?>
  <?= $this->Html->css('../vendors/iconfonts/font-awesome/css/font-awesome.css');?>
  <?= $this->Html->css('../vendors/css/vendor.bundle.base.css');?>
  <?= $this->Html->css('../vendors/css/vendor.bundle.addons.css');?>
  <?= $this->Html->css('meuappe.css');?>
  <?= $this->Html->css('jquery-ui.min.css');?>

  <?= $this->Html->script('sweetalert.min.js');?>
  <?= $this->Html->script('sweetAlertFunctions.js');?>
  <link rel="shortcut icon" href="/img/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <?= $this->element('header'); ?>
    <div class="container-fluid page-body-wrapper">
      <?= $this->element('sidebar'); ?>
      <div class="main-panel">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content'); ?>
        <?= $this->element('footer'); ?>
      </div>
    </div>
  </div>
</body>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<?= $this->Html->script('../vendors/js/vendor.bundle.base.js');?>
<?= $this->Html->script('../vendors/js/vendor.bundle.addons.js');?>
<?= $this->Html->script('off-canvas.js');?>
<?= $this->Html->script('misc.js');?>
<?= $this->Html->script('jquery-ui.min.js');?>
<?= $this->Html->script('moment.min.js');?>
<?= $this->Html->script('dashboard.js');?>
<?= $this->Html->script('jquery.mask.min.js');?>
<?= $this->Html->script('bootstrap-datepicker.js', ['block' => 'scriptBottom']);?>
<script>
  $(document).ready(function(){
  $(".datepicker").datepicker({dateFormat: 'dd/mm/yy'});
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