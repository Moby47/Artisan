
<!DOCTYPE HTML>
<html>
<head>
<title>Artisan - Gallery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!--<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />-->
<!-- Custom Theme files -->
<!--css-->
@include('users.includes.css')



</head>
<body>
		<div id="wrapper">


				<nav class="navbar-default navbar-static-top" role="navigation">
					 <!--include nav-->
					 @include('users.includes.nav') 

				</nav>
				<div id="page-wrapper" class="gray-bg dashbard-1">
			   <div class="content-main">
 
 	<!--banner-->	
		    <div class="banner">
		    	<h2>
			<a href="/dashboard">Home</a>
			<i class="fa fa-angle-right"></i>
				<span>Gallery</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--gallery-->
 	 <div class="gallery">

		@if(count($gallery)>0)
		@foreach($gallery as $g)
 	 	<div class="col-md">
 	 		<div class="gallery-img">
			  <a href="/storage/user_images/{{$g->image}}" class="b-link-stripe b-animate-go  swipebox"  title="{{$g->title}}" >
				 <img class="img-responsive box" src="/storage/user_images/{{$g->image}}" alt="{{$g->title}}" title='{{$g->title}}'/>   
					<span class="zoom-icon"> </span> </a>
			</a>
			</div>	
 	 		<div class="text-gallery">
 	 			<h6>{{$g->title}}</h6>
 	 		</div>
		  </div>
		  @endforeach
		  <div class='text-center'>
			{{$gallery->links()}}
		  </div>
		 @else
		 <div class='alert alert-info text-center'>
			No Picture In Your Gallery Yet
		 </div> 
		  @endif

 	 	 <div class="clearfix"> </div>
 	 </div>
	<!--//gallery-->
		<!---->
		<div class="copy">
			@include('users.includes.footer')
			</div>
		  </div>
		  <div class="clearfix"> </div>
		 </div>
	   </div>
  <!---->
  
  <!--scripts-->
  
  @include('users.includes.js')
  
  
	  <!--scripts-->

</body>
</html>

