<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.stablegrowth.org/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 07:51:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
 
	<meta charset="utf-8" />
	<title>Register - Global Ventures Today</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="images/favicon.png')}}">

	<!-- Template CSS Files -->
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/style4e62.css?v=1697183434')}}">
	<link rel="stylesheet" href="{{asset('css/skins/green.css')}}">
	<link rel="stylesheet" href="{{asset('css/mystyle4e62.css?v=1697183434')}}">

	<!-- Template JS Files -->
	<script src="{{asset('js/modernizr.js')}}"></script>

</head>

<body class="auth-page">
	<!-- Wrapper Starts -->
	<div class="wrapper">
				<div class="container">
			<div class="row">
							<!-- Logo Starts -->			
				<h1 class="col-12 text-center" style="color:#0ba026"><a class="logo" href="/"><b>Global Investment</b></a></h1>				
				<!-- Logo Ends -->

				<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
				
										<!-- Logo Ends -->
					<div class="form-container">
						<div>
							<!-- Section Title Starts -->
							<div class="row text-center">
								<h2 class="title-head">get <span>started</span></h2>
								<p class="info-form">Open account for free and start trading Bitcoins now!</p>
							</div>
							<!-- Section Title Ends -->
							<div style="color: red; text-align:center"> </div>
							<!-- Form Starts -->
							<form action="/registeruser" method="post" style="padding-bottom:50px;">
							@csrf
								<!-- Input Field Starts -->
								<div class="form-group">
									<input class="form-control" name="name" id="name" placeholder="NAME" type="text" required>
								</div>
								<!-- Input Field Ends -->
								<!-- Input Field Starts -->
								<div class="form-group">
									<input class="form-control" name="email" id="email" placeholder="EMAIL" type="email" required>
								</div>
								<div class="form-group">
									<input class="form-control" name="username" id="username" placeholder="USERNAME" type="text" required>
								</div>
								<div class="form-group">
									<input class="form-control" name="walletid" id="wallet" placeholder="WALLETID (This is optional, you can set it later)" type="text">
								</div>
								<div class="form-group">
									<input class="form-control" name="referer" id="refer" placeholder="REFERRAL (Optional)" type="text" value="{{$refid}}">
								</div>
								<!-- Input Field Ends -->
								<!-- Input Field Starts -->
								<div class="form-group">
									<input class="form-control" name="password" id="password" placeholder="PASSWORD" type="password" required>
								</div>
								<div class="form-group">
									<input class="form-control" name="pwdRepeat" id="pwdRepeat" placeholder="CONFIRM PASSWORD" type="password" required>
									<input type="checkbox" class="chkbox"> Show Password
								</div>

								<!-- Input Field Ends -->
								<!-- Submit Form Button Starts -->
								<div class="form-group">
									<button class="btn btn-primary" type="submit" name="submit">create account</button>
									<p class="text-center">already have an account ? <a href="{{URL::asset('/logins')}}">Login</a>
								</div>
								<!-- Submit Form Button Ends -->
							</form>
							<!-- Form Ends -->
							@if ($message = Session::get('uploadsuccess'))
                    <div class="alert alert-success alert-dismissible col-xs-12">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i> Succcess!</h4>
                        {{ $message }}<br>
						<a href="{{URL::asset('/logins')}}">click here to login</a>
                    </div>
                    @endif
                    @if ($message = Session::get('uploaderror'))
                    <div class="alert alert-danger alert-dismissible col-xs-12">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i> Sorry!</h4>
                        {{ $message }}
                    </div>
                    @endif 
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Template JS Files -->
		<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/select2.min.js')}}"></script>
		<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('js/custom.js')}}"></script>
		<script src="{{asset('js/main.js')}}"></script>

	</div>
	<!-- Wrapper Ends -->
	<script src="../code.tidio.co_443/c8gjsngsp3d2mll2nv8faobdwhe4s7q1.js" async></script>
</body>


<!-- Mirrored from www.stablegrowth.org/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 07:51:15 GMT -->
</html>