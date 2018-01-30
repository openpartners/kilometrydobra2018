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
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/main.min.css?v=<?= (ENVIRONMENT == 'production') ? APP_VERSION : md5(uniqid()) ?>">


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
<body class="edition-2016">
<script type="text/javascript">LANGUAGE = '<?= LANG ?>'</script>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <header>
        <div class="container">
            <a href="<?= get_home_url() ?>"><div id="logo" class="<?= LANG ?> <?= (is_home() || strpos(get_page_template_slug(), 'home_') !== false)?'homepage':'' ?>"></div></a>

                <?php wp_nav_menu(array('container' => 'nav', 'menu_class' => LANG)); ?>
                <div class="toggle <?= LANG ?>">
                    <i>&nbsp;</i>
                    <i>&nbsp;</i>
                    <i>&nbsp;</i>
                </div>
        </div>
    </header>
