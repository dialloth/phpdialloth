<!Doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Foundation | Welcome</title>
	<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>


	<div class="top-bar">
		<div class="top-bar-left">
			<ul class="menu">
			   <li class="menu-text">Notre blog </li> 
			  <li><a href="/blog3old/public/welcome">Home</a></li>
			  <li><a href="/blog3old/public/articles">Articles</a></li>
			  <li><a href="/blog3old/public/contact">Contacts</a></li>

				<!-- Authentication Links -->
				@guest
					<li class="nav-item text-right" >
						<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
					</li>
					@if (Route::has('register'))
						<li class="nav-item text-right">
							<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
						</li>
					@endif
				@else
					<li>
						<a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>
					</li>
					<li style="display: ">
						<a href="{{ route('logout') }}"
						   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</li>
				@endguest
			</ul>
		</div>
	</div>
	</div>
	<body style='background-color: aliceblue;'>

	<div class="callout large primary">
		<div class="row column text-center"  style='color:indianred;'>
			<h1 style = 'color: black';>Blog Thierno 2019 </h1>
			<h3 class="subheader"> Html, Css, JS, PHP, découvrez toute l'actualité du dev en un clic !</h3>
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
	<footer style ='text-align: center;'>
		<div class="top-bar" style ='text-align: center;'>
			<div class="top-bar-left" style ='text-align: center;'>
				<ul class="menu" style ='text-align: center;'>
					<li><a href="/blog3old/public">Home</a></li>
					<li><a href="/blog3old/public/articles">Articles</a></li>
					<li><a href="/blog3old/public/contact">Contacts</a></li>
				</ul>
			</div>
		</div>
	</footer>
</body>
</html>
