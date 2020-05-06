<?php


get_header(); ?>



	<div id="primary" class="content-area col-sm-8">
		 <main id="main" class="site-main" role="main">

			 <?php
			 if ( have_posts() ) :

				 if ( is_home() && ! is_front_page() ) :
				 ?>
					 <header>
					   <h1 class="page-title"><?php single_post_title(); ?></h1>
					 </header>
                    <?php endif; ?>
				 <?php


				 /* Start the Loop */
				 while ( have_posts() ) :
					 the_post();

					 get_template_part( 'template-parts/content', get_post_format() );

				 endwhile;


			 endif;


			 ?>
		 </main>
      </div>




<?php
get_footer();
