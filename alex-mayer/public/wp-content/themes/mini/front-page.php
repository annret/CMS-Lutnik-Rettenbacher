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
<!--frontpage-->
  <!--services-->
  <section id="services" class="max-width-container flex-container">
    <h2>Leistungen</h2>
    <ul>
    <?php 
      $count = 1;
      $services_query = new WP_Query( 'order=DESC&cat=4' );
      if ( $services_query->have_posts() ) :
          while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
              <li class="box-<?php echo $count ?>">
                  <?php the_title(); ?>
                  <?php the_post_thumbnail(); ?> 
              </li>
    <?php  
          $count += 1; 
          endwhile;
      else : 
    ?>
          <p>Hier gibts nichts zu sehen...</p>
    <?php 
      endif;
      wp_reset_postdata(); 
    ?>
    </ul>
  </section>
  <!--news-->
  <section id="news" class="max-width-container">
    <h2>News</h2>
    <div class="news-background">
      <ul>
    <?php
    $news_query = new WP_Query( 'order=DESC&cat=2' );
    if ( $news_query->have_posts() ) :
        while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
              <?php the_content(); ?>
              <a href="<?php the_permalink(); ?>"> [mehr erfahren] </a>
          </li>
        <?php endwhile;
    else : ?>
        <p>Erster Post kommt demnächst...</p>
    <?php endif;
    wp_reset_postdata();
    ?>
      </ul>
    </div>
  </section>
  <!--clients-->
  <section id="clients" class="max-width-container">
    <h2>Referenzen</h2>
    <div class="grid">
    <?php
      $count = 1;
      $testimonials_query = new WP_Query( 'order=DESC&cat=3' );
      if ( $testimonials_query->have_posts() ) :
        while ( $testimonials_query->have_posts() ) : $testimonials_query->the_post(); ?>
          <article class='grid-<?php echo $count?>'>
            <?php the_post_thumbnail(); ?>
            <?php get_fields(get_the_id()); ?>
            <cite><?php the_title(); ?></cite>
            <p><?php the_field('rolle'); ?></p>
            <blockquote><?php the_field('zitat'); ?></blockquote>
            <?php if ($count == 2) { ?>
            <div class="color_block"></div>
            <?php } ?>
          </article>
        <?php $count += 1; 
        endwhile;
      else : ?>
        <p>Hier ist noch kein Inhalt ...</p>
    <?php endif;
    wp_reset_postdata();
    ?>
      <!--quotation mark-->
      <div class="grid-quotation_mark">
        <img src="images/quotation_mark.svg" alt="quotation_mark"/>
      </div>
    </div> 
  </section>
</main>

<!--footer-->
<?php include('footer.php'); ?>