

<body<?php if(isset($element)) echo " class='".strtolower($element)."'";?>>
<header id="main">
	
	<section class="logo row">		
			<a class="three columns" href="<?php echo base_url(); ?>" title="The Elements Exhibition"><img id="logo" src="<?php echo base_url(); ?>assets/images/foundation/logo-white.png" alt="The Elements" title="The Elements Exhibition" /></a>
			<?php $this->load->view('foundation/elements_navigation');	?>				
	</section>

</header>
<section class="row show-for-small">
	<div class="ten columns">
		<a href="<?php echo base_url(); ?>vip" class="eleven columns get-your-invite" title="Win a free VIP invite to the Elements Exhibition"><i class="icon-credit-card"></i> Get your FREE ticket!</a>
	</div>
</section>