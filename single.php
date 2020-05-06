<?php


get_header(); ?>



	<div id="primary" class="content-area col-sm-8">
		 <main id="main" class="site-main" role="main">

			
         <?php

            /* Start the Loop */
            while ( have_posts() ) :
                the_post();

                get_template_part( 'content', get_post_format() );

                

            endwhile;

            ?>
		 </main>
      </div>




<?php
get_footer();
