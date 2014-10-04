<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
	@section('head')
    <title>MCAds</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/lumen/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/slider.css" />
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/styles.css" />
	@show
</head>
<body>
<div class="navbar navbar-default">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
			<a class="navbar-brand" href="#">MCAds</a>
	</div>
	<div class="navbar-collapse collapse navbar-responsive-collapse">
		<ul class="nav navbar-nav">
			<li class="active"><a href="#">Active</a></li>
			<li><a href="#">Link</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li class="divider"></li>
					<li class="dropdown-header">Dropdown header</li>
					<li><a href="#">Separated link</a></li>
					<li><a href="#">One more separated link</a></li>
				</ul>
			</li>
		</ul>
		<form class="navbar-form navbar-left">
			<input type="text" class="form-control col-lg-8" placeholder="Search">
		</form>
		@if (Auth::check())
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#">Link</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Logged in as {{ Auth::user()->username }} <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="dashboard">Dashboard</a></li>
					<li><a href="post">Post an ad (advertisers)</a></li>
					<li><a href="#">Post a slot (servers)</a></li>
					<li class="divider"></li>
					<li><a href="#">Logout</a></li>
				</ul>
			</li>
		</ul>
		@else
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/register">Register</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<!--
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						-->
						<div style="padding-left:15px;padding-right:15px">
						<h2>Login</h2>
                            <form action="/login-proc" method="post" accept-charset="UTF-8">
                                <input id="username" style="margin-bottom: 15px;" type="text" name="username" placeholder='Username' size="30" class="form-control">
                                <input id="password" style="margin-bottom: 15px;" type="password" name="password" placeholder='Password' size="30" class="form-control">

                                <input class="btn btn-success form-control" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="login" value="Sign In">
                                <br><br>
							</form>
						</div>
					</ul> <!-- Close dropdown-menu -->
				</li>
			</ul>
		@endif
	</div>
</div>

@yield('content')


<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
  <div class="container">
    Copyright &copy; 2014 MCAds
  </div>
</nav>
@section('foot')
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/bootstrap-slider.js"></script>
<script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
<script src='js/jquery-ui.min.js'></script>
<script src="js/jquery.floatingmessage.min.js"></script>

@if (strlen(Session::get('error'))>1)
	<script>
	// Get flashed messages
	$( document ).ready(function() {
		$.floatingMessage("<b>{{ Session::get('error') }}</b>",{
			time:3000,
			position : "top-right",
			show : "fold",
			hide : "explode",
			stuffEaseTime : 500,
			stuffEasing : "swing",
			moveEaseTime : 200,
			moveEasing   : "easeInExpo"
		});
	});
	</script>
@endif
@if (strlen(Session::get('addjs'))>1)
	<script>
	// Get flashed js
	$( document ).ready(function() {
		{{ Session::get('addjs') }}
	});
	</script>
@endif

@show
</body>
</html>
