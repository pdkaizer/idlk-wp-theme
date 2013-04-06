<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package IDLK Design
 * @since IDLK Design 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

    <script type="text/javascript" src="http://use.typekit.net/hhx6iat.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/genericons.css">

<?php wp_head(); ?>
</head>

<body>

  <div class="container">

  <header class="row">
    <div class="span3 logo">
      <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/izzy-logo.png" alt="Izzy Kaizer"></a>
    </div>

    <div class="span9">
      <nav>
        <ul>
          <li><a href="/about-me">about me</a></li>
          <li><a href="/my-work">my work</a></li>
          <li><a href="/contact-me">contact me</a></li>
        </ul>
      </nav>
    </div>
  </header>


