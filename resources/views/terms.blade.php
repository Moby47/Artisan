
<!DOCTYPE html>
<html lang="en">
<head>
<title>Artisan</title>
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

			
			</div>
		</div>
		
	</div>
</div>

<!-- //banner -->
<!-- grids -->


	<div class="col-md-12 w3layouts_event_right">
		<h3>Terms of Use</h3>
		<div class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="w3_event_right_grid">
							<div class="w3layouts_event_right_para">
								<p>
										You agree that:
										<br>
										(a) You shall not disguise the origin of information transmitted through the Website.
										<br>
										(b) You will not place false or misleading information on the Website.
										<br>
										(c) You will not use or access any service, information, application
										 or software available via the Website in inappropriate manner.
										<br>
										(d) You will not input or upload to the Website any information which
										 contains viruses, Trojan horses, worms, time bombs or other computer programming routines that are intended to damage, interfere with, intercept or expropriate any system, the Website or Information or that infringes the Intellectual Property rights of another.
										<br>
										
										(e) You may not use or access the Website or System or Services in 
										any way that, adversely affects the performance or function of the System, Services or the Website or interferes with the ability of authorized parties to access the System, Services or the Website.
										<br>
										(f) You may not frame or utilize framing techniques to enclose any portion or aspect of
										 the Content or the Information, without the express written consent.	
								</p>
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