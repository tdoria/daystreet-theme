<?php get_header(); ?>


<div id="wrapper">




  <section>

    <div class="leader">
        <h1 class="page-title"><?php wp_title( ' ' ); ?> Blog Posts</h1>
    </div>
    	
    	<article>

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <hr>
                <h1 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <p class="article-date"><?php the_time( 'F j, Y' ); ?></p>
                <?php if( get_the_post_thumbnail() ) : ?> 
                <div class="feature-img"><!-- start feature img -->
                  <?php the_post_thumbnail( 'large' ); ?>
                </div><!-- end feature img -->
                <?php endif; ?>
                
                <p><?php the_content(); ?></p>
                <div><!-- start div metadata post -->
                  <p class="article-meta">Published by <?php the_author_posts_link(); ?> in <?php the_category( ' ' ); ?></p>

          <?php endwhile; else : ?>
          
                  <p><?php _e( 'Sorry, no posts matched your criteria.', 'day-street' ); ?></p>
          
          <?php endif; ?>
                  </div><!-- end div metadata post --> 

            <p class="nav-previous"><?php next_posts_link( 'Older posts' ); ?></p>
            <p class="nav-next"><?php previous_posts_link( 'Newer posts' ); ?></p>

      </article>

  </section>
  
</div> <!-- wrapper div close tag -->

<?php get_footer(); ?>

