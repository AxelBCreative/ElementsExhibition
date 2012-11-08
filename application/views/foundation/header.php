

<body <?php if(isset($element)) echo "class='".strtolower($element)."'";?>>
<header>
	
	<section class="logo row">		
			<a class="three columns" href="<?php echo base_url(); ?>" title="The Elements Exhibition"><img id="logo" src="<?php echo base_url(); ?>assets/images/foundation/logo.png" alt="The Elements" title="The Elements Exhibition" /></a>
			<?php $this->load->view('foundation/elements_navigation');	?>				
	</section>

</header>