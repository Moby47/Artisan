	
<!--Start of Tawk.to Script-->
<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/5b47c7ae4af8e57442dc98f0/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->
<!-- js -->
	<script src="{{asset('js/jquery.min.js')}}"> </script>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->

	
<!--busyload-->
<script src="https://cdn.jsdelivr.net/npm/busy-load/dist/app.min.js"></script>

<!--toastr-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


	<!-- responsiveslider -->
	<script src="{{asset('js/responsiveslides.min.js')}}"></script>
		<script>
			// You can also use "$(window).load(function() {"
			$(function () {
			  // Slideshow 4
			  $("#slider3").responsiveSlides({
				auto: true,
				pager:true,
				nav:false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
				  $('.events').append("<li>before event fired.</li>");
				},
				after: function () {
				  $('.events').append("<li>after event fired.</li>");
				}
			  });
		
			});
		 </script>
	<!-- //responsiveslider -->
	<!-- menu -->
	<script>
		$(document).ready(function () {
		  $('.mobile-nav-button').on('click', function() {
		  $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(1)" ).toggleClass( "mobile-nav-button__line--1");
		  $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(2)" ).toggleClass( "mobile-nav-button__line--2");  
		  $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(3)" ).toggleClass( "mobile-nav-button__line--3");  
		  
		  $('.mobile-menu').toggleClass('mobile-menu--open');
		  return false;
		}); 
		});
	</script>
	<!-- //menu -->
	<!-- flexSlider-for-grids-section -->
		<script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
		<script type="text/javascript">
			$(window).load(function(){
			  $('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
				  $('body').removeClass('loading');
				}
			  });
			});
	  </script>
	<!-- //flexSlider-for-grids-section -->
	<!-- flexSlider-for-menu-section -->
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems:3
					},
					tablet: { 
						changePoint:768,
						visibleItems: 4
					}
				}
			});
			
		});
	</script>
	<script type="text/javascript" src="{{asset('js/jquery.flexisel.js')}}"></script>
	<!-- //flexSlider-for-menu-section -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- for-bottom-to-top smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //for-bottom-to-top smooth scrolling -->
	<!-- Calendar 
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
		<script>
			$(function() {
			$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
			});
		</script>
	 //Calendar -->
	<!-- video-js
	<script src="js/jquery.vide.min.js"></script>
	 //video-js  -->	
	<!-- smoothbox -->
	<script type="text/javascript" src="{{asset('js/smoothbox.jquery2.js')}}"></script>
	<!-- //smoothbox -->
	<!-- Time 
	<script type="text/javascript" src="js/wickedpicker.js"></script>
		<script type="text/javascript">
			$('.timepicker').wickedpicker({twentyFour: false});
		</script>
	 //Time -->
	 @if(\route::current()->getname()=='serve')
<script>

//................initial service data load...............
$(document).ready(function(){
  
  $.ajax({
		  url: "{{route('service_content')}}",
		  type: "GET",
		  
		  beforeSend:function(){
		  $(".load").addClass("fa fa-refresh fa-spin");
		  },

		   complete:function(){
		  $(".load").removeClass("fa fa-refresh fa-spin");
		  },
		  

		  success: function(data)
		  {
			  $('.content').html(data);
		  },
			error: function(e) 
		  {
			  $('.content').html("Error! Try Again Later");
		  } 	        
	 });
});

		 </script>
		 @endif
<!--................initial service data load...............-->

	    <!-- contact us
<script>
					$('.contact').click(function(e){
							e.preventDefault();
					 
									//save location
									$.ajax({
											url: "{{route('contact')}}",
											type: "POST",
											data:  {
													'_token': $('input[name=_token]').val(),
													'Name': $('#Name').val(),
													'Message': $('#Mess').val(),
													'Email': $('#Email').val(),
											},
							
											beforeSend:function(){
													 //busy load before  
							$.busyLoadFull("show", { 
									text: "UPDATING ...",
					maxSize: "50px",
					fontawesome:'fa fa-cog fa-spin fa-3x fa-fw',
									minSize: "50px",
									background: "rgba(37, 195, 220, 0.56)",
									fontSize: "17px"
							});
											},
											complete:function(){
											 //busy load after
							$.busyLoadFull("hide", { 
									text: "UPDATING ...",
									maxSize: "50px",
									minSize: "50px",
									background: "rgba(37, 195, 220, 0.56)",
									fontSize: "17px"
							});
											},
	
									
											success: function(data)
											{
											 
												//if validation errors occur
												if ((data.errors)) {
																	 
																	 //...........emit  validation errors................
																			if (data.errors.Name) {
																					toastr.info(data.errors.Name, 'warning Alert', {timeOut: 5000});
																			}
																			if (data.errors.Email) {
																					toastr.info(data.errors.Email, 'warning Alert', {timeOut: 5000});
																			}
																			if (data.errors.Message) {
																					toastr.info(data.errors.Message, 'warning Alert', {timeOut: 5000});
																			}
																			
																	 //.............................. 
									
																	} else {
												toastr.success(data);
																	}
											}, //success end
												
											 }); //ajax end
											});//btn end
												</script>
												
				contact us-->


.


					 <!-- tes-->
			<script>

					$('.tes').click(function(e){
							e.preventDefault();
					 
									//save location
									$.ajax({
											url: "{{route('Testimony')}}",
											type: "POST",
											data:  {
													'_token': $('input[name=_token]').val(),
													'Name': $('#TName').val(),
													'Testimony': $('#Testimony').val(),
											},
							
											beforeSend:function(){
													 //busy load before  
							$.busyLoadFull("show", { 
									text: "TESTIFYING ...",
					maxSize: "50px",
					fontawesome:'fa fa-cog fa-spin fa-3x fa-fw',
									minSize: "50px",
									background: "rgba(37, 195, 220, 0.56)",
									fontSize: "17px"
							});
											},
											complete:function(){
											 //busy load after
							$.busyLoadFull("hide", { 
									text: "TESTIFYING ...",
									maxSize: "50px",
									minSize: "50px",
									background: "rgba(37, 195, 220, 0.56)",
									fontSize: "17px"
							});
											},
	
									
											success: function(data)
											{
											 
												//if validation errors occur
												if ((data.errors)) {
																	 
																	 //...........emit  validation errors................
																			if (data.errors.Name) {
																					toastr.info(data.errors.Name, 'warning Alert', {timeOut: 5000});
																			}
																		
																			if (data.errors.Testimony) {
																					toastr.info(data.errors.Testimony, 'warning Alert', {timeOut: 5000});
																			}
																			
																	 //.............................. 
									
																	} else {
												toastr.success(data);
												//empty form
												$("#tt")[0].reset();
												//exit modal
												$("#tesModal").modal('hide');
																	}
											}, //success end
												
											 }); //ajax end
											});//btn end
												</script>
												
					<!--tes-->






					   <!-- homefilter-->
<script>
					$('.filter').click(function(e){
							e.preventDefault();
					 
									//save location
									$.ajax({
											url: "{{route('homefilter')}}",
											type: "get",
											data:  {
													'_token': $('input[name=_token]').val(),
													'State': $('.State').val(),
													'Service': $('.Service').val(),
											},
							
											beforeSend:function(){
													 //busy load before  
							$.busyLoadFull("show", { 
									text: "SEARCHING ...",
					maxSize: "50px",
					fontawesome:'fa fa-cog fa-spin fa-3x fa-fw',
									minSize: "50px",
									background: "rgba(37, 195, 220, 0.56)",
									fontSize: "17px"
							});
											},
											complete:function(){
											 //busy load after
							$.busyLoadFull("hide", { 
									text: "SEARCHING ...",
									maxSize: "50px",
									minSize: "50px",
									background: "rgba(37, 195, 220, 0.56)",
									fontSize: "17px"
							});
											},
	
									
											success: function(data)
											{
											 
												//if validation errors occur
											/*	if ((data.errors)) {
																	 
																	 //...........emit  validation errors................
																			if (data.errors.State) {
																					toastr.info(data.errors.State, 'warning Alert', {timeOut: 5000});
																			}
																			if (data.errors.Location) {
																					toastr.info(data.errors.Location, 'warning Alert', {timeOut: 5000});
																			}
																			if (data.errors.Job) {
																					toastr.info(data.errors.Job, 'warning Alert', {timeOut: 5000});
																			}
																			
																	 //.............................. 
									
																	} else { */
									$('.content').html(data);
												 //scroll to top
                             $(document).scrollTop(0);
																//	}
											}, //success end
												
											 }); //ajax end
											});//btn end
												</script>
												
				<!--homefilter-->







				  <!-- word search-->
<script>
					$('.Word').click(function(e){
							e.preventDefault();
					 
							//var value = $('#Word').val();
            var len = $('#word').val().length;
        
            if(len < 1){
       
       alert('Please Enter a Word to Search')
			}else{
//save location
$.ajax({
											url: "{{route('wordsearch')}}",
											type: "get",
											data:  {
													'_token': $('input[name=_token]').val(),
													'Word': $('#word').val(),
											},
							
											beforeSend:function(){
													 //busy load before  
							$.busyLoadFull("show", { 
									text: "SEARCHING ...",
					maxSize: "50px",
					fontawesome:'fa fa-cog fa-spin fa-3x fa-fw',
									minSize: "50px",
									background: "rgba(37, 195, 220, 0.56)",
									fontSize: "17px"
							});
											},
											complete:function(){
											 //busy load after
							$.busyLoadFull("hide", { 
									text: "SEARCHING ...",
									maxSize: "50px",
									minSize: "50px",
									background: "rgba(37, 195, 220, 0.56)",
									fontSize: "17px"
							});
											},
	
									
											success: function(data)
											{
											 
												//if validation errors occur
										
									$('.content').html(data);
												 //scroll to top
                             $(document).scrollTop(0);
											
											}, //success end
												
											 }); //ajax end
			}//else end
									
											});//btn end
												</script>
												
				<!--word search->
