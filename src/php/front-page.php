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
    <h2><span><?php the_field('herotext'); ?></span></h2>
    <button>Angebot einholen</button>
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
<!--frontpage-->
  <!--services-->
  <section id="services" class="max-width-container flex-container">
    <h2>Leistungen</h2>
    <ul>
    <?php 
      $count = 1;
      $services_query = new WP_Query( 'order=DESC&cat=4' );
      if ( $services_query->have_posts() ) :
          while ( $services_query->have_posts() && $count <= 3 ) : $services_query->the_post(); ?>
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
    $count = 1;
    $news_query = new WP_Query( 'order=DESC&cat=2' );
    if ( $news_query->have_posts() ) :
        while ( $news_query->have_posts() && $count <= 3 ) : $news_query->the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>"> [mehr erfahren] </a>
          </li>
        <?php 
        $count += 1;   
        endwhile;
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
        while ( $testimonials_query->have_posts() && $count <= 3 ) : $testimonials_query->the_post(); ?>
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
        <img src="wp-content/themes/mini/images/quotation_mark.svg" alt="quotation_mark"/>
      </div>
    </div> 
  </section>
</main>

<!--footer-->
<?php include('footer.php'); ?>