	<header class="header row">	
			<section class="six columns">
				<a href=""><img src="assets/images/foundation/home-logo.png" /></a>
			</section>
			<section class="six columns">
				<img class="hide-for-small" src="<?php echo base_url();?>/assets/images/pics/got-your-ticket.png" title="Get your ticket to the Elements Exhibition" alt="Got your ticket?" />
			</section>
	</header>
	
	<section class="row">

					<article class="intro-message six columns">
						<?php echo $heading; ?>
						<?php echo $copy; ?>
					</article>
					<article class="six columns">
													
							<div>
								<h3 class="hide-for-small">Now you have!</h3>
								<h6>Your unique invite code is: <span class="radial label code"><?php echo $code = strtoupper(base_convert((mt_rand(1e1, 9e9)), 10, 32));?></span></h6>
								<p>Simply present this on the day for instant entry!</p>
								<form class="hide-for-small" action="" method="post">
								<label>Email me my ticket</label>
								<div class="row collapse">
									<div class="one columns">
									<span class="prefix"><i class="icon-credit-card"></i></span>
									</div>
									<div class="five columns">
										<input type="email" name="email" placeholder="your@email.com" />
										<input type="hidden" value="<?php echo $code; ?>" />
									</div>
									<div class="two columns end">
										<input type="submit" class="button orange success expand postfix" value="Send" />
									</div>
								</div><!-- .row-->
								</form>
							</div>
						
					</article>					
	</section><!--.row-->
	<section class="row start-exploring">
		<article class="twelve columns">
			<p><strong>&laquo; Start exploring! &raquo;</strong></p>
		</article>
	</section>
	<section class="row">
		
		<article class="six columns">
			<div id="featured-home-top-left">
				<div data-caption="#earth-caption"><a href="elements/earth"><img src="<?php echo base_url();?>assets/images/pics/home-earth.jpg" /></a></div>
			</div>
			<span class="orbit-caption" id="earth-caption"><strong>Earth</strong>: The final frontier?</span>
		</article>
		
		<article class="six columns">
			<div id="featured-home-top-right">
				<div data-caption="#water-caption"><a href="elements/water"><img src="<?php echo base_url();?>assets/images/pics/home-water.jpg" /></a></div>
			</div>
			<span class="orbit-caption" id="water-caption"><strong>Water</strong>: The final frontier?</span>
		</article>
	</section>
	<section class="row">
		
		<article class="six columns">
			<div id="featured-home-bottom-left">
				<div data-caption="#fire-caption"><a href="elements/fire"><img src="<?php echo base_url();?>assets/images/pics/home-fire.jpg" /></a></div>
			</div>
			<span class="orbit-caption" id="fire-caption"><strong>Fire</strong>: The final frontier?</span>
		</article>
		
		<article class="six columns">
			<div id="featured-home-bottom-right">
				<div data-caption="#air-caption"><a href="elements/air"><img src="<?php echo base_url();?>assets/images/pics/home-air.jpg" /></a></div>
			</div>
			<span class="orbit-caption" id="air-caption"><strong>Air</strong>: The final frontier?</span>
		</article>
	</section>	