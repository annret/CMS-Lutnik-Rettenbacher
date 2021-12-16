<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--style-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Slabo+13px&display=swap"/>
    <!--favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="wp-content/themes/mini/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="wp-content/themes/mini/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="wp-content/themes/mini/favicons/favicon-16x16.png">
    <link rel="manifest" href="wp-content/themes/mini/favicons/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
    <!--page-title-->
    <?php wp_title(); ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >