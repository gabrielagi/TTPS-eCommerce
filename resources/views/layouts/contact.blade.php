@extends('layouts.app')

@include('components.nav')

@section('content')

 <!-- Content -->
 <div id="content"> 
    
        <!--======= CONATACT  =========-->
        <section class="contact padding-top-100 padding-bottom-100">
          <div class="container">
            <div class="contact-form">
              <h5>PLEASE fill-up FEW details</h5>
              <div class="row">
                <div class="col-md-8"> 
                  
                  <!--======= Success Msg =========-->
                  <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>
                  
                  <!--======= FORM  =========-->
                  <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
                    <ul class="row">
                      <li class="col-sm-6">
                        <label>full name *
                          <input type="text" class="form-control" name="name" id="name" placeholder="">
                        </label>
                      </li>
                      <li class="col-sm-6">
                        <label>Email *
                          <input type="text" class="form-control" name="email" id="email" placeholder="">
                        </label>
                      </li>
                      <li class="col-sm-6">
                        <label>Phone *
                          <input type="text" class="form-control" name="company" id="company" placeholder="">
                        </label>
                      </li>
                      <li class="col-sm-6">
                        <label>SUBJECT
                          <input type="text" class="form-control" name="website" id="website" placeholder="">
                        </label>
                      </li>
                      <li class="col-sm-12">
                        <label>Message
                          <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
                        </label>
                      </li>
                      <li class="col-sm-12">
                        <button type="submit" value="submit" class="btn" id="btn_submit" onClick="proceed();">SEND MAIL</button>
                      </li>
                    </ul>
                  </form>
                </div>
                
                <!--======= ADDRESS INFO  =========-->
                <div class="col-md-4">
                  <div class="contact-info">
                    <h6>OUR ADDRESS</h6>
                    <ul>
                      <li> <i class="icon-map-pin"></i> Street No. 12, Newyork 12,<br>
                        MD - 123, USA.</li>
                      <li> <i class="icon-call-end"></i> 1.800.123.456789</li>
                      <li> <i class="icon-envelope"></i> <a href="mailto:someone@example.com" target="_top">info@ecoshop.com</a> </li>
                      <li>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam erat turpis, pellentesque non leo eget.</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <!--======= MAP =========-->
        <div id="map"></div>
        
  </div>
  <!-- Begin Map Script --> 
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script> 
<script type="text/javascript">
/*==========  Map  ==========*/
var map;
function initialize_map() {
if ($('#map').length) {
	var myLatLng = new google.maps.LatLng(-37.814199, 144.961560);
	var mapOptions = {
		zoom: 17,
		center: myLatLng,
		scrollwheel: false,
		panControl: false,
		zoomControl: true,
		scaleControl: false,
		mapTypeControl: false,
		streetViewControl: false
	};
	map = new google.maps.Map(document.getElementById('map'), mapOptions);
	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		tittle: 'Envato',
		icon: './images/map-locator.png'
	});
} else {
	return false;
}}
google.maps.event.addDomListener(window, 'load', initialize_map);
</script>
  @include('components.footer')
  @endsection    