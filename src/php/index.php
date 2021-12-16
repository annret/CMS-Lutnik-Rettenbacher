<!--head-->
<?php include('head.php'); ?>

<!--body-->
<header>
    <h1 id="logo">Alex Mayer</h1>
  <!--navbar-->
    <nav id="navbar">
      <?php wp_nav_menu( array( 'theme_location' => 'main-menu') ); ?>
    </nav> 
    <?php 
      if ( have_posts() ) { 
    ?>
  <!--hero-->
  <section id="hero">
    <?php the_post_thumbnail(); ?>
    <h2><span><?php the_field('herotext'); ?></span></h2>
  </section>
</header>

<main>
  <section id="maincontents" class="max-width-container">
    
        <h2><?php the_title();?></h2>
        <p><?php the_content();?></p>
    <?php
    }
    else {
      echo "<p>Derzeit noch keine Beiträge, bitte komm später wieder!</p>";
    }
  ?>
  </section>
</main>

<!--footer-->
<?php include('footer.php'); ?>