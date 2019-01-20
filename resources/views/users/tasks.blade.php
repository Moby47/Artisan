
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
				<span>Pending Tasks</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--gallery-->
 	 <div class="gallery">

		<ul class='group-item'>
        <li class='list-group-item'>{{$fname}}</li>
        <li class='list-group-item'>{{$lname}}</li>
        <li class='list-group-item'>{{$phone}}</li>
        <li class='list-group-item'>{{$sex}}</li>
        <li class='list-group-item'>{{$age}}</li>
        </ul>
<br>
        <div class='text-center'>
<a href='/profile' class='btn btn-info'>Update Profile</a>
        </div>
        
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

