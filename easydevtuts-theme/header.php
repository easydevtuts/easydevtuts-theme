<?php
/**
 * The default header file 
 */
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--[if lt IE 9]>
        <script src="<?php bloginfo( 'template_directory' ); ?>/vendor/html5shiv.js"></script> 
        <script src="<?php bloginfo( 'template_directory' ); ?>/vendor/respond.js"></script> 
      <![endif]-->
    <?php wp_head();?>
  </head>
  <body>
<div id="wrap">
	<nav class="navbar navbar-default" role="navigation">

    <div class="container">
      <div class="row">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-mobile-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="glyphicon glyphicon-th-large"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <?php 

          $args = array(
            'menu'  => 'main-nav' ,
            'container_class' => 'collapse navbar-collapse navbar-mobile-collapse', 
            'menu_class'      => 'nav navbar-nav',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul><ul class="nav navbar-nav navbar-right">
                                  <li><a href="http://www.easydevtuts.com" target="_blank">easydevtuts.com</a></li></ul>',
            'walker' =>          new wp_bootstrap_navwalker,
          );
          
          wp_nav_menu($args);

        ?>
      </div>
    </div>
  </nav>