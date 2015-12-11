<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Access Zou</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/docs.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/tableStyles.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{ asset('/js/jspdf.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/html2canvas.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/addimage.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery-1.11.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jspdf.debug.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/pdfHandler.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/previewpdfHandler.js') }}"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

 <!-- ************************* Navbar *************************** -->
<header class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/') }}">AccessZou</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					@if (!Auth::guest())
						<li><a href="{{ url('/') }}">Home</a></li>
						<li><a href="{{ url('/') }}">Feedback/Issues</a></li>
						<li><a href="{{ url('/') }}">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Release Forms <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="{{url('/testScore')}}">Create New Form</a></li>
                                <li><a tabindex="-1" href="{{url('/viewForms') }}">View Forms</a></li>
                            </ul>
                        </li>
					@endif
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (!Auth::guest())
						<li class="dropdown">
							<a href="#" class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown" role="button" aria-expanded="false"> {{ Auth::user()->userSSO }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
    </header>

 <!-- ************************* Banner *************************** -->
        <header class="bs-header">
            <div class="container group">
                      <!-- Column Left -->
        <div class="floatLeft">
            <img src="{{ asset('/images/tiger.png') }}" id="tigerPic" />
        </div>

        <!-- Column Right -->
        <div class="floatLeft">
          <h1>AccessZou</h1><p class="lead">Just Zou it.</p>
        </div>
            </div>
        </header>

  <!-- ************************* Content *************************** -->
	<div class="container" id="layout">
		@if (!Auth::guest())
		<div class="row">
			<div class="col-lg-12 col-sm-9">
		@endif
		<div class="row">
			<div class="col-lg-12 col-sm-9" >
				<div class="panel panel-default" >
					@yield('content')
						@if ( $errors->any() )
							<ul class="alert alert-danger">
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						@endif
				</div>
			</div>
		</div>
			@if (!Auth::guest())
			</div>
		</div>
		@endif
	</div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
