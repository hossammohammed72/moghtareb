@extends('layouts.master')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home" style="height: 100vh;">
	<div class="overlay overlay-bg" style="opacity: 0.55;"></div>
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-center">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content col-lg-9" style="position: relative;top: 50%;left: 50%;transform: translate(-64%,20%);">
						<div class="title text-center">
							<h1 class="mb-10 text-white our-h" style="font-weight: bold;">Let us find you a partner</h1>
							<p class="text-white mb-3" style="font-size: 15px;">Roommmates are our buddies and friends, So let's just pickthem right</p>
                        <a class="primary-btn" style="text-transform: unset;" href="{{route('rooms.create')}}">I Have A Room</a>
							<a class="primary-btn" style="text-transform: unset;" href="{{route('users.create')}}">I Want A Room</a>
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
                <ul class="cat-list">
                    <li><a href="#">All</a></li>
                    <li><a href="#">Smoking</a></li>
                    <li><a href="#">AC</a></li>
                    <li><a href="#">Noisey</a></li>
                </ul>
                <div class="single-post d-flex flex-row">
                    <div class="thumb">
                        <img src="{{asset('img/1.jpeg')}}" alt="">
                        <ul class="tags">
                            <span style="font-weight: bold;">Assets :</span>
                            <li>
                                <a href="#">Balacony</a>
                            </li>
                            <li>
                                <a href="#">AC</a>
                            </li>
                            <li>
                                <a href="#">Alevator</a>
                            </li>
                            <li>
                                <a href="#">Microwave</a>
                            </li>
                            <li>
                                <a href="#">Automatic Washer</a>
                            </li>                                                        
                        </ul>                               
                    </div>
                    <div class="details" style='margin-top: 10px;'>
                        <div class="title d-flex flex-row justify-content-between">
                            <div class="titles">
                                <a href="single.html"><h4>Aswan </h4></a>
                                <h4><span class="lnr lnr-map mr-1"></span>AboElressh-faculty of engineering</h4 >
                            </div>

                            <ul class="btns btns danger" style="margin-left: 2px;">
                                <li class="mb-2"><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                <li><a href="javascript:void(0)" class="apply">Apply</a></li>
                            </ul>

                        </div>
                        <p class="address"><span class="fa fa-dollar"></span>rent 200 - <span style="color: #f00; font-size: 12px; font-weight: bold;" class="after"> 175$ For First Moth</span></p>
                        <h5>Age : 28 ~ 25</h5>
                        <h5>Cupboards : 2</h5>
                        <h5>Beds : 0 Of 4</h5>
                        <p class="address"><span class="fa fa-user"></span>: male</p>
                            <ul class="tags">
                                <span style="font-weight: bold;">Interests   :</span>
                                <span style="color: #f00; font-size: 12px; font-weight: bold;">Be The First And Put Your Own Preferences </span>
                            </ul>
                    </div>
                </div>  
                <div class="single-post d-flex flex-row">
                    <div class="thumb">
                        <img src="{{asset('img/1.jpeg')}}" alt="">
                        <ul class="tags">
                            <span style="font-weight: bold;">Assets :</span>
                            <li>
                                <a href="#">Balacony</a>
                            </li>
                            <li>
                                <a href="#">AC</a>
                            </li>
                            <li>
                                <a href="#">Alevator</a>
                            </li>
                            <li>
                                <a href="#">Microwave</a>
                            </li>
                            <li>
                                <a href="#">Automatic Washer</a>
                            </li>                                                        
                        </ul>                               
                    </div>
                    <div class="details" style='margin-top: 10px;'>
                        <div class="title d-flex flex-row justify-content-between">
                            <div class="titles">
                                <a href="single.html"><h4>Aswan </h4></a>
                                <h4><span class="lnr lnr-map mr-1"></span>AboElressh-faculty of engineering</h4 >
                            </div>

                            <ul class="btns btns danger" style="margin-left: 2px;">
                                <li class="mb-2"><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                <li><a href="javascript:void(0)" class="apply">Apply</a></li>
                            </ul>

                        </div>
                        <p class="address"><span class="fa fa-dollar"></span>rent 200 - <span style="color: #f00; font-size: 12px; font-weight: bold;"> 175$ For First One</span></p>
                        <h5>Age : 28 ~ 25</h5>
                        <h5>Cupboards : 2</h5>
                        <h5>Beds : 1 Of 6</h5>
                        <p class="address"><span class="fa fa-user"></span>: male</p>
                            <ul class="tags">
                                <span style="font-weight: bold;">Interests :</span>
                                <li>
                                    <a href="#">Smoking</a>
                                </li>
                                <li>
                                    <a href="#">AC</a>
                                </li>
                                <li>
                                    <a href="#">Noisey</a>
                                </li>
                            </ul>
                    </div>
                </div>  
                <div class="single-post d-flex flex-row">
                    <div class="thumb">
                        <img src="{{asset('img/1.jpeg')}}" alt="">
                        <ul class="tags">
                            <span style="font-weight: bold;">Assets :</span>
                            <li>
                                <a href="#">Balacony</a>
                            </li>
                            <li>
                                <a href="#">AC</a>
                            </li>
                            <li>
                                <a href="#">Alevator</a>
                            </li>
                            <li>
                                <a href="#">Microwave</a>
                            </li>
                            <li>
                                <a href="#">Automatic Washer</a>
                            </li>                                                        
                        </ul>                               
                    </div>
                    <div class="details" style='margin-top: 10px;'>
                        <div class="title d-flex flex-row justify-content-between">
                            <div class="titles">
                                <a href="single.html"><h4>Aswan </h4></a>
                                <h4><span class="lnr lnr-map mr-1"></span>AboElressh-faculty of engineering</h4 >
                            </div>

                            <ul class="btns btns danger" style="margin-left: 2px;">
                                <li class="mb-2"><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                <li><a href="javascript:void(0)" class="apply">Apply</a></li>
                            </ul>
                        </div>
                        <p class="address"><span class="fa fa-dollar"></span>rent 200 - <span style="color: #f00; font-size: 12px; font-weight: bold;"> 175$ For First Month</span></p>
                        <h5>Age : 28 ~ 25</h5>
                        <h5>Cupboards : 2</h5>
                        <h5>Beds : 4 Of 6</h5>
                        <p class="address"><span class="fa fa-user"></span>: male</p>
                            <ul class="tags">
                                <span style="font-weight: bold;">Interests :</span>
                                <li>
                                    <a href="#">Smoking</a>
                                </li>
                                <li>
                                    <a href="#">AC</a>
                                </li>
                                <li>
                                    <a href="#">Noisey</a>
                                </li>
                            </ul>
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
<script type="text/javascript">
$(document).on('click', '.apply', function () {
    toastr.success('Room Requested Successfully!', 'Done', {timeOut: 3000});
    $(this).html('Requested');
    $(this).prop('disabled', true)
});
</script>
@endsection
