<?php
/**
 * The template for displaying archives of case studies
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Accelerate Marketing */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
             $services = get_field('services');
             $image_1 = get_field('image_1');
             $size = "full";
             /*$image_2 = get_field('image_2');*/
             /*$image_3 = get_field('image_3');*/
             /*$clients = get_field('clients');*/
             /*$link = get_field('site_link');*/

  ?>
             <article class="case-study">
             	<aside class="case-study-sidebar">
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                   <h5><?php echo $services; ?></h5>                  
                    <?php the_excerpt(); ?>
                    <p><strong><a href="<?php the_permalink(); ?>">View Project</a></strong></p>
                </aside>    

                <div class="case-study-images">
                    <a href="<?php the_permalink(); ?>">
                    <?php if($image_1){
                           /*<img src="<?php echo wp_get_attachment_image( $image_1, $size ); ?>" />*/
                           echo wp_get_attachment_image( $image_1, $size );
                         }?>
                 </a> </div>
             </article>
				
			<?php endwhile; // end of the loop. ?>


		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>