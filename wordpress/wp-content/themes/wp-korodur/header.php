<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="favicon.ico">
  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>
  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->
  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="<?php echo get_template_directory_uri(); ?>/js/header.js" type="text/javascript"></script>
</head>

<body data-gr-c-s-loaded="true">
  <div class="wpSiteWrapper">
    <div class="navbar navbar-fixed-top">
      <div class="container-fluid wpPageMetanavContainer">
      </div>
      <div class="container-fluid wpPageNavContainer">
        <h1 class="navbar-brand">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-fluid" alt="Korodur Logo">
          </a>
        </h1>
        <div class="hidden-md-up" id="">
          <button class="navbar-toggler btn-white-outline pull-right offcanvas-toggle js-offcanvas-has-events" type="button" data-toggle="offcanvas" data-target="#wpPageNavCollapse">
            Меню <span>☰</span>
          </button>
          <nav id="menu">
            <?php wpeMobileHeadNav(); ?>
          </nav>
          <div class="clearfix"></div>
        </div>
        <nav class="collapse navbar-toggleable-sm wpPageNavCollapse navbar-offcanvas navbar-offcanvas-right navbar-offcanvas-touch offcanvas-transform js-offcanvas-done" id="wpPageNavCollapse">
          <?php wpeHeadNav(); ?>
        </nav>
      </div>
    </div>
    <main>
      <div class="wpHeaderImage container-fluid">
        <div class="wpHeaderSpace"></div>
      </div>

