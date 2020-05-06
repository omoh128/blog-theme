<?php
/**
 * Template part for displaying page content in page.php
 *
 *
 *
 * @package task
 */

?>

<div id="primary" class="content-area col-md-8">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	   <div class="entry-content">
		<?php
			the_content();
			the_post_thumbnail('thumbnail', array(  'class' => 'page-photo'));

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'task' ),
					'after'  => '</div>',
				)
			);

		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
</div>
