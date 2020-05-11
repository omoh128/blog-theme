</div><!-- row-->

</div><!-- .container-fluid -->


<footer class="footer" role="contentinfo">
       <div class="container">
           <div class="row">
              <div class="col-xs-5">
                 <p>&copy; <?php echo date('Y'); ?> Copyright. <?php _e('Powered by', 'Agiogu'); ?>
                  <a href="#" title="omomoh">©omomoh</a>
                  </p>
              </div>
              <div class="col-xs3">
                <h5 class="follow ">Follow us</h5>
              </div>
              <div class="col-xs-4">
                  <?php
								 $args = array(
									 'theme_location' => 'secondary',
									 'container'      => 'nav',
									 'container_class' => 'socials',
									 'container_id'   => 'socials',
									 'link_before'    => '<span class="sr-text">',
									 'link_after'     => '</span>'
								 );
								 wp_nav_menu($args);
							 ?>
              </div>
            <p class="last">Imprint</p>
          </div>

      </div>
  
</footer>
<?php wp_footer(); ?>
</body>
</html>
