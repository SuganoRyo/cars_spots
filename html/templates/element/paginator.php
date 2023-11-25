<div class="paginator">
  <ul class="pagination justify-content-end">
      <?= $this->Paginator->first('<< ' . __('first')) ?>
      <?= $this->Paginator->prev('< ' . __('previous')) ?>
      <?= $this->Paginator->numbers() ?>
      <?= $this->Paginator->next(__('next') . ' >') ?>
      <?= $this->Paginator->last(__('last') . ' >>') ?>
  </ul>
  <p class="text-end"><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
</div>
<script>
  if ($('.page-item.active').text() === '1') {
    $('.pagination.justify-content-end li:first').addClass('disabled');
  };
</script>
