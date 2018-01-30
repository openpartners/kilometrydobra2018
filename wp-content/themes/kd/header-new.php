<?php include('api.php') ?>
<!DOCTYPE html>
<html lang="pl">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title><?php bloginfo('title'); ?></title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta property="og:title" content="<?= getLangByKey('ogTitle') ?>" />
  <meta property="og:description" content="<?= getLangByKey('ogDescription') ?>" />
  <meta property="og:image" content="<?= getLangByKey('ogImage') ?>" />
  <meta property="og:image:width" content="228" />
  <meta property="og:image:height" content="236" />
  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/styles.min.css?v=<?= (ENVIRONMENT == 'production') ? APP_VERSION : md5(uniqid()) ?>">
  <?php if (ENVIRONMENT == 'local'): ?>
  <link rel="stylesheet/less" href="<?php bloginfo('template_url'); ?>/assets/less/main.less?v=<?= md5(uniqid()) ?>">
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/less.js"></script>
  <?php else: ?>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/main.min.css?v=<?= (ENVIRONMENT == 'production') ? APP_VERSION : md5(uniqid()) ?>">
  <?php endif ?>

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="shortcut icon" type="image/x-icon" href="/wp-content/themes/kd/images/favicon.ico"/>

  <!-- Javascript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&language=<?= LANG ?>"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/libs.min.js?v=<?= (ENVIRONMENT == 'production') ? APP_VERSION : md5(uniqid()) ?>"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/app.min.js?v=<?= (ENVIRONMENT == 'production') ? APP_VERSION : md5(uniqid()) ?>"></script>

  <?php wp_head(); ?>
</head>
<body class="enrollment-2016" style="background: #fff!important;">
<script type="text/javascript">LANGUAGE = '<?= LANG ?>'</script>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <header>
        <div class="container">
            <a href="<?= getLangByKey('baseUrl') ?>">
                <div id="logo" class="<?= LANG ?> homepage"></div>
            </a>

            <?php wp_nav_menu(array('menu' => 'menu_' . LANG, 'container' => 'nav', 'menu_class' => LANG)); ?>
            <div class="toggle <?= LANG ?>">
                <i>&nbsp;</i>
                <i>&nbsp;</i>
                <i>&nbsp;</i>
            </div>

            <div class="social">
                <div class="item">
                    <a href="https://www.youtube.com/watch?v=6qT9P4LDQ3k" target="_blank">
                        <img class="center-middle" src="<?php bloginfo('template_url'); ?>/images/enrollment-layout/icon-youtube-white.png" />
                    </a>
                </div>
                <div class="item">
                    <a href="https://www.facebook.com/kilometrydobra" target="_blank">
                        <img class="center-middle" src="<?php bloginfo('template_url'); ?>/images/enrollment-layout/icon-facebook-white.png" />
                    </a>
                </div>
                <div class="item">
                    <a href="https://twitter.com/KilometryDobra" target="_blank">
                        <img class="center-middle" src="<?php bloginfo('template_url'); ?>/images/enrollment-layout/icon-twitter-white.png" />
                    </a>
                </div>
            </div>
        </div>
    </header>
