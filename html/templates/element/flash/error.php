<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-warning" role="alert" style="margin-bottom: 0; display: none">
    <p class="text-warning">
      <?= h($message); ?>
    </p>
</div>
<script>
  $('.alert.alert-warning').fadeIn("slow", function () {
    $(this).delay(2000).fadeOut("slow");
  });
</script>
