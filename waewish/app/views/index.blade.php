<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>waewish::wish your special one</title>
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1" />
</head>
<!-- css -->
{{HTML::style('packages/css/bootstrap.css')}}
{{HTML::style('packages/css/font-awesome.css')}}
{{HTML::style('packages/css/animate.min.css')}}
{{HTML::style('packages/css/normalize.min.css')}}
{{HTML::style('packages/css/9zz3shrttys.css')}}
<link rel="shortcut icon" href="{{{ asset('packages/images/favicon.ico') }}}">
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="header-text">
					wae<span class="wish">wish</span>
				</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<p class="description">There are tons of ways to express to the
					person you care, we figured a way which definitely has an edge.
					Birthdays, Anniversary, Congratulation or just Thank you - Make
					your wishes their Memories. Making someone feel special just got
					better than ever!</p>
				<p class="description-invite">Be the first to find out. We'll be
					launching soon, so sign up to be one of the first to be invited.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" id="button-div">
				<a class="open-notify-btn" id="notimodal" href="#animatedModal">get
					notified</a>
			</div>
		</div>
	</div>
	<div id="animatedModal">
		<div id="closebt-container" class="close-animatedModal">{{
			HTML::image('packages/images/closebt.svg', 'close', array('class' =>
			'closebt'))}}</div>
		<div class="modal-content">
			<h1 class="subscribe">Subscribe To Get Invited</h1>
			<div class="col-md-8 col-md-offset-2" id="success-text">
					<div class="alert alert-yellow alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert"
							aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						You are awesome!!!Tou will be notified soon
					</div>

				</div>
			<div id="text-box">
				<div class="col-md-2"></div>
				<div class="col-md-6">
					<input type="email" class="form-control email-text"
						id="email_address" name="email_address"
						placeholder="example@yourmail.com">
					<p class="help-block pull-left" id="error-text"></p>
				</div>
				<div class="col-md-2">
					<button id="saveBtn" type="button" onclick="subscribe();"
						class="open-contact-btn">subscribe</button>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</div>
	<!-- js -->
	{{HTML::script('packages/js/jquery.min.js');}}
	{{HTML::script('packages/js/bootstrap.js');}}
	{{HTML::script('packages/js/animatedModal.min.js');}}
	{{HTML::script('packages/script/script.js');}}
</body>
</html>