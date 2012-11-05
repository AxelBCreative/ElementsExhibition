

<body <?php if(isset($element)) echo "class='".strtolower($element)."'";?>>
<header>
	<section class="logo row">
		<span class="six columns">
			<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/foundation/logo.png" alt="The Elements" /></a>
		</span>
	</section>

<?php $this->load->view('foundation/elements_navigation');	?>

</header>