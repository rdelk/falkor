<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

  <head>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=1020" />
    
  	<!-- Import Stylesheets -->
    <?php print $styles; ?>
     
    <!--[if lte IE 8]>

    <![endif]-->

  	<!-- 
      Import the modernizr js library 
      We don't want to be run through Drupal's drupal_add_js function
    -->
    <?php print $modernizr; ?>

    <!-- Typekit -->
    <!-- Your code goes here -->

  </head>

  <body class="<?php print $classes; ?>" <?php print $attributes;?>>

    <!-- Google Analytics -->
    <!-- Your code goes here -->
    
    <!--[if lte IE 7]>
      <div class="chromeframe">
        <div class="l-wrap">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</div>
      </div>
    <![endif]-->

    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
    
  	<!-- Import Scripts -->
    <?php print $scripts; ?>
  </body>

</html>
