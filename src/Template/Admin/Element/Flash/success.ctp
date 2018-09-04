<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<script>
sweetToastSuccess("<?= $message?>");
</script>