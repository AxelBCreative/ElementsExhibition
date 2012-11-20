  <div class="row">
    <div class="twelve columns">
      <h2><?php echo $heading; ?></h2>
      <p class="intro-paragraph eight columns"><?php echo $introparagraph; ?></p>
    </div>
  </div>

  <div class="row">
    <div class="eight columns">
  
    <section class="twelve columns">
      <div id="featured">
        <img src="<?php echo $image_one; ?>" alt="<?php echo $image_one_title; ?>" title="<?php echo $image_one_title; ?> - Learn at the Elements Exhibition">
        <img src="<?php echo $image_two; ?>" alt="<?php echo $image_two_title; ?>" title="<?php echo $image_two_title; ?> - Learn at the Elements Exhibition">
        <img src="<?php echo $image_three; ?>" alt="<?php echo $image_three_title; ?>" title="<?php echo $image_three_title; ?> - Learn at the Elements Exhibition">
	  </div>
	</section>
 
      <div class="row">
        <div class="six columns">
			<h3>For Power</h3>
				<p>
				We have used fire for generating electricity for hundreds of years, and we're not going to stop any time soon.
				Even your car will quite likely use a combustion engine to make it go.
				</p>
        </div>
        <div class="six columns">
			<h3>For Fun</h3>
				<p>
				Remember, remember, the 5th of November... we all know what that means: fireworks!
				Fire-breathers are also a sight to behold - and you can try it yourself at the Elements Exhibition!
				</p>
        </div>
      </div>
      
      
      <h3>At the Museum</h3>
      <dl class="tabs">
        <dd class="active"><a href="#fireworks">Fireworks Display</a></dd>
        <dd><a href="#cookoff">Cook-Off</a></dd>
        <dd><a href="#deadlyfires">Deadly Fires</a></dd>
      </dl>

      <ul class="tabs-content">
        <li class="active" id="fireworksTab">
		<h4>Bang, crack, pop!</h4>
		<p>Every Friday night after closing (at 20:15), we will hold a fireworks display. Be sure to bring your wooly hats!</p>
		<p>There'll be plenty of sparklers for the little ones, too.</p>
		</li>
        <li id="cookoffTab">
		<h4>Think you're a better chef than Ramsay or Oliver?</h4>
		<p>Prove it at our daily cook-off!</p>
		<p>Every afternoon we give 5 contestants the chance to cook a live meal for the entire cafeteria.</p> 
		<p>Extra chilies, please; we like it hot.</p>
		</li>		
        <li id="deadlyfiresTab">
		<h4>Every year, hundreds of people die in household fires.</h4>
		<p>
		Okay, so there aren't going to be deadly fires at the museum (we hope!), and yes, more people die from asphyxiation from the toxic
		smoke than actual burns.
		</p>
		<p>Still, that isn't to say you can't benefit from our fire safety tips. Be sure to attend the seminar!</p>
		</li>
      </ul>
      
      
     
      
    </div>

<?php $this->load->view('foundation/sidebar'); ?>
  </div> 