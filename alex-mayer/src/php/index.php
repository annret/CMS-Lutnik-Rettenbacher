<!--head-->
<?php include('head.php'); ?>

<!--body-->
<header>
    <h1 id="logo">Alex Mayer</h1>
  <!--navbar-->
    <nav id="navbar">
      <?php wp_nav_menu( array( 'theme_location' => 'main-menu') ); ?>
    </nav> 
  <?php if ( have_posts() ) { ?>
  <!--hero-->
  <section id="hero">
    <?php the_post_thumbnail(); ?>
    <h2><span>Glänzende Ideen für leuchtende Augen</span></h2>
    <button>Angebot einholen</button>
  </section>
</header>

<main>
  <section id="maincontents" class="max-width-container">
    <?php
      while ( have_posts() ) {
        the_post();
        the_title();
        the_content();
      }
    }
    else {
      echo "<p>Derzeit noch keine Beiträge, bitte komm später wieder!</p>";
    }
  ?>
  </section>
</main>

<!--footer-->
<?php include('footer.php'); ?>