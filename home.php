<?php include "template-site/header.php"; ?>
<?php include "template-site/top.php"; ?>

<style>
#lightgallery{
  width: 100%;
  float: left;
  height: 5000px;
}
#lightgallery a img{
  width: 200px;
  height: 200px;
}

.blocker{
  padding: 0;
  background: #fff;
}

.modal{
  width: 100%;
  max-width: 100%;
  height: 100%;
  border-radius: 0;
  box-shadow: none;

}

.close-modal{
  top: 20px !important;
  right: 20px !important;
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

<div class="modal">
  <p>Second AJAX Example!</p>
</div>

<a href="ajax/ajax.php?teste=thiago" id="manual-ajax">second example</a>


<script type="text/javascript">

$(document).ready(function(){


  $('#manual-ajax').click(function(event) {
    event.preventDefault();
    this.blur(); // Manually remove focus from clicked link.
    $.get(this.href, function(html) {
      $(html).appendTo('body').modal({
        fadeDuration: 300,
        fadeDelay: 0.50
      });
    });
  });


  $('#lightgallery').lightGallery({

  });
});
</script>

<?php include "template-site/footer.php"; ?>
