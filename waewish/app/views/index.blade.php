<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Waewish - Wishing Better!</title>
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta charset="UTF-8">
<meta name="description" content="Waewish provides a whole new experience of wishing someone online. We craft your wishes to express it better. Congrats, Birthdays or Thank you, you name it - we have it all!">
<meta name="keywords" content="Online wishes, ecard, birthday, congrats, wishing, appreciate, gesture, expression, expressing, gifts, cards, love, emotion, greeting, craft, express, wish, celebration">
<meta name="author" content="KPS">
</head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65051816-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- css -->
{{HTML::style('packages/css/bootstrap.css')}}
{{HTML::style('packages/css/font-awesome.css')}}
{{HTML::style('packages/css/animate.min.css')}}
{{HTML::style('packages/css/normalize.min.css')}}
{{HTML::style('packages/css/alertify-bootstrap-3.css')}}
{{HTML::style('packages/css/sweetalert.css')}}
{{HTML::style('packages/css/9zz3shrttys.css')}}
{{HTML::style('packages/css/responsive.css')}}
<link rel="shortcut icon"
	href="{{{ asset('packages/images/favicon.ico') }}}">
<body>

	<div id="header" class="header-section">
		<nav class="navbar navbar-fixed-top sticky-section" role="navigation"
			id="default-header">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed"
						data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
						aria-expanded="false">
						<span class="sr-only">Toggle navigation</span> <span
							class="fa fa-bars  res-bar"></span>
					</button>
					<a class="site-name navbar-brand" id="brand-name" href="">WAEW<span id="i">i</span>SH</a>
				</div>
				<div class="collapse navbar-collapse"
					id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#howitwork">How It Works</a></li>
						<li><a href="#subscribe">Join The Email List</a></li>
						<li><a
							href="https://medium.com/@waewish/wishing-someone-just-got-better-d47517929f05"
							target="_blank">Our Blog</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div id="introduction">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-8">
						<h1 class="intro-text " >Hi, we love Wishing.</h1>
						<h1 class="next-line" >
							<!-- 							we figured one which definitely has an <span class="edge">edge</span> -->
							<!-- 							. -->
							Find one of the best ways to express Yourself.
						</h1>
						<h2 class="third-line " >
							We are curating some of the expressions that would align with
							your mood in addition to the standard wishes that we all do.

							<!-- 							<span class="italic"><span >Congratulations</span> -->
							<!-- 								, <span >Thank You</span> or <span >Get -->
							<!-- 									Well Soon</span></span> - We've got you covered! -->
						</h2>
<!-- 						<h2 class="fourth-line">Make your wishes their Memories.</h2> -->
						<a class="btn open-notify-btn "  href="#howitwork" >How It Works</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section id="howitwork">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="how-text  wow fadeInDown "data-wow-duration="1000ms"data-wow-delay="300ms">How It Works</h1>
				</div>
			</div>
			<div class="row how-row">
				<div class="col-md-4 wow fadeInUp "data-wow-duration="1000ms"data-wow-delay="300ms">
					<div class="thumbnail">
						{{HTML::image('packages/images/choosewish.png', '', array('class'
						=>'how-img'))}}
						<div class="caption">
							<h3 class="how-head">CHOOSE </h3>
							<p class="how-desc">Waewish works hard to curate various wishes
								like Bdays, Congrats including our custom wishes- so all you do
								is choose.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 wow fadeInUp "data-wow-duration="1000ms"data-wow-delay="350ms">
					<div class="thumbnail">
						{{HTML::image('packages/images/craftit.png', '', array('class'
						=>'how-img'))}}
						<div class="caption">
							<h3 class="how-head">CRAFT </h3>
							<p class="how-desc">Provide us with some basic info. That's all.
								Let us do the work to craft a beautiful way to express your
								wish.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 wow fadeInUp "data-wow-duration="1000ms"data-wow-delay="400ms">
					<div class="thumbnail">
						{{HTML::image('packages/images/share.png', '',
						array('class'=>'how-img'))}}

						<div class="caption">
							<h3 class="how-head">SHARE </h3>
							<p class="how-desc">Send your wish in email or share it with your
								friends in Social Networks like Facebook, Twitter, etc or both.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<center>
						<a class="btn round-btn an-btn" href="#subscribe"><i
							class="fa fa-chevron-down fa-4x text-black"></i></a>
					</center>
				</div>
			</div>
		</div>
	</section>
	<section id="subscribe">
		<div class="container">
			<div class="row  ">
				<div class="col-md-12">
					<h2 class="subscribe-head-text">Making someone feel special just
						got better than ever!</h2>
					<h1 class="subscribe-mid-text">Be the first to find out.</h1>
				</div>
			</div>
				<div class="row ">
				<div class="col-md-7">
					<input type="email" class="form-control email-text"
						id="email_address" name="email_address"
						placeholder="example@yourmail.com">

				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<button id="saveBtn" type="button" onclick="subscribe(); "
						class=" open-contact-btn  ">Notify Me</button>
				</div>
			</div>
		</div>
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<p class="copyright pull-left">&copy WAEWiSH 2015</p>
					</div>
					<div class="col-md-6">
						<div class="social-icons pull-right">
							<ul>
								<!-- <li><a class="envelope" href="#"><i
								class="fa fa-envelope"></i></a></li> -->
								<li><a class="twitter" target="_blank"
									href="http://www.twitter.com/waewish"><i class="fa fa-twitter"></i></a></li>
								<li><a class="instagram" href="https://instagram.com/waewish/"
									target="_blank"><i class="fa fa-instagram"></i></a></li>
								<li><a class="facebook" target="_blank"
									href="https://www.facebook.com/pages/Waewish/1050921011592446?fref=ts"><i
										class="fa fa-facebook"></i></a></li>
								<!--  <li><a class="linkedin" href="#"><i
								class="fa fa-linkedin"></i></a></li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</section>


	<!-- js -->
	{{HTML::script('packages/js/jquery.min.js');}}
	{{HTML::script('packages/js/bootstrap.js');}}
	{{HTML::script('packages/js/alertify.js');}}
	{{HTML::script('packages/js/jquery.nicescroll.min.js');}}
	{{HTML::script('packages/js/sweetalert-dev.js');}}
	{{HTML::script('packages/js/wow.min.js');}}
	{{HTML::script('packages/js/jquery.flip.min.js');}}
	{{HTML::script('packages/script/script.js');}}
</body>
</html>
