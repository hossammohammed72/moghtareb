@extends('layouts.master')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Tell Us About Yourself				
				</h1>	
			</div>											
		</div>
	</div>
</section>
<!-- End banner Area -->	

<!-- Start post Area -->
<section class="post-area section-gap">
	<div class="container" style="margin-top: -55px;">
		<div class="row justify-content-center d-flex">
			<div class="col-lg-12 post-list">
				<div class="single-post d-flex flex-row" style="border-radius:40px; ">
					<div class="col-lg-12">
						<h2 class="title">Walee hma</h2>
						<form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right" style="margin-top: 20px;">
							<div class="row">	
								<div class="col-lg-12 form-group">
									<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
								    <span class="button-checkbox">
								        <button type="button" class="btn" data-color="success">Success</button>
								        <input type="checkbox" class="hidden" checked />
								    </span>
									<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

									<input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
									<textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
									<button class="primary-btn mt-20 text-white" style="float: right;">Submit</button>
									<div class="mt-20 alert-msg" style="text-align: left;"></div>
								</div>
							</div>
						</form>	
					</div>
				</div>	
			</div>
		</div>
	</div>	
</section>
<!-- End post Area -->

@endsection