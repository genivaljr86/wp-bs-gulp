<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=utf8mb4_unicode_ci" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  
  <title><?php wp_title(" | ", true, "right"); bloginfo( 'name' ); ?></title>
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link href="<?php bloginfo( 'template_directory' ); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <link rel="icon" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon.ico" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div id="content">
  <aside class="col-sm-3  hidden-xs">
    
  </aside>