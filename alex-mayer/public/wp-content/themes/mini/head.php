<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!--style-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Slabo+13px&display=swap"/>
    <!--favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="wp-content/themes/mini/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="wp-content/themes/mini/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="wp-content/themes/mini/favicon/favicon-16x16.png">
    <link rel="manifest" href="wp-content/themes/mini/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
    <!--page-title-->
    <?php wp_title(); ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >