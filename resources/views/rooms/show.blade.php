@extends('layouts.master')

@section('content')
<!-- Start post Area -->
<!-- Start post Area -->
<section class="post-area section-gap">
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
                    </div>
                    <div class="details" style='margin-top: 10px;'>
						<div class="title d-flex flex-row justify-content-between">
							<div class="titles">
								<a href="single.html"><h4>Aswan </h4></a>
								<h4><span class="lnr lnr-map mr-1"></span>AboElressh-faculty of engineering</h4	>
							</div>

							<ul class="btns btns danger" style="margin-left: 50px;">
								<li class="mb-2"><a href="#"><span class="lnr lnr-heart"></span></a></li>
								<li><a href="#">Apply</a></li>
							</ul>

						</div>
						<p class="address"><span class="fa fa-dollar"></span>rent 200</p>
						<h5>Age : 28 ~ 25</h5>
						<h5>Cupboards : 2</h5>
						<h5>Beds : 4</h5>
						<p class="address"><span class="fa fa-user"></span>: male</p>
                        <ul class="tags">
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

@endsection
