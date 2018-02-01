<link rel="stylesheet" href="<?php echo $mainFolder; ?>/includes/css/iziModal.css?<?php echo rand(); ?>">
<script src="<?php echo $mainFolder; ?>/includes/js/jquery.js?<?php echo rand(); ?>"></script>


<!-- Modal structure -->
<div id="modal"> <!-- data-iziModal-fullscreen="true"  data-iziModal-title="Welcome"  data-iziModal-subtitle="Subtitle"  data-iziModal-icon="icon-home" -->
    asdsadasdasdasd
</div>

<!-- Trigger to open Modal -->
<a href="#" data-izimodal-open="#modal" data-izimodal-transitionin="fadeInDown">Modal</a>

<script>
$(document).on('click', '.trigger', function (event) {

  // $('#modal').iziModal('setZindex', 99999);
  $('#modal').iziModal('open', { zindex: 99999 });
  //$('#modal').iziModal();
});
</script>
<script src="<?php echo $mainFolder; ?>/includes/js/iziModal.js"></script>
