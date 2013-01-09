<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <meta name="description" content="<?php echo $meta_description ?>" />

  <title><?php echo $title; ?></title>
  
  <!-- Included CSS Files (Uncompressed) -->
  
  <!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/foundation.css">-->
  
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/foundation.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/font-awesome.css">  
  <link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic|Open+Sans:400italic,600italic,700italic,800italic,400,600,700,800|Paprika' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/app.css">
  <script src="<?php echo base_url(); ?>assets/javascripts/modernizr.foundation.js"></script>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35434804-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  </script>  
  <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<link rel="stylesheet" type="text/css" href="http://assets.cookieconsent.silktide.com/current/style.min.css"/>
<script type="text/javascript" src="http://assets.cookieconsent.silktide.com/current/plugin.min.js"></script>
<script type="text/javascript">
// <![CDATA[
cc.initialise({
	cookies: {
		social: {},
		analytics: {},
		necessary: {}
	},
	settings: {
		consenttype: "implicit"
	}
});
// ]]>
</script>
<!-- End Cookie Consent plugin -->

</head>