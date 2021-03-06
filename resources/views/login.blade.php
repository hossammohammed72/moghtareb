	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Login| Moghtareb</title>

		<!-- FontAwesome-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('auth/css/linearicons.css')}}">
			<link rel="stylesheet" href="{{asset('auth/css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('auth/css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('auth/css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{asset('auth/css/nice-select.css')}}">					
			<link rel="stylesheet" href="{{asset('auth/css/animate.min.css')}}">
			<link rel="stylesheet" href="{{asset('auth/css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{asset('auth/css/main.css')}}">
			<link rel="stylesheet" href="{{asset('auth/css/contact.css')}}">
		</head>
		<body>
			<div class="row">
					<div class="box col-lg-12 col-sm-12">
						<div class="left">
							<div class="form">
									<div class="upper">	
										<i class="fas fa-user fw fa-2x"></i>
										<span>Login</span>
									</div>
									<div class="login-form">
										<form action="{{route('home')}}">
											<div class="astrisk">
												<input type="text"  placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your username'" class="form-control">
												<i class="fas fa-user fw fa-2x"></i>
											</div>
											<div class="astrisk">
												<input type="password"  placeholder="passowrd" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Passowrd'" class="form-control">
												<i class="fas fa-unlock fw fa-2x"></i>
											</div>
											<div class="form-group form-check">
												<input type="checkbox" class="form-check-input check" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">Remember Me</label>
											</div>
											<div>
												<button type="submit" class="btn btn-primary">Login</button>
											</div>							
										</form>
									</div>
									<div class="link-ref">
										<a href="#">Don't Have Account?</a>
									</div>
									<div class="social-icons">
										<ul>
											<li>
												<i class="fab fa-facebook-f fa-2x face"></i>
											</li>
											<li>
												<i class="fab fa-google fa-2x gmail"></i>
											</li>
										</ul>
									</div>
							</div>
						</div>
						<div class="reg form col-lg-12 col-sm-12 ">
								<div class="upper">	
										<span>Registration</span>
									</div>
									<div class="login-form">
										<form action="{{route('login')}}">
											<div class="astrisk">
												<input type="text"  placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your username'" class="form-control">
												<i class="fas fa-user fw fa-2x"></i>
											</div>
											<div class="astrisk">
												<input type="text" placeholder="cellphone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your cellphone'" class="form-control">
												<i class="fas fa-phone-volume fa-2x"></i>
											</div>
											<div class="astrisk">
												<input type="password"  placeholder="passowrd" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Passowrd'" class="form-control">
												<i class="fas fa-unlock fw fa-2x"></i>
											</div>
											<div class="astrisk">
												<input type="password"  placeholder="confirmPassowrd" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your confirmPassowrd'" class="form-control">
												<i class="fas fa-unlock fw fa-2x"></i>
											</div>
												<div class="form-group form-check">
													<input type="checkbox" class="form-check-input check" id="exampleCheck1">
													<label class="form-check-label" for="exampleCheck1">Remember Me</label>
												</div>
													<button type="submit" class="btn btn-primary">Registration</button>
												</div>
												<div class="link-ref margin">
													<a href="#" class="down">Already Have Acc?</a>
												</div>
										</form>
									</div>
								</div>
						</div>
					
					</div>
			</div>
			<!-- start footer Area -->			

			<script src="{{asset('/auth/js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{asset('auth/js/vendor/bootstrap.min.js')}}"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{asset('auth/js/easing.min.js')}}"></script>			
			<script src="{{asset('auth/js/hoverIntent.js')}}"></script>
			<script src="{{asset('auth/js/superfish.min.js')}}"></script>	
			<script src="{{asset('auth/js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{asset('auth/js/jquery.magnific-popup.min.js')}}"></script>	
			<script src="{{asset('auth/js/owl.carousel.min.js')}}"></script>			
			<script src="{{asset('auth/js/jquery.sticky.js')}}"></script>
			<script src="{{asset('auth/js/jquery.nice-select.min.js')}}"></script>			
			<script src="{{asset('auth/js/parallax.min.js')}}"></script>		
			<script src="{{asset('auth/js/mail-script.js')}}"></script>	
			<script src="{{asset('auth/js/main.js')}}"></script>
			<script src="{{asset('auth/js/myPlugins.js')}}"></script>	
		</body>
	</html>



