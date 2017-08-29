<!doctype html>
<html class="no-js" lang="pt-br">
<head>
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport"
    content="target-densitydpi=device-dpi, width=device-width, user-scalable=no, maximum-scale=1, minimum-scale=1"/>

    <title><?php echo $siteName; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $mainFolder; ?>/includes/css/app.css?<?php echo rand(); ?>">
    <link rel="stylesheet" href="<?php echo $mainFolder; ?>/includes/css/mobile.css?<?php echo rand(); ?>">
    <script src="<?php echo $mainFolder; ?>/includes/js/jquery.js?<?php echo rand(); ?>"></script>
    <script src="<?php echo $mainFolder; ?>/includes/js/wow.js?<?php echo rand(); ?>"></script>
    <script src="<?php echo $mainFolder; ?>/includes/js/main.js?<?php echo rand(); ?>"></script>
    <script src="<?php echo $mainFolder; ?>/includes/js/jquery.cycle2.js?<?php echo rand(); ?>"></script>
    <script src="<?php echo $mainFolder; ?>/includes/js/jquery.cycle2.carousel.js?<?php echo rand(); ?>"></script>
    <script src="<?php echo $mainFolder; ?>/includes/js/jquery.cycle2.swipe.js?<?php echo rand(); ?>"></script>
    <script src="<?php echo $mainFolder; ?>/includes/js/jquery.cycle2.center.js?<?php echo rand(); ?>"></script>
    <script src="<?php echo $mainFolder; ?>/includes/js/jquery.cycle2.caption2.js?<?php echo rand(); ?>"></script>
    <script src="<?php echo $mainFolder; ?>/includes/js/jquery.cycle2.scrollVert.js?<?php echo rand(); ?>"></script>
    <script src="<?php echo $mainFolder; ?>/includes/js/foundation.js"<?php echo rand(); ?>></script>

    <script type="text/javascript">
    $.fn.cycle.defaults.autoSelector = '.slideshow';
    new WOW().init();

    window.mainFolder = '<?php echo $mainFolder; ?>';
    window.idMP = '';
    window.descMP = '';
    window.mpPage = '<?php echo ucfirst($page); ?>';
    window.mainTitle = '<?php echo $siteName; ?>';
    </script>
</head>
<body>


    <div class="m-mobile off-canvas position-left" id="menuMobile" data-off-canvas>

        <button class="close-button" aria-label="Close menu" type="button" data-close>
            <span aria-hidden="true">&times;</span>
        </button>

        <!-- Menu mobile -->


    </div>

    <div class="off-canvas-content" data-off-canvas-content>

        <div id="lt" class="fluid">
            <div id="lt-int"></div>
        </div>

        <div id="lt-scroll" class="fluid">
            <div id="lt-scroll-int"></div>
        </div>
