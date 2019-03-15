<?php 
/*
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
						<h2 class="title">Tell Us More About You</h2>
						<form class="form-area" id="person.create" action='{{route('home')}}/#rooms' class="contact-form text-right" style="margin-top: 20px;">
							@csrf
							<div class="row">
								<div class="form-group col-md-4">
									<label>City</label>
									<select name="city" class="selectpicker show-menu-arrow form-control">
										<option value="Aswan">Aswan</option>
										<option value="Luxor">Luxor</option>
										<option value="Qena">Qena</option>
										<option value="Sohag">Sohag</option>
										<option value="Assiut">Assiut</option>
										<option value="Minya">Minya</option>
									</select>
								</div>
								<div class="form-group col-md-4">
									<label>Age</label>
									<input class="form-control" type="number" value="0" min="0" name="age">
								</div>
							</div>
							<div class='row'>
									 <span for='smoke'>
									 	Gender	
									 </span>
									 <Br>	
									<span style="padding:10px;" class="button-checkbox">
									        <button type="button" class="btn" data-color="success">Male</button>
									        <input type="radio" name="smoke" id="smoke" class="hidden" style="display: none;">
									    </span>
									    <span style="padding:10px;" class="button-checkbox">
									        <button type="button" class="btn" data-color="success">Female</button>
									        <input type="radio" name="smoke" id="smoke" class="hidden"  style="display: none;">
									    </span>
							</div>
							<div class="row">
								<span for='smoke'>
									 	Interests		
									 </span>
									 <Br>
										<span style="padding:10px;" class="button-checkbox">
									        <button type="button" class="btn" data-color="success">Smoking</button>
									        <input type="checkbox" name="smoke" class="hidden" style="display: none;">
									    </span>
									    <span style="padding:10px;" class="button-checkbox">
									        <button type="button" class="btn" data-color="success">Loud Voice</button>
									        <input type="checkbox" name="voice" class="hidden"  style="display: none;">
									    </span>
									    <span style="padding:10px;" class="button-checkbox">
									        <button type="button" class="btn" data-color="success">Air  Conditioner</button>
									        <input type="checkbox" name="ac" class="hidden"  style="display: none;">
									    </span>
									    <span style="padding:10px;" class="button-checkbox">
									        <button type="button" class="btn" data-color="success">Student </button>
									        <input type="checkbox" name="student" class="hidden" style="display: none;">
									    </span>
								 	</div>
								 	<Br>	
									<div class="row">
										<button type="submit" class="btn btn-success pull-left">Submit</button>
										</div>
								<div class="mt-20 alert-msg" style="text-align: left;"></div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End post Area -->
@endsection

@section('scripts')
<script type="text/javascript">
$(function () {
    $('.button-checkbox').each(function () {
        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };
        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });
        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');
            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");
            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);
            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }
        // Initialization
        function init() {
            updateDisplay();
            // Inject the icon if applicable
            if ($button.find('.state-icon').length === 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});

var new_checkbox_button = function(name,id){
            return "<li><span class='button-checkbox'><button type='button' class='btn btn-sm btn-primary active' data-color='primary'><i class='state-icon glyphicon glyphicon-check'></i>&nbsp;"+name+"</button><input type='checkbox' class='hidden' checked=''></span></li>";
        };

$("#add").click(function(){
       $("#selected_targets").append(new_checkbox_button("lallalala","1111"));
});
</script>

@endsection		
*/
?>
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
<section class="post-area">
    <div class="page-wrapper p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body custom-card">
                    <h2 class="title">Tell Us About Yourself</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-8 mt-3">
                                <div class="input-group">
                                    <label class="label">Rent ?</label>
                                    <span style="margin: 10px;"></span>
                                    <input class="input--style-4" type="number" name="age" style="width: 80px;">
                                    <span style="margin: 10px;">To:</span> 
                                    <input class="input--style-4" type="number" name="age" style="width: 80px;">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">Age ?</label>
                                    <input class="input--style-4" type="number" name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">City ?</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="subject">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Aswan</option>
                                            <option>Luxor</option>
                                            <option>Qena</option>
                                            <option>Sohag</option>
                                            <option>Assiut</option>
                                            <option>Minya</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>                                
                            </div>
                        </div>                        
                   
                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Faculty ?</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="subject">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Engineering</option>
                                            <option>Commerce</option>
                                            <option>Law</option>
                                            <option>Arts</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>                              
                            </div>
                            <div class="col-6">
		                        <div class="input-group">
	                            <label class="label">Phone Number ?</label>
	                            <input class="input--style-4" type="text" name="cellphone">
	                        	</div>  
                            </div>
                        </div>

						<div class="row">
                            <label class="label">Interests</label>
                            <span style="margin: 10px;"></span>
							<span style="padding:10px;" class="button-checkbox">
						        <button type="button" class="btn" data-color="info">Smoking</button>
						        <input type="checkbox" name="smoke" class="hidden" style="display: none;">
						    </span>	
						    <span style="padding:10px;" class="button-checkbox">
						        <button type="button" class="btn" data-color="info">Loud Voice</button>
						        <input type="checkbox" name="voice" class="hidden"  style="display: none;">
						    </span>
						    <span style="padding:10px;" class="button-checkbox">
						        <button type="button" class="btn" data-color="info">Air  Conditioner</button>
						        <input type="checkbox" name="ac" class="hidden"  style="display: none;">
						    </span>
						    <span style="padding:10px;" class="button-checkbox">
						        <button type="button" class="btn" data-color="info">Student </button>
						        <input type="checkbox" name="student" class="hidden" style="display: none;">
						    </span>
					 	</div>
                                                                          
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue my-button mt-5" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End post Area -->

@endsection


@section('scripts')
<script type="text/javascript">
$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);
            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }
        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length === 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});





var new_checkbox_button = function(name,id){
            return "<li><span class='button-checkbox'><button type='button' class='btn btn-sm btn-primary active' data-color='primary'><i class='state-icon glyphicon glyphicon-check'></i>&nbsp;"+name+"</button><input type='checkbox' class='hidden' checked=''></span></li>";
        };

$("#add").click(function(){
       $("#selected_targets").append(new_checkbox_button("lallalala","1111"));
});
$( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      //values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] ); //+ " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) );// +
     // " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );
</script>


<script type="text/javascript">
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$('#addRoom').submit(function(e){
    e.preventDefault();
	var data = new FormData(this);
    $.ajax({
        type: 'POST',
        url: "{{route('rooms.store')}}",
        data: data,
	    dataType:'JSON',
	    contentType: false,
	    cache: false,
	    processData: false,
        success: function(data,status) {
        	console.log("request sent");
            if ((data.errors)) {
            	toastr.error("Check Your Inputs Please", 'Validation' , {timeOut: 3000});
            } 
            else 
            {
                toastr.success('Room added Successfully!', 'Done', {timeOut: 3000});
            }
        },
    });
});
</script>
@endsection
		