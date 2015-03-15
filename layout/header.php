<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name ="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<link href="/css/streamline.css" rel="stylesheet">
	<link href="/css/bootstrap.min.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/jquery.validate.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" >
    	$(document).ready(function () { 
    				//dropdown menu
					$('.dropdown-toggle').dropdown();

					//carousels
					$('#newcarousel').carousel({
						interval: 10000
					})   
					$('#newcarousel').on('slid.bs.carousel', function() {
					    	//alert("slid");
					});

					$('#popmoviescarousel').carousel({
						interval: 10000
					})   
					$('#popmoviescarousel').on('slid.bs.carousel', function() {
					    	//alert("slid");
					});

					$('#poptvcarousel').carousel({
						interval: 10000
					})   
					$('#poptvcarousel').on('slid.bs.carousel', function() {
					    	//alert("slid");
					});


					//sign in and register modals
					$('#signBtn').click(function(){
						$('#signform').modal({show:true})
					});

					$('#regBtn').click(function(){
						$('#regform').modal({show:true})
					});

					//form validation
					$('#regform').validate();

        });
    </script>

    <title>streamline | tv and movies made easy</title>

</head>
<body>

	<!--modals-->
	<?php require_once ('login/forms/signform.php'); ?>
    <?php require_once ('login/forms/regform.php'); ?>

	<?php require_once('nav.php'); ?>

	<div class="container-fluid" style="text-align:center;">