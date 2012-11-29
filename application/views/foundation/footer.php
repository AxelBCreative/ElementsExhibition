  <footer class="row">
			<span class="six columns hide-for-small">
				<a href="<?php echo base_url(); ?>">Home</a> | <a href="blog">Blog</a> | <a href="privacy">Privacy Policy</a>
				&nbsp;
				<span class="social social-footer">
					<g:plusone size="medium"></g:plusone>
					<a href="https://twitter.com/share?text='Check out the Elements Exhibition at the Hassad Museum of Science! <?php if (isset($shorturl)){echo $shorturl;}else echo 'http://xzib.it';?>'" class="twitter-share-button" data-lang="en">Tweet</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>										
				</span>
			</span>
		
			<span class="six columns text-right copyright">
				&copy; Copyright <?php echo date('Y'); ?> <a href="<?php echo base_url();?>">The Hassad Museum of Science</a>
			</span>		
			
  </footer>
  
  <!-- Included JS Files (Compressed) -->
  <script src="<?php echo base_url();?>assets/javascripts/jquery.js"></script>
  <script src="<?php echo base_url();?>assets/javascripts/foundation.min.js"></script>
  <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>  
  
  <!-- Initialize JS Plugins -->
  <script src="<?php echo base_url();?>assets/javascripts/app.js"></script>
</body>
</html>