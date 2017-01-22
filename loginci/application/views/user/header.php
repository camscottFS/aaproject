<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html ng-app lang="en">
<head>
	<meta charset="utf-8">
	<title>OverGroup - Dashboard</title>
	<link rel="icon" type="icon/png" href="<?php echo base_url(); ?>assets/custom/images/favicon.png">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/custom/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/font-awesome-4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
</head>
<body id="bootstrap-overrides">

	<div id="contact" class="modalDialog">
		<div>
			<a href="#close" title="Close" class="close">X</a>
			<h2>Contact</h2>
			<form enctype="multipart/form-data" action="php/contact.php" method="POST">
				<label>Name</label>
				<br />
				<input type="text" name="cname" required />
				<br />
				<label>Email</label>
				<br />
				<input type="text" name="cemail" required />
				<br />
				<label>Message</label>
				<br />
				<textarea class="message" name="cmessage" required></textarea>
				<br />
				<input type="submit" value="Send Message" />
			</form>
		</div>
	</div>

	<div id="forgot" class="modalDialog">
		<div>
			<a href="#close" title="Close" class="close">X</a>
			<h2>Account Recovery</h2>
			<form>
				<label>Email</label>
				<br />
				<input type="text" required />
				<br />
				<input type="submit" value="Reset Password" />
			</form>
		</div>
	</div>

	<div class="header">
		<nav>
			<a href="<?php echo site_url('home') ?>"><div class="logo"></div></a>
			<ul>
				<li><a href="<?php echo site_url('home') ?>">Dashboard</a></li>
				<li><a href="#">Looking for Group</a></li>
				<li><a href="#">Team Recruitment</a></li>
			</ul>
			<div class="user-nav">
				<span>Welcome <?php echo $username ?></span>
				<a href="edit"><button class="login"><i class="fa fa-user" aria-hidden="true"></i>Edit Profile</button></a>
				<a href="<?php echo site_url('home/logout') ?>"><button class="register"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</button></a>
			</div>
		</nav>
	</div>
