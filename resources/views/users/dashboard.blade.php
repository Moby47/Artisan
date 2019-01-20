
<!DOCTYPE HTML>
<html>
<head>
<title>Artisan - Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />

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
				<a href="/">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Dashboard</span>
				</h2>
		    </div>
		<!--//banner-->
		<!--content-->
		<div class="content-top">
			
			
			<div class="col-md-4 ">
				<div class="content-top-1">
				<div class="col-md-12 top-content">
					<h5>View(s)</h5>
					<label>{{$view}}</label>
				</div>
				
				 <div class="clearfix"> </div>
				</div>
				<div class="content-top-1">
					<div class="col-md-12 top-content">
					<a href='/profile-info/{{Auth()->user()->id}}' class='btn btn-info '>Visit Profile</a>
					</div>
					
					 <div class="clearfix"> </div>
					</div>
				<div class="content-top-1">
				<div class="col-md-12 top-content">
					<h5>Gallery</h5>
					<label class='res'>{{$gal}}</label><span class='load'></span>
				</div>
				
				 <div class="clearfix"> </div>
				</div>

				
			
			</div>
			<div class="col-md-8 content-top-2">
				<!---start-chart-->	
				<div class="content-graph">
						<h3 class='page-header left'>Drag to Location</h3>

						<div style="width: 100%px; height: 250px;">
								{!! Mapper::render() !!}
							</div>
							<form class='form-inline text-center'>
								<br>
							<button class='btn btn-info mark'>Done</button>
							<input type="hidden" id='lat'/>
							<input type="hidden" id='lng'/>
							</form>
						
		</div>
		</div>
		<div class="clearfix"> </div>
		</div>
		<!---->
	
  
		<div class="content-mid">
			<!--profile-->
			
			<div class="col-md-4">

				
					<div class="post">
							<form class="text-area" id='image_upload'>
								{{csrf_field()}}
								<input type='text' class='form-control' name='Title'  required="" placeholder="Picture Title...">
							<div class="post-at">
								<ul class="icon">
									<div  class="post-file">
									<i class="fa fa-camera"></i>
									<input id="input-2" name="Picture" type="file" multiple="" class="">
									</div>
									
								</ul>
								<span class="text-sub">
									<input type="submit" value="post" class='pix'>
									</span>
								</form>
								
								<div class="clearfix"> </div>
							</div>
						</div>
			</div>
			<div class="col-md-8 mid-content-top">
				<div class="middle-content">
					<h3>Latest Images</h3>
					<!-- start content_slider -->
		<div id="owl-demo" class="owl-carousel text-center">
			@if(count($gallery)>0)

			@foreach($gallery as $g)

			<div class="item ">
			<img class="lazyOwl img-responsive box" data-src="/storage/user_images/{{$g->image}}" alt="name">
				</div>

			@endforeach
			@else
			<div class="item ">
					<img class="lazyOwl img-responsive box" data-src="/storage/user_images/noimage.jpg" alt="name">
						</div>
			@endif
				
		</div>
		<!-- start content_slider -->
		</div>
		<!--//sreen-gallery-cursual-->
		
			</div>
			<div class="clearfix"> </div>
		</div>
		
	
		<!--//content-->
	 
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

