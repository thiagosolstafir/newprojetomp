<link href="<?php echo $mainFolder; ?>/includes/css/lightgallery.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<style>
#lightgallery{
  width: 100%;
  float: left;
}
#lightgallery a img{
  width: 200px;
  height: 200px;
}

</style>

<div id="lightgallery">
  <a data-src="<?php echo $mainFolder; ?>/includes/imgs/1.jpg" data-sub-html="<h4>Algum texto</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius obcaecati, voluptate laboriosam! Reprehenderit pariatur nesciunt quisqua distinctio. Quibusdam neque ipsa natus error tempore!</p>">
    <img src="<?php echo $mainFolder; ?>/includes/imgs/1.jpg">
  </a>
  <a data-src="<?php echo $mainFolder; ?>/includes/imgs/2.jpg" data-sub-html="<h4>Algum texto</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius obcaecati, voluptate laboriosam! Reprehenderit pariatur nesciunt quisqua distinctio. Quibusdam neque ipsa natus error tempore!</p>">
    <img src="<?php echo $mainFolder; ?>/includes/imgs/2.jpg">
  </a>
  <a data-src="<?php echo $mainFolder; ?>/includes/imgs/3.jpg" data-sub-html="<h4>Algum texto</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius obcaecati, voluptate laboriosam! Reprehenderit pariatur nesciunt quisqua distinctio. Quibusdam neque ipsa natus error tempore!</p>">
    <img src="<?php echo $mainFolder; ?>/includes/imgs/3.jpg">
  </a>
</div>



<script type="text/javascript">
$(document).ready(function(){
  $('#lightgallery').lightGallery();
});
</script>

<script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
<script src="<?php echo $mainFolder; ?>/includes/js/lightgallery-all.min.js"></script>
<script src="<?php echo $mainFolder; ?>/includes/js/jquery.mousewheel.min.js"></script>
