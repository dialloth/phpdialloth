<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Foundation | Welcome</title>
	<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>
<body>

	<div class="top-bar">
		<div class="top-bar-left">
			<ul class="menu">
				<li class="menu-text">Notre blog </li>
				<li><a href="/blog3/public">Home</a></li>
				<li><a href="/blog3/public/articles">Articles</a></li>
				<li><a href="/blog3/public/contact">Contacts</a></li>
			</ul>
		</div>
	</div>

	<div class="callout large primary">
		<div class="row column text-center">
			<h1>Blog DCISS 2019 </h1>
			<h2 class="subheader">Blog en cours de maintenance, patience les gars !</h2>
		</div>
	</div>
	<div class="row medium-8 large-7 columns">

	<!-- 	<p>Du contenu ici </p> -->
		@yield('content')
		<!-- <h1> Ici, c'est la page d'accueil !</h1> -->
	</div>

	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
	<script>
		$(document).foundation();
	</script>
</body>
</html>
