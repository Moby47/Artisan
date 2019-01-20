
<!DOCTYPE html>
<html>
<head>
<title>Artisan - User Profile</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Find Services, jobs around you with a simple intuative search pattern to redefine the 
										way you get connected." />


<!-- //unique profile view page-->
<link href="{{asset('css/style2.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('css/lightcase.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{asset('css/easy-responsive-tabs.css')}}" />

<!-- others -->
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> 
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- Bootstrap-Core-CSS -->
<!-- //font-awesome-icons --> 


</head>
<body>
	<div class="main">	
		
		<div class="w3_agile_main_grids">
			<div class="w3layouts_main_grid_left">	
				<div class="w3_main_grid_left_grid">	
					<h2>
						@if($profile->fname)
						{{$profile->fname}} {{$profile->lname}}
						@else
						No Name
						@endif
					</h2>
					<p class='black'>@if($info->title){{$info->title}}@else N/A @endif</li></p>

					@if($profile->image)
					<div class="w3l_figure">
						<img src="/storage/profile_images/{{$profile->image}}" alt="{{$info->title}}" title="{{$profile->fname}} {{$profile->lname}} - {{$info->title}} "/>
					</div>
					@else
					<div class="w3l_figure">
							<img src="/storage/profile_images/noimage.jpg" alt="{{$info->title}}" title="{{$profile->fname}} {{$profile->lname}} - {{$info->title}} "/>
						</div>
					@endif

					<ul class="agileinfo_social_icons">
						<li><a href="http://{{$soc->fb}}" target='_blank' class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="http://{{$soc->tw}}" target='_blank' class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="http://{{$soc->web}}" target='_blank' class="agileinfo_google"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="w3layouts_main_grid_right">
				<div class="w3ls_main_grid_right_grid">	
					<div id="parentHorizontalTab">
						<ul class="resp-tabs-list hor_1">
							<li><i class="fa fa-user" aria-hidden="true"></i>About me</li>
							<li><i class="fa fa-briefcase" aria-hidden="true"></i>my work</li>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i>Contact me</li>
							
						</ul>
						<div class="resp-tabs-container hor_1">
							<div class="agileits_main_grid_right_grid">	

								@if(Auth()->check())

									@if($profile->id == Auth()->user()->id)
									<div class="banner">
											<p>
											<a href="/">Home</a>
											<i class="fa fa-angle-right"></i>
											<a href="/dashboard">Dashboard</a>
											<i class="fa fa-angle-right"></i>
											<span>Profile Details</span>
											</p>
										</div>
										@else
										<div class="banner">
												<p>
												<a href="/">Home</a>
												<i class="fa fa-angle-right"></i>
												<span>Profile Details</span>
												</p>
											</div>
									@endif

									@else
									<div class="banner">
											<p>
											<a href="/">Home</a>
											<i class="fa fa-angle-right"></i>
											<span>Profile Details</span>
											</p>
										</div>

									@endif
									

								<ul class='list-group'>
									<li class='list-group-item'>Age - @if($profile->age){{$profile->age}}@else N/A @endif</li>
									<li class='list-group-item'>
										Sex - @if($profile->sex)

										@if($profile->sex == 1)
										Male
										@elseif($profile->sex ==2)
										Female
										@endif
										
										@else
										 N/A 
										 @endif
									</li>
									<li class='list-group-item'>State - @if($info->state){{$info->state}}@else N/A @endif</li>
									<li class='list-group-item'>Town - @if($info->town){{$info->town}}@else N/A @endif</li>
									<li class='list-group-item'>Services Category - @if($info->category){{$info->category}}@else N/A @endif</li>
									<li class='list-group-item'>days available - @if($profile->hrs){{$profile->hrs}}@else N/A @endif</li>
									<li class='list-group-item'>Service offer - @if($profile->service){{$profile->service}}@else N/A @endif </li>
								</ul>
								<p class="agileinfo_para"> 
									<i>Summary - @if($info->job){{$info->job}}@else N/A @endif</li>.</i></p>
								
								<!--<div class="agileits_skills">
									<br>
									<h3>Skills</h3>
									<div class="w3_agileits_skills_grid">
										<ul>
											<li><label>Photoshop</label> <span></span> 56%</li>
											<li><label>Wordpress</label> <span></span> 95%</li>
											<li><label>HTML5</label> <span></span> 91%</li>
											<li><label>PHP</label> <span></span> 98%</li>
											<li><label>Multimedia</label> <span></span> 85%</li>
										</ul>
									</div>
								</div>-->
							</div>
							<div class="wthree_main_grid_right_grid">
								<h3>My Awesome Works</h3>
								<div class="w3_agileits_main_grid_work_grids">
										
										@if(Auth()->check())

										@if($profile->id == Auth()->user()->id)
										<div class="banner">
												<p>
												<a href="/">Home</a>
												<i class="fa fa-angle-right"></i>
												<a href="/dashboard">Dashboard</a>
												<i class="fa fa-angle-right"></i>
												<span>Profile Details</span>
												</p>
											</div>
											@else
											<div class="banner">
													<p>
													<a href="/">Home</a>
													<i class="fa fa-angle-right"></i>
													<span>Profile Details</span>
													</p>
												</div>
										@endif
	
										@else
										<div class="banner">
												<p>
												<a href="/">Home</a>
												<i class="fa fa-angle-right"></i>
												<span>Profile Details</span>
												</p>
											</div>
	
										@endif
									
									@if(count($works)>0)
									@foreach($works as $w)
									<div class="agile_main_grid_work_gridl">
											<a href="/storage/user_images/{{$w->image}}" class="showcase" data-rel="lightcase:myCollection:slideshow"  title="{{$w->title}}">
												<img src="/storage/user_images/{{$w->image}}" alt='{{$w->title}}' class='img-responsive box'/>
											</a>
										</div>
									@endforeach
									@else
									<div class='alert alert-info text-center'>
											No Picture(s) In Gallery, Yet.
										 </div> 
									@endif
									

									<div class="clear"> </div>
								</div>
							</div>
							<div class="wthree_main_grid_right_grid">
								<h3>Contact Me</h3>
								
								@if(Auth()->check())

								@if($profile->id == Auth()->user()->id)
								<div class="banner">
										<p>
										<a href="/">Home</a>
										<i class="fa fa-angle-right"></i>
										<a href="/dashboard">Dashboard</a>
										<i class="fa fa-angle-right"></i>
										<span>Profile Details</span>
										</p>
									</div>
									@else
									<div class="banner">
											<p>
											<a href="/">Home</a>
											<i class="fa fa-angle-right"></i>
											<span>Profile Details</span>
											</p>
										</div>
								@endif

								@else
								<div class="banner">
										<p>
										<a href="/">Home</a>
										<i class="fa fa-angle-right"></i>
										<span>Profile Details</span>
										</p>
									</div>

								@endif

								<form action="#" method="post">
									<div class="agileits_w3layouts_contact_left">
											@if($profile->phone)
											<a class='btn text-center btn-block btn-info' href='tel:+23{{substr($profile->phone,1,11)}}'>Call</a><br>
											<a class='btn text-center btn-block btn-info' href='sms:+234{{substr($profile->phone,1,11)}}?body=Hello'>SMS</a><br>
											<a class='btn text-center btn-block btn-info' href='intent://send/+234{{substr($profile->phone,1,11)}}#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end'>Whatsapp</a><br>
											@else
											<div class='alert alert-info text-center'>
													No Phone Number Added, Yet.
												 </div> 
											@endif
											<p>@if($info->location) Location Summary - {{$info->location}}@else Location Summary - N/A @endif</p>
									</div>
									<div class="agileits_w3layouts_contact_right">
										@if($location->lat == 0)
										<div class='alert alert-info text-center'>
												Map Not Set, Yet.
											 </div> 
										@else
											<div style="width: 100%px; height: 250px;">
													{!! Mapper::render() !!}
												</div>	
												@endif
									</div>
									<div class="clear"> </div>
									
								</form>
								<br>
								<div class="wthree_tab_grid">
									<ul class="wthree_tab_grid_list">
										<li><i class="fa fa-mobile" aria-hidden="true"></i></li>
									<li>Mobile<span>	@if($profile->phone) {{$profile->phone}} @else <span> N/A</span> @endif</span></li>
									</ul>
									<ul class="wthree_tab_grid_list">
										<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
									<li>Mail Me<span><a href="mailto:{{$profile->email}}" class='line'>Here</a></span></li>
									</ul>
									<ul class="wthree_tab_grid_list">
										<li><i class="fa fa-map-marker" aria-hidden="true"></i></li>
										<li>Address<span> @if($info->address) {{$info->address}} @else <span> N/A</span> @endif</span></li>
									</ul>
									<div class="clear"> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"> </div>
		</div><!--	<p>© 2017 Delightful Profile. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		-->
		<div class="agileits_copyright">
				<p>© 2019 Artisan. All Rights Reserved  </p>
		</div>
	</div>
	<!-- js -->
	<!--sharethis-->
<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5b47c22832e60f0011a5d8e9&product=social-ab' async='async'></script>	

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


	<script src="{{asset('js/jquery.min.js')}}"> </script>
<!-- //js -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="{{asset('js/easyResponsiveTabs.js')}}"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			//Horizontal Tab
			$('#parentHorizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				tabidentify: 'hor_1', // The tab groups identifier
				activate: function(event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#nested-tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
		});
	</script>
	<!-- light-case -->
		<script src="{{asset('js/lightcase.js')}}"></script>
		<script src="{{asset('js/jquery.events.touch.js')}}"></script>
		<script>
			$('.showcase').lightcase();
		</script>
	<!-- //light-case -->

</body>
</html>