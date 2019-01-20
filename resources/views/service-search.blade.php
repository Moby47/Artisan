<!DOCTYPE html>
<html lang="en">
<head>
<title>Artisan - Services</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Find Services, jobs around you with a simple intuative search pattern to redefine the 
										way you get connected." />

@include('includes.css')


</head>
<body>
<!-- banner -->
<div class="world-banner">
	<div class="center-container">
		<div class="banner wthree">
			<div class="container">

				<!--nav-->
				@include('includes.nav')

				<!--Slider-->	
				<div class="col-md-7 callbacks_container">
					<br><br>
					<ul class="list-group" id="">
                    @if(count($result)>0)

@foreach($result as $res)
<li class="list-group-item">
	<a href='/profile-info/{{$res->user_id}}'><p>
	Job Title: {{$res->title}} <br>
	Location: {{$res->state}}. {{$res->town}}. {{$res->address}} ...<span class='text-info badge badge'>View Profile</span> </p></a>
	</li>
@endforeach

{{$result->links()}}
					@else
					<div class='text-center alert alert-info'>
		No Result(s) Found, Change search keywords
	</div>

					@endif
					</ul>
				
				
				</div>
				<!-- //Slider -->

										
				<!-- form -->
				<div class="col-md-5 callbacks_container form-w3l-agil3">
					<div class="book-form">
					<p>Filter Category</p>
					   <form action="{{route('filter')}}" method="get">
						
							<div class="form-left-agileits-w3layouts ">
									<label><i class="fa fa-map" aria-hidden="true"></i>Select State :</label>

									<select class="form-control" name='State' id='state'>
									<option value="Abuja FCT">Abuja FCT</option>
              <option value="Abia">Abia</option>
              <option value="Adamawa">Adamawa</option>
              <option value="Akwa Ibom">Akwa Ibom</option>
              <option value="Anambra">Anambra</option>
              <option value="Bauchi">Bauchi</option>
              <option value="Bayelsa">Bayelsa</option>
              <option value="Benue">Benue</option>
              <option value="Borno">Borno</option>
              <option value="Cross River">Cross River</option>
              <option value="Delta">Delta</option>
              <option value="Ebonyi">Ebonyi</option>
              <option value="Edo">Edo</option>
              <option value="Ekiti">Ekiti</option>
              <option value="Enugu">Enugu</option>
              <option value="Gombe">Gombe</option>
              <option value="Imo">Imo</option>
              <option value="Jigawa">Jigawa</option>
              <option value="Kaduna">Kaduna</option>
              <option value="Kano">Kano</option>
              <option value="Katsina">Katsina</option>
              <option value="Kebbi">Kebbi</option>
              <option value="Kogi">Kogi</option>
              <option value="Kwara">Kwara</option>
              <option value="Lagos">Lagos</option>
              <option value="Nassarawa">Nassarawa</option>
              <option value="Niger">Niger</option>
              <option value="Ogun">Ogun</option>
              <option value="Ondo">Ondo</option>
              <option value="Osun">Osun</option>
              <option value="Oyo">Oyo</option>
              <option value="Plateau">Plateau</option>
              <option value="Rivers">Rivers</option>
              <option value="Sokoto">Sokoto</option>
              <option value="Taraba">Taraba</option>
              <option value="Yobe">Yobe</option>
              <option value="Zamfara">Zamfara</option>
									</select>
							</div>

										<div class="form-time-w3layouts">
										<label><i class="fa fa-map-marker" aria-hidden="true"></i> Town :</label>
												<input type='text' name='Location' value='' class='local' placeholder='eg Ikeja'/>
												</div>


												<input type='hidden' name='service'  class='service' value='{{$ser}}'/>
														{{csrf_field()}}
						<div class="form-left-agileits-submit">
								  <input type="submit" value="Find" class=''> 
							</div>

						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
				<!-- //form -->
			</div>
		</div>
	
	</div>
</div>

<!-- //banner -->

<!-- services -->
<div class="services" id="services">
		<div class="container">
			<div class="agile-heading">
            <h3 class="w3l-title">Services</h3>
		</div>
		<div class="wthree-services-grids">
			<div class="col-sm-3 wthree-services">
				<div class="wthree-services-grid">
					<div class="wthree-services-info">
						<i class="fa fa-laptop" aria-hidden="true"></i>
						<h4>TECH</h4>
						<div class="w3ls-border"> </div>
					</div>
					<div class="wthree-services-captn">
						<h4>TECH</h4>
						<a href='/services/tech'>
								<p>Get services on latest tech news on apps, gadgets, tech trends, 
									ICT News in Nigeria, Africa, & around the World. </p>
							</a>
					</div>
				</div>
				</div>
			<div class="col-sm-3 wthree-services">
				<div class="wthree-services-grid">
					<div class="wthree-services-info">
						<i class="fa fa-star" aria-hidden="true"></i>
						<h4>FASHION & BEAUTY</h4>
						<div class="w3ls-border"> </div>
					</div>
					<div class="wthree-services-captn">
						<h4>FASHION & BEAUTY</h4>
						<a href='/services/fashion'>
								<p>Fashion is a popular style, especially in clothing, footwear, lifestyle,
									 accessories, makeup, hairstyle and body.</p>
							</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3 wthree-services">
				<div class="wthree-services-grid">
					<div class="wthree-services-info">
						<i class="fa fa-bicycle" aria-hidden="true"></i>
						<h4>HOBBIES & CRAFTS</h4>
						<div class="w3ls-border"> </div>
					</div>
					<div class="wthree-services-captn">
						<h4>HOBBIES & CRAFTS</h4>
						<a href='/services/hobbies'>
								<p>hobby is a regular activity that is done for enjoyment, typically during one's 
									leisure time. Hobbies can include collecting themed items and objects etc</p>
							</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3 wthree-services">
				<div class="wthree-services-grid">
					<div class="wthree-services-info">
						<i class="fa fa-paw" aria-hidden="true"></i>
							<h4>PETS</h4>
						<div class="w3ls-border"> </div>
					</div>
					<div class="wthree-services-captn">
						<h4>PETS</h4>
	<a href='/services/pets'>
	<p>Services on  pets or companion animal</p>
</a>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="wthree-services-grids services-grids1">

		

			<div class="col-sm-3 wthree-services">
				<div class="wthree-services-grid">
					<div class="wthree-services-info">
						<i class="fa fa-cutlery" aria-hidden="true"></i>
						<h4>FOOD & DRINKS</h4>
						<div class="w3ls-border"> </div>
					</div>
					<div class="wthree-services-captn">
						<h4>FOOD & DRINKS</h4>
						<a href='/services/food'>
								<p>Get delicious ideas for food and drink from the editors of Esquire
									and services alike.</p>
							</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3 wthree-services">
				<div class="wthree-services-grid">
					<div class="wthree-services-info">
						<i class="fa fa-image" aria-hidden="true"></i>
						<h4>PHOTOGRAPHY</h4>
						<div class="w3ls-border"> </div>
					</div>
					<div class="wthree-services-captn">
						<h4>PHOTOGRAPHY</h4>
						<a href='/services/photo'>
								<p> the science, art, application and practice of creating
									 durable images by recording light or other electromagnetic radiation</p>
							</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3 wthree-services">
				<div class="wthree-services-grid">
					<div class="wthree-services-info">
						<i class="fa fa-book" aria-hidden="true"></i>
						<h4>LEARNING</h4>
						<div class="w3ls-border"> </div>
					</div>
					<div class="wthree-services-captn">
						<h4>LEARNING</h4>
						<a href='/services/learning'>
								<p>Education services can be rendered here..</p>
							</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3 wthree-services">
				<div class="wthree-services-grid">
					<div class="wthree-services-info">
						<i class="fa fa-paint-brush" aria-hidden="true"></i>
						<h4>OTHERS</h4>
						<div class="w3ls-border"> </div>
					</div>
					<div class="wthree-services-captn">
						<h4>OTHERS</h4>
						<a href='/services/others'>
								<p>Here are uncategorised services that could be for you</p>
							</a>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->

<!-- footer -->
<div class="footer" id="contact">
	<div class="container">
		<div class="agile-footer-grids">
			<div class="col-md-3 col-sm-6 col-xs-6 w3-agile-footer-grid">
				<div class="logo-2">
					<h2><a href="index.html">Duty<span>Post</span></a></h2>
				</div>
				<ul>
					<li>Email</li>
					<li><a href="mailto:clutchajob@yahoo.com">clutchajob@yahoo.com</a></li>
					<li>Phone Number</li>
					<li><a href='tel:08063848564'>+2348063848564</a></li>
				</ul>				
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6 w3-agile-footer-grid">
				<h3>Social Links</h3>
				<div class="col-md-5 col-sm-5 col-xs-5 agile-opening">
					<ul>
						<li><a href='#' target='_balnk'>Facebook</a></li>
						<li><a href='#' target='_balnk'>Twitter</a> </li>
						<li><a href='#' target='_balnk'>Instagram </a></li>
					</ul>
				</div>
			
				<div class="clearfix"> </div>
			</div>
			<!--<div class="col-md-6 w3-agile-footer-grid grid-w3-1">
				<div class="contact-block-left">
					<form action="#" method="post">
						<input type="text" placeholder="Name" name="Name" required="">
						<input type="email" class="email" placeholder="Email" name="Email" required="">             
						<textarea placeholder="Message" name="message" required=""></textarea>
						<input type="submit" value="Send">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>-->
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- copyright © 2017 Glorious . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> -->
	<div class="copyright">
	@include('includes.footer')
	</div>
	<!-- //copyright -->
</div>
<!-- //footer -->

<!-- js-scripts -->		
		
@include('includes.js')

<!-- //js-scripts -->
</body>
</html>