<?php
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<?= $this->Html->script('js/sweetalert.min.js',['block' => 'scriptBottom']);?>
<?= $this->Html->script('js/sweetAlertFunctions.js',['block' => 'scriptBottom']);?>
<script>
sweetToastInfo("<?= $message?>");
</script>