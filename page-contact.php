<?php

  /*
  Template Name: Contact Page

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

                      <!-- start contact form -->            
                    <form method="post" action="#" enctype="multipart/form-data" id="contact-us">
                      <div id="contact-us-message"></div>
                      <p>
                        <label for="name">Name</label>
                        <input type="text" name="Name" id="name" />
                      </p>
                      <p>
                        <label for="email">E-mail</label>
                        <input type="text" name="mailfrom" id="email" />
                      </p>
                      <p>
                        <label for="message">Message</label>
                        <textarea name="message" id="message"></textarea>
                      </p>
                      <p>       
                        <input type="hidden" name="sendtoemail" value="#"><br>
                        <input type="hidden" name="subject" value="#">
                        <input type="hidden" name="redirect" value="/page-thankyou.php">
                        <input type="submit" class="button" value="Send" />
                      </p>
                    </form>
                    <!-- end contact form -->
                
          <?php endwhile; else : ?>
          
                  <p><?php _e( 'Sorry, no pages found.', 'day-street' ); ?></p>
          
          <?php endif; ?>


      </article>

  </section>

</div> <!-- wrapper div close tag -->


<?php get_footer(); ?>

