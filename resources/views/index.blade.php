
<!DOCTYPE html>
<html lang="en">
<head>
<title>Artisan - Home page</title>
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
					<span class='load white'></span><span class='loadtxt white'></span>
				<span class='content'></span>
				<span class='co'></span>		

						
					</ul>
			
				
				</div>
				<!-- //Slider -->

										
				<!-- form -->
				<div class="col-md-5 callbacks_container form-w3l-agil3">
					<div class="book-form">
					<p>Find a Job</p>
					   <form action="#" method="post">
							<div class="form-time-w3layouts">
									<label><i class="fa fa-search" aria-hidden="true"></i> Search Word :</label>
									<input type="text" id="word" name="Word" class="form-control" value="" required="" placeholder='Insert a Word'>	
									<button class='btn btn-block Word'>Find</button>
							</div>

							<hr>
<form>
					<div class="form-left-agileits-w3layouts ">
							<label><i class="fa fa-users" aria-hidden="true"></i>Service Category :</label>
							<select class="form-control Service" name='Service'>
							<option value='tech'>Tech</option>
							<option  value='food'>Food & Drinks</option>
							<option value='fashion'>Fashion</option>
							<option value='hobbies'>Hobbies</option>
							<option value='pets'>Pets</option>
							<option value='photo'>Photography</option>
							<option value='learning'>Learning</option>
							<option value='others'>Others</option>
							</select>
					</div>

				<!--	<div class="form-time-w3layouts">
												<label><i class="fa fa-map-marker" aria-hidden="true"></i> Area :</label>
												<input type="text" id="" name="" class="form-control" value="" required="">	
										</div>
-->
					<div class="form-left-agileits-w3layouts ">
							<label><i class="fa fa-map" aria-hidden="true"></i> State :</label>
							<select class="form-control State" name='State' >
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
					<div class="form-left-agileits-submit">
								  <input type="submit" value="Find" class='filter'> 
							</div>

					{{csrf_field()}}	
	</form>
										
							
						<!--	<div class="form-left-agileits-w3layouts ">
									<label><i class="fa fa-intersex" aria-hidden="true"></i> Gender :</label>
									<select class="form-control">
										<option></option>
										<option value='1'>1 Person</option>
										<option value='2'>2 People</option>
									</select>
							</div>-->
						<!--	<div class="form-left-agileits-submit">
								  <input type="submit" value="Book a table">
							</div>-->
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
<!-- grids -->
<div class="about-agile" id="menu">
		<div class="col-md-6 w3layouts_event_right">
				<h3>How it works</h3>
				<div class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3_event_right_grid">
									<div class="w3layouts_event_right_para">
										<p>Find Services around you with a simple intuative search pattern to redefine the 
										way you get connected.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="w3_event_right_grid">
									<div class="w3layouts_event_right_para">
										<p>Create a profile and get discovered today using our plartform of daily growing users.</p>
									</div>
								</div>
							</li>
							
						</ul>
					</div>
				</div>
			</div>


	<div class="col-md-6 w3layouts_event_right">
		<h3>About Us</h3>
		<div class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="w3_event_right_grid">
							<div class="w3layouts_event_right_para">
								<p>Artisan is a plartform commited to the outreach of people / services around you. 
								Create a profile and stay discoverable on Artisan </p>
							</div>
						</div>
					</li>
				
				</ul>
			</div>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
<!-- //grids -->
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
<!-- team -->
<div class="team" id="chefs">
	<div class="container">
		<div class="agile-heading team-heading">
			<h3 class="w3l-title">Users</h3>
		</div>
		<div class="agile-team-grids">

@if(count($users)>0)

@foreach($users as $user)
<div class="col-sm-3 team-grid">
		<div class="flip-container">
			<div class="flipper">
					<div class="front">
					<img src="/images/user.jpg" class='img-responsive size' alt="{{$user->fname}} {{$user->lname}}'s service profile" title='{{$user->fname}} {{$user->lname}}' />
				</div>
				<div class="back">
							<h4  class='black'>{{$user->fname}} {{$user->lname}}</h4>
							<a href='/profile-info/{{$user->id}}' ><p class='black'>View Profile</p></a>
					<div class="w3l-social">
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach

@else
<div class='text-center alert alert-info'>
		No User Currently on Artisan <a href='/register'>Click to Register Now</a>
	</div>

@endif
					


				</div>
			</div>
		</div>
		<!-- //team -->

<!-- testimonials -->
<div class="testimonials" id='testimony'>
	<div class="container">
		<h3 class="w3l-title">Testimonials</h3>
		<div class="w3_testimonials_grids">
		
			@if(count($tes)>0)

			@foreach($tes as $t)
			<div class="col-md-4 col-sm-4 item w3_agileits_testimonials_grid">
					<div class="text-w3l white">
					<h4 class='white'>{{$t->name}}</h4>
						<p class='white'>{{$t->testimony}}</p>
						<i class='white'>{{$t->created_at->diffforhumans()}}</i>
					</div>
				</div>
				@endforeach
			@else
			<div class='text-center alert alert-info'>
					No Testimonies Currently. <a href="#tesModal" data-toggle="modal" class="scroll">Click to Testify</a>
				</div>
			@endif

			

			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //testimonials -->
<!-- delicious-food -->
<div class="delicious_food" id="gallery">
	<div class="container">
		<h3 class="w3l-title">Gallery</h3>
		<div class="agile_delicious_food_grids">
		
			
@if(count($gal)>0)
		@foreach($gal as $g)
			<div class="agile_delicious_food_grid ">
			<a class="sb" href="/storage/user_images/{{$g->image}}" title="{{$g->title}}...<a href='/profile-info/{{$g->user_id}}'>[VIEW PROFILE]</a>">
					<div class="view view-sixth">
						<img src="/storage/user_images/{{$g->image}}" alt="{{$g->title}} " class="img-responsive size" title='{{$g->title}}'/>
						<div class="mask">
								<!--<h4>Game</h4>-->
								<p>{{$g->title}}</p>
						</div>
					</div>
				</a>
			</div>
		@endforeach
		@else
		<div class='text-center alert alert-info'>
			Gallery Is Currently Empty <a href='/dashboard'>Click to Post a Picture</a>
		</div>
		@endif		
			
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //delicious-food -->
<!-- footer -->
<div class="footer" id="contact">
	<div class="container">
		<div class="agile-footer-grids">
			<div class="col-md-3 col-sm-6 col-xs-6 w3-agile-footer-grid">
				<div class="logo-2">
					<h2><a href="/">Artisan<span></span></a></h2>
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
						{{csrf_field()}}
						<input type="text" placeholder="Name" name="Name" id='Name' required="">
						<input type="email" class="email" placeholder="Email" id='Email' name="Email" required="">             
						<textarea placeholder="Message" name="Message" required="" id='Mess'></textarea>
						<input type="submit" class='contact' value="Send">
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
<!-- modal -->
<div class="modal about-modal w3-agileits fade" id="tesModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body login-page "><!-- testimonial -->     
					<div class="login-top sign-top">
						<div class="agileits-login">

								<form action="#" method="post" id='tt'>
									{{csrf_field()}}
									<input type="text" class="email" name="Name" id='TName' placeholder="First Name" required=""/>
									<textarea class="password" name="Testimony" id='Testimony' placeholder="Testimony" required=""></textarea>

									<div class="w3ls-submit"> 
									<input type="submit" value="TESTIFY" class='tes'> 
									</div>	
								</form>

							<div class="w3ls-submit"> 
									<a href="#testimony" data-dismiss="modal" class='btn btn-info scroll'>VIEW TESTIMONIES</a>
								</div>	
								
						</div>  
					</div>
				</div>  
			</div> <!-- //testimonial -->
		</div>
	</div>
	<!-- //modal --> 
<!-- js-scripts -->		
	@include('includes.js')
<!-- //js-scripts -->
</body>
</html>