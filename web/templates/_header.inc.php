<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Detector [BETA] - combined browser- &amp; feature-detection for your app</title>
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="viewport" content="width=device-width">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<?php 
		if ($ua->isMobile && (Detector::$foundIn != "archive")) {
			print "<link href=\"css/mobile.css\" rel=\"stylesheet\">";
		} else {
			print "<link href=\"css/desktop.css\" rel=\"stylesheet\">";
		}
	?>
	<style type="text/css">
		.beta {
			font-size: 20px;
			vertical-align: bottom;
		}
	</style>

	<!-- My Scripts -->
	<script type="text/javascript" src="js/features.js.php"></script>
	<script type="text/javascript" src="js/modernizr.pre21.js"></script>
  </head>

  <body>

    <div class="container">

      <div class="content">
        <div class="page-header">
          <h1><a href="/" style="color: black;">Detector</a> <span class='label notice beta' >beta</span> <?php if ($ua->isMobile && (Detector::$foundIn != "archive")) {} else { print "<small>combined browser- &amp; feature-detection for your app</small></h1>"; } ?>
        </div>
        <div class="row">