@extends('layouts.master')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Find The Good Roomies
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
                        <h2 class="title">Tell Them How Awesome Your Room is ?</h2>
						<form class="form-area " action='{{route('home')}}#rooms' class="contact-form text-right" style="margin-top: 20px;">

                            <div class="row">
								<div class="col-lg-12 form-group">
                                   <div class='row'>
                                        <div class='col-md-3'>
                                            <label for='bed'>
                                                <i class='fa fa-bed'></i> Beds?
                                            </label>
                                            <select name="" id='' class="selectpicker show-menu-arrow form-control">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                        </div>
                                        <div class='col-md-3'>
                                                <label for='bed'>
                                                    <i class='fas fa-cabinet-filling'></i>Cupboards?
                                                </label>
                                                <select name="cupboard" id='cupboard' class="selectpicker show-menu-arrow form-control">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                        </div>
                                        <div class='col-md-3'>
                                                <label for='bed'>
                                                    <i class='fas fa-office'></i>Desks?
                                                </label>
                                                <select name="desk" id='desk' class="selectpicker show-menu-arrow form-control">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                        </div>
                                        <div class='col-md-3'>
                                                <label for='bed'>
                                                    <i class='fas fa-office'></i>Rent?
                                                </label>
                                                <select name="rent" id='rent' class="selectpicker show-menu-arrow form-control">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class="col-md-6 form-group">
                                            <div class="form-group col-md-6">
                                                <label for='city'>City</label>
                                                <select name="city" id='city' class="selectpicker show-menu-arrow form-control">
                                                    <option value="Aswan">Aswan</option>
                                                    <option value="Luxor">Luxor</option>
                                                    <option value="Qena">Qena</option>
                                                    <option value="Sohag">Sohag</option>
                                                    <option value="Assiut">Assiut</option>
                                                    <option value="Minya">Minya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                                <div class="form-group col-md-6">
                                                    <label for='city'>age</label>
                                                    <select name="city" id='city' class="selectpicker show-menu-arrow form-control">
                                                        <option value="Aswan">19</option>
                                                        <option value="Luxor">20</option>
                                                        <option value="Qena">21</option>
                                                        <option value="Sohag">22</option>
                                                        <option value="Assiut">23</option>
                                                        <option value="Minya">24</option>
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col-md-6'>
                                            <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" name='image' class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='row'>
                                        <div class='col-md-12'>
                                            <span class="button-checkbox">
                                                <button type="button" class="btn" style='margin:10px;' data-color="info">AC</button>
                                                <input type="checkbox" name="smoke" class="hidden"  style="display: none;">
                                            </span>
                                            <span class="button-checkbox" style='margin:10px;'>
                                                    <button type="button" class="btn" data-color="info">Smoking</button>
                                                    <input type="checkbox" name="smoke" class="hidden"  style="display: none;">
                                            </span>
                                            <span class="button-checkbox" style='margin:10px;'>
                                                    <button type="button" class="btn" data-color="info">Balcony</button>
                                                    <input type="checkbox" name="smoke" class="hidden"  style="display: none;">
                                            </span>
                                        </div>
                                    </div>


                                        <span class="button-checkbox">
                                            <button type="button" class="btn" style='margin:10px;' data-color="info">Loud Voice</button>
                                            <input type="checkbox" name="voice" class="hidden"  style="display: none;">
                                        </span>
                                        <span class="button-checkbox">
                                            <button type="button" style='margin:10px;' class="btn" data-color="info">Student </button>
                                            <input type="checkbox" name="student" class="hidden" style="display: none;">
                                        </span>
                                    <br>
                                    <br>
                                         <button type="submit" class="primary-btn mt-20 text-white pull-right">Submit</button>
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

@endsection
