<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Meu app</title>
  <?= $this->Html->css('style.css');?>
  <?= $this->Html->css('../vendors/iconfonts/mdi/css/materialdesignicons.min.css');?>
  <?= $this->Html->css('../vendors/iconfonts/font-awesome/css/font-awesome.min.css');?>
  <?= $this->Html->css('../vendors/iconfonts/font-awesome/css/font-awesome.css');?>
  <?= $this->Html->css('../vendors/css/vendor.bundle.base.css');?>
  <?= $this->Html->css('../vendors/css/vendor.bundle.addons.css');?>
  <?= $this->Html->css('meuappe.css');?>
  <?= $this->Html->css('fullcalendar.min.css');?>
  <?= $this->Html->css('jquery-ui.min.css');?>
  <?= $this->Html->script('sweetalert.min.js');?>
  <?= $this->Html->script('sweetAlertFunctions.js');?>
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