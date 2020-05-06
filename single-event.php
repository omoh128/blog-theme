
<?php




get_header(); ?>

	<div id="primary" class="content-area col-sm-8">
	  <main id="main" class="site-main" role="main">
		<?php /* The loop */ ?>
		  <?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			  <header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				</header><!--header -->
				  <div class="entry-content">
					<?php the_content(); ?>
					
					   <!-- Let's show our custom fields here -->	
						<div class="evenlist">
							<p>Date of Event:   <?php echo get_post_meta($post->ID, 'date_of_event', true); ?></p>
							<p><?php echo get_post_meta($post->ID, 'Contact_person', true); ?></p>		
						</div>
						<div class="event-laction"> 
						<?php $locations = get_post_meta($post->ID, 'locations', false); ?>
						
							<?php foreach($locations as $location) {
									echo '<p>Location:' .$location.'</p>';
									} ?>					
						</div> 
						<div class="time">
						  <ul class="list-events">
							<li>Subscrber:<span class="set"> <?php echo get_post_meta($post->ID, 'subscriber', true); ?></span> </li>
							<li>Price: <span class="set"><?php echo get_post_meta($post->ID, 'price', true); ?></span></li>
							<li>Included Price:   <span class="set"><?php echo get_post_meta($post->ID, 'included_price', true); ?></span> </li>
							<li>Registration End: <span class="set">  <?php echo get_post_meta($post->ID, 'registration_end', true); ?></span> </li>
						  </ul>
					
						</div>    
						<div class="entry">
						<?php echo $EM_Event->post_content; ?>
						</div>
			       <?php endwhile; ?>
		       </main>
            </div>

<?php
get_footer();
