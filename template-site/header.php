<!doctype html>
<html class="no-js" lang="pt-br">
<head>
  <meta charset="iso-8859-1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, user-scalable=no, maximum-scale=1, minimum-scale=1"/>

  <link rel="icon" type="image/png" href="<?php echo $mainFolder; ?>/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="<?php echo $mainFolder; ?>/favicon-16x16.png" sizes="16x16" />
  
  <title><?php echo $siteName; ?></title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="<?php echo $mainFolder; ?>/includes/css/lightgallery.css" rel="stylesheet">
  <link href="<?php echo $mainFolder; ?>/includes/css/foundation.min.css" rel="stylesheet">
  <link href="<?php echo $mainFolder; ?>/includes/css/swiper.css" rel="stylesheet">
  <link href="<?php echo $mainFolder; ?>/includes/css/animate.css" rel="stylesheet">
  <link href="<?php echo $mainFolder; ?>/includes/css/hover.css" rel="stylesheet">
  <link href="<?php echo $mainFolder; ?>/includes/css/fastselect.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $mainFolder; ?>/includes/css/app.css?<?php echo rand(); ?>">
  <link rel="stylesheet" href="<?php echo $mainFolder; ?>/includes/css/alteracoes.css?<?php echo rand(); ?>">
  <link rel="stylesheet" href="<?php echo $mainFolder; ?>/includes/css/jquery.modal.min.css"/>

  <script src="<?php echo $mainFolder; ?>/includes/js/jquery.min.js"></script>
  <script src="<?php echo $mainFolder; ?>/includes/js/jquery.modal.min.js"></script>
  <script src="<?php echo $mainFolder; ?>/includes/js/wow.js?<?php echo rand(); ?>"></script>
  <script src="<?php echo $mainFolder; ?>/includes/js/foundation.min.js?"<?php echo rand(); ?>></script>
  <script src="<?php echo $mainFolder; ?>/includes/js/swiper.js"></script>
  <script src="<?php echo $mainFolder; ?>/includes/js/fastsearch.js"></script>
  <script src="<?php echo $mainFolder; ?>/includes/js/fastselect.js"></script>
  <script src="<?php echo $mainFolder; ?>/includes/js/mask.min.js"></script>

  <script src="<?php echo $mainFolder; ?>/includes/js/main.js?<?php echo rand(); ?>"></script>


  <link rel="stylesheet" type="text/css" href="<?php echo $mainFolder; ?>/includes/css/fallback.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo $mainFolder; ?>/includes/lib/jquery.sweetalert2.css"/>
  <script type="text/javascript" src="<?php echo $mainFolder; ?>/includes/lib/jquery.sweetalert2.js"></script>
  <script type="text/javascript" src="<?php echo $mainFolder; ?>/includes/lib/jquery.form.js"></script>
  <script type="text/javascript" src="<?php echo $mainFolder; ?>/includes/js/mp-form-ajax.js"></script>

  <script type="text/javascript">
    new WOW().init();

    window.mainFolder = '<?php echo $mainFolder; ?>';
    window.mpPage = '<?php echo ucfirst(isset($page)); ?>';
    window.mainTitle = '<?php echo $siteName; ?>';
  </script>
</head>
<body>

<div class="m-mobile off-canvas position-left" id="menuMobile" data-off-canvas>

  <button class="close-button" aria-label="Close menu" type="button" data-close>
    <span aria-hidden="true">&times;</span>
  </button>

  <!--        <div class="logo-menu-mobile ctr">-->
  <!--            <a href="--><?php //echo $mainFolder; ?><!--/home"><img src="-->
  <?php //echo $mainFolder; ?><!--/includes/imgs/logo.png" alt=""></a>-->
  <!--        </div>-->

  <ul class="vertical menu">
    <li><a href="<?php echo $mainFolder; ?>/home" <?php if (isset($page) == "home") { ?> class="ativo" <?php } ?>>Home</a></li>
  </ul>

</div>

<div class="off-canvas-content" data-off-canvas-content>
