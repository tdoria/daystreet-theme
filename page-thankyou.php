<?php

  /*
  Template Name: Thank You Page

  */
?>


<?php get_header(); ?>


<div id="wrapper">




  <section>
    	
    	<article class="page-content">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <hr>
                <h1 class="page-title"><?php the_title(); ?></h1>
                
                
                <p><?php the_content(); ?></p>
                
          <?php endwhile; else : ?>
          
                  <p><?php _e( 'Sorry, no pages found.', 'day-street' ); ?></p>
          
          <?php endif; ?>    

      </article>

  </section>

</div> <!-- wrapper div close tag -->

<!-- to stick footer -->
<div class="push"></div>
<!-- to stick footer -->
  

<?php get_footer(); ?>

