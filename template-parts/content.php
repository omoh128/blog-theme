<?php
/**
 *
 *
 *
 *
 * @package
 */

?>

<div id="primary" class="content-area col-md-8">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

					<?php if ( 'post' === get_post_type() ) : ?>

						<?php endif; ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
			  <?php
				the_content(
					sprintf(
						wp_kses(

							__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', ' task' ),
							array(
								'span' => array(
									'class' => array(),
								),

							)
						),
						the_title( '<span class="screen-reader-text">"', '"</span>', false ),
						the_post_thumbnail('thumbnail', array(  'class' => 'curve'))
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', ' task' ),
						'after'  => '</div>',
					)
				);
			?>

		</div><!-- .entry-content -->

 	<footer class="entry-footer">
			<?php Inc\Tags::posted_on(); ?>
		</footer><!--.entry-footer -->

	</article><!-- #post-## -->

</div>
