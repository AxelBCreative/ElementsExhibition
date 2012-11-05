  <div class="row">
    <div class="twelve columns">
      <h2><?php echo $heading; ?></h2>
      <p class="intro-paragraph"><?php echo $introparagraph; ?></p>
      <hr />
    </div>
  </div>

  <div class="row">
    <div class="eight columns">
      <h3>How we use <?php echo $element; ?></h3>

  
    <section class="twelve columns">
      <div id="featured">
        <img src="<?php echo $image_one; ?>" alt="<?php echo $image_one_title; ?>" title="<?php echo $image_one_title; ?> - Learn at the Elements Exhibition">
        <img src="<?php echo $image_two; ?>" alt="<?php echo $image_two_title; ?>" title="<?php echo $image_two_title; ?> - Learn at the Elements Exhibition">
        <img src="<?php echo $image_three; ?>" alt="<?php echo $image_three_title; ?>" title="<?php echo $image_three_title; ?> - Learn at the Elements Exhibition">
	  </div>
	</section>
  

      <div class="row">
        <div class="six columns">
          <div class="panel">
            <p>Six columns</p>
          </div>
        </div>
        <div class="six columns">
          <div class="panel">
            <p>Six columns</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="four columns">
          <div class="panel">
            <p>Four columns</p>
          </div>
        </div>
        <div class="four columns">
          <div class="panel">
            <p>Four columns</p>
          </div>
        </div>
        <div class="four columns">
          <div class="panel">
            <p>Four columns</p>
          </div>
        </div>
      </div>
      
      
      <h3>Tabs</h3>
      <dl class="tabs">
        <dd class="active"><a href="#simple1">Simple Tab 1</a></dd>
        <dd><a href="#simple2">Simple Tab 2</a></dd>
        <dd><a href="#simple3">Simple Tab 3</a></dd>
      </dl>

      <ul class="tabs-content">
        <li class="active" id="simple1Tab">This is simple tab 1's content. Pretty neat, huh?</li>
        <li id="simple2Tab">This is simple tab 2's content. Now you see it!</li>
        <li id="simple3Tab">This is simple tab 3's content. It's, you know...okay.</li>
      </ul>
      
      
      
      <h3>Buttons</h3>

      <div class="row">
        <div class="six columns">
          <p><a href="#" class="small button">Small Button</a></p>
          <p><a href="#" class="button">Medium Button</a></p>
          <p><a href="#" class="large button">Large Button</a></p>
        </div>
        <div class="six columns">
          <p><a href="#" class="small alert button">Small Alert Button</a></p>
          <p><a href="#" class="success button">Medium Success Button</a></p>
          <p><a href="#" class="large secondary button">Large Secondary Button</a></p>
        </div>
      </div>
      
    </div>

<?php $this->load->view('foundation/sidebar'); ?>
  </div>

  
  
  
  
  <div class="row">
    <div class="twelve columns">
      <h3>Reveal</h3>
      <p><a href="#" data-reveal-id="exampleModal" class="button">Example modal</a></p>
    </div>
  </div>
  
  <div id="exampleModal" class="reveal-modal">
    <h2>This is a modal.</h2>
    <p>
      Reveal makes these very easy to summon and dismiss. The close button is simple an anchor with a unicode 
      character icon and a class of <code>close-reveal-modal</code>. Clicking anywhere outside the modal will 
      also dismiss it.
    </p>
    <a class="close-reveal-modal">×</a>
  </div>
