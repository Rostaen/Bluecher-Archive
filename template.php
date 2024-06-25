<?php
class Template
{
	var $title = 'Untitled';
	var $keywords = 'keywords';
	var $description = 'description';
	var $script = '';
	function setTitle($title)
	{
		$this->title = $title;
	}
	function setMetaKW($keywords)
	{
		$this->keywords = $keywords;
	}
	function setMetaDesc($description)
	{
		$this->description = $description;
	}
	function setScript($script)
	{
		$this->script = $script;
	}
	function open()
	{ ?>
		<!DOCTYPE HTML>
		<html lang="en">

		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="keywords" content="" />
			<meta name="description" content="" />


			<title><? echo $this->title; ?></title>

			<link rel="icon" type="image/x-icon" href="https://www.bard.edu/images/favicon.ico">
			<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow'>
			<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=PT+Sans:400,700'>
			<!-- Font Awesome CSS -->
			<script src="https://kit.fontawesome.com/97160afdb9.js" crossorigin="anonymous"></script>
			<!-- Custom CSS -->
			<link rel="stylesheet" type="text/css" href="main.css">
			<!-- Bootstrap CSS, JS -->
			<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
			<script src="bootstrap.bundle.min.js"></script>

			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		</head>

		<body>
			<header class="" style="background: none;">
				<nav class="navbar navbar-light navbar-expand-lg navbar-custom ps-2 pe-2" aria-label="Main navigation">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#BILnav" aria-controls="BILnav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="BILnav">
						<ul class="navbar-nav mx-auto">
							<li class="nav-item me-2">
								<a class="nav-link" href="index.php" style="color: #b18b2d !important;">Blücher Archive</a>
							</li>
							<li class="nav-item me-2 dropdown">
								<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="history.php">History</a>
									<a class="dropdown-item" href="memorial.php">Memorial</a>
									<a class="dropdown-item" href="add-articles.php">Additional Articles</a>
								</div>
							</li>
							<li class="nav-item me-2">
								<a class="nav-link" href="listen.php">Listen</a>
							</li>
							<li class="nav-item me-2">
								<a class="nav-link" href="lectures.php">Read</a>
							</li>
							<li class="nav-item me-2 dropdown">
								<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Links</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="https://research.uni-leipzig.de/bluecherproject/">Heinrich Blücher Project</a>
									<a class="dropdown-item" href="https://www.bard.edu/arendtcollection/">Hannah Arendt Collection</a>
									<a class="dropdown-item" href="https://hac.bard.edu/">Hannah Arendt Center</a>
									<a class="dropdown-item" href="https://www.bard.edu/archives/">Bard Archives</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			<? }

		function close()
		{ ?>
				<hr style="margin-bottom: 0px !important; margin-top: 30px;">
				<div style="background-color: #333; color: white;" class="page-bottom">
					<div class="container pt-4 pb-4 text-center">
						<p>
							©<? echo date("Y"); ?> Stevenson Library - Bard College, Annandale-on-Hudson, NY 12504
						</p>
					</div>
				</div>
		</body>

		</html>
<? }
	} ?>
