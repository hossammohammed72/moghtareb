@extends('layouts.master')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-center">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content col-lg-9">
						<div class="title text-center">
							<h1 class="mb-10 text-white our-h">Let us find you a partner	</h1>
							<p class="text-white">Roommmates are our buddies and friends, So let's just pickthem right</p>
                        <a class="primary-btn" href="{{route('room.add')}}">I want a Roommate</a>
							<a class="primary-btn" href="{{route('person.add')}}">I want a Room</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->


<!-- Start post Area -->
<section class="post-area section-gap" id='rooms'>
	<div class="container">
		<div class="row justify-content-center d-flex">
			<div class="col-lg-12 post-list">	
				<div class="single-post d-flex flex-row">
					<div class="thumb">
						<img src="{{asset('img/1.jpeg')}}" style='margin:10px; max-width:90%;' alt="">
					<ul class="tags">
							<li>
								<a href="#">AC</a>
							</li>
							<li>
								<a href="#">Smoking</a>
							</li>
							<li>
								<a href="#">Elevator</a>
							</li>
						</ul>
					</div>
					<div class="details" style='margin-top: 10px;'>
						<div class="title d-flex flex-row justify-content-between">
							<div class="titles">
								<a href="single.html"><h4>Aswan </h4></a>
								<h4><span class="lnr lnr-map mr-1"></span>AboElressh-faculty of engineering</h4	>
							</div>
								
							<ul class="btns" style="margin-left: 50px;">
								<li class="mb-2"><a href="#"><span class="lnr lnr-heart"></span></a></li>
								<li><a href="#">Apply</a></li>
							</ul>
						
						</div>
						<p class="address"><span class="fa fa-dollar"></span>200</p>
						<h5>Age : 28</h5>
						<h5>Cupboards : 2</h5>
						<h5>Beds : 4</h5>
						<p class="address"><span class="fa fa-user"></span> male</p>
						
					</div>
				</div>
				<div class="single-post d-flex flex-row">
					<div class="thumb">
					<img src="{{asset('img/2.jpeg')}}" style='margin:10px; max-width:90%;' alt="">
					<ul class="tags">
							<li>
								<a href="#">AC</a>
							</li>
							<li>
								<a href="#">Smoking</a>
							</li>
							<li>
								<a href="#">Elevator</a>
							</li>
						</ul>
					</div>
					<div class="details" style='margin-top: 10px;'>
						<div class="title d-flex flex-row justify-content-between">
							<div class="titles">
								<a href="single.html"><h4>Aswan </h4></a>
								<h4><span class="lnr lnr-map mr-1"></span>AboElressh-faculty of engineering</h4	>
							</div>
								
							<ul class="btns" style="margin-left: 50px;">
								<li class="mb-2"><a href="#"><span class="lnr lnr-heart"></span></a></li>
								<li><a href="#">Apply</a></li>
							</ul>
						
						</div>
						<p class="address"><span class="fa fa-dollar"></span>200</p>
						<h5>Age : 23</h5>
						<h5>Cupboards : 4</h5>
						<h5>Beds : 6</h5>
						<p class="address"><span class="fa fa-user"></span> male</p>
						
					</div>
				</div>
				<div class="single-post d-flex flex-row">
					<div class="thumb">
						<img src="{{asset('img/3.jpeg')}}" style='margin:10px; max-width:90%;' alt="">
					<ul class="tags">
							<li>
								<a href="#">AC</a>
							</li>
							<li>
								<a href="#">Smoking</a>
							</li>
							<li>
								<a href="#">Elevator</a>
							</li>
						</ul>
					</div>
					<div class="details" style='margin-top: 10px;'>
						<div class="title d-flex flex-row justify-content-between">
							<div class="titles">
								<a href="single.html"><h4>Aswan </h4></a>
								<h4><span class="lnr lnr-map mr-1"></span>AboElressh-faculty of engineering</h4	>
							</div>
								
							<ul class="btns" style="margin-left: 50px;">
								<li class="mb-2"><a href="#"><span class="lnr lnr-heart"></span></a></li>
								<li><a href="#">Apply</a></li>
							</ul>
						
						</div>
						<p class="address"><span class="fa fa-dollar"></span>200</p>
						<h5>Age : 22</h5>
						<h5>Cupboards : 2</h5>
						<h5>Beds : 4</h5>
						<p class="address"><span class="fa fa-user"></span> male</p>
						
					</div>
				</div>
				<div class="single-post d-flex flex-row">
					<div class="thumb">
						<img src="{{asset('img/1.jpeg')}}" style='margin:10px; max-width:90%;' alt="">
					<ul class="tags">
							<li>
								<a href="#">AC</a>
							</li>
							<li>
								<a href="#">Smoking</a>
							</li>
							<li>
								<a href="#">Elevator</a>
							</li>
						</ul>
					</div>
					<div class="details" style='margin-top: 10px;'>
						<div class="title d-flex flex-row justify-content-between">
							<div class="titles">
								<a href="single.html"><h4>Aswan </h4></a>
								<h4><span class="lnr lnr-map mr-1"></span>AboElressh-faculty of engineering</h4	>
							</div>
								
							<ul class="btns" style="margin-left: 50px;">
								<li class="mb-2"><a href="#"><span class="lnr lnr-heart"></span></a></li>
								<li><a href="#">Apply</a></li>
							</ul>
						
						</div>
						<p class="address"><span class="fa fa-dollar"></span>200</p>
						<h5>Age : 27</h5>
						<h5>Cupboards : 6</h5>
						<h5>Beds : 10</h5>
						<p class="address"><span class="fa fa-user"></span> male</p>
						
					</div>
				</div>
				<div class="single-post d-flex flex-row">
					<div class="thumb">
						<img src="{{asset('img/2.jpeg')}}" style='margin:10px; max-width:90%;' alt="">
					<ul class="tags">
							<li>
								<a href="#">AC</a>
							</li>
							<li>
								<a href="#">Smoking</a>
							</li>
							<li>
								<a href="#">Elevator</a>
							</li>
						</ul>
					</div>
					<div class="details" style='margin-top: 10px;'>
						<div class="title d-flex flex-row justify-content-between">
							<div class="titles">
								<a href="single.html"><h4>Aswan </h4></a>
								<h4><span class="lnr lnr-map mr-1"></span>AboElressh-faculty of engineering</h4	>
							</div>
								
							<ul class="btns" style="margin-left: 50px;">
								<li class="mb-2"><a href="#"><span class="lnr lnr-heart"></span></a></li>
								<li><a href="#">Apply</a></li>
							</ul>
						
						</div>
						<p class="address"><span class="fa fa-dollar"></span>200</p>
						<h5>Age : 20</h5>
						<h5>Cupboards : 1</h5>
						<h5>Beds : 6</h5>
						<p class="address"><span class="fa fa-user"></span> male</p>
						
					</div>
				</div>
				<div class="single-post d-flex flex-row">
					<div class="thumb">
						<img src="{{asset('img/3.jpeg')}}" style='margin:10px; max-width:90%;' alt="">
					<ul class="tags">
							<li>
								<a href="#">AC</a>
							</li>
							<li>
								<a href="#">Smoking</a>
							</li>
							<li>
								<a href="#">Elevator</a>
							</li>
						</ul>
					</div>
					<div class="details" style='margin-top: 10px;'>
						<div class="title d-flex flex-row justify-content-between">
							<div class="titles">
								<a href="single.html"><h4>Aswan </h4></a>
								<h4><span class="lnr lnr-map mr-1"></span>AboElressh-faculty of engineering</h4	>
							</div>
								
							<ul class="btns" style="margin-left: 50px;">
								<li class="mb-2"><a href="#"><span class="lnr lnr-heart"></span></a></li>
								<li><a href="#">Apply</a></li>
							</ul>
						
						</div>
						<p class="address"><span class="fa fa-dollar"></span>200</p>
						<h5>Age : 25</h5>
						<h5>Cupboards : 6</h5>
						<h5>Beds : 3</h5>
						<p class="address"><span class="fa fa-user"></span> male</p>
						
					</div>
				</div>
				<div class="single-post d-flex flex-row">
					<div class="thumb">
						<img src="{{asset('img/1.jpeg')}}" style='margin:10px; max-width:90%;' alt="">
					<ul class="tags">
							<li>
								<a href="#">AC</a>
							</li>
							<li>
								<a href="#">Smoking</a>
							</li>
							<li>
								<a href="#">Elevator</a>
							</li>
						</ul>
					</div>
					<div class="details" style='margin-top: 10px;'>
						<div class="title d-flex flex-row justify-content-between">
							<div class="titles">
								<a href="single.html"><h4>Aswan </h4></a>
								<h4><span class="lnr lnr-map mr-1"></span>AboElressh-faculty of engineering</h4	>
							</div>
								
							<ul class="btns" style="margin-left: 50px;">
								<li class="mb-2"><a href="#"><span class="lnr lnr-heart"></span></a></li>
								<li><a href="#">Apply</a></li>
							</ul>
						
						</div>
						<p class="address"><span class="fa fa-dollar"></span>200</p>
						<h5>Age : 22</h5>
						<h5>Cupboards : 2</h5>
						<h5>Beds : 4</h5>
						<p class="address"><span class="fa fa-user"></span> male</p>
						
					</div>
				</div>

				<a class="text-uppercase loadmore-btn mx-auto d-block" href="category.html">Load More</a>
			</div>
		</div>
	</div>
</section>
<!-- End post Area -->
@endsection

@section('scripts')

@endsection
