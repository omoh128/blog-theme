
 <?php
/**
 * The main template file
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package task
 */

get_header(); ?>



	<div id="primary" class="content-area col-sm-8">
		 <main id="main" class="site-main" role="main">

         <?php while ( have_posts() ) : the_post(); ?>
                  
            <h1 class="entry-title"><?php the_title(); ?></h1>
                   
              <div class="entry-content">
             
                   
                <?php the_content(); ?>
                
                   
        </div><!-- .entry-content -->
                   
        <?php endwhile; // end of the loop. ?>
	</main>
</div>




<?php
get_footer();