
<!DOCTYPE HTML>
<html>
<head>
<title>Artisan - Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
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
				<span>Profile</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-form ">

		
 		<div class="grid-form1">
		 <h3 id="forms-example" class="">General</h3>
		 
		 <form id="form_general" method=""  enctype="multipart/form-data">
			{{csrf_field()}}
  <div class="form-group">
    <label for="First">First Name</label>
  <input type="text" class="form-control" id="First" name='First_Name' placeholder="First Name" value='{{Auth()->user()->fname}}'>
	</div>
	<div class="form-group">
			<label for="Last">Last Name</label>
			<input type="text" class="form-control" id="Last" name='Last_Name' placeholder="Last Name" value='{{Auth()->user()->lname}}'>
		</div>
  <div class="form-group">
    <label for="Phone">Phone Number</label>
    <input type="text" class="form-control numval" id="Phone" name='Phone' placeholder="eg 08012345678" value='{{Auth()->user()->phone}}'>
<p class='numerr text-danger'></p>  
</div>
  
	<div class="form-group">
			<label for="Gender">Gender (Optional)</label>
			<select name="Gender" id="Gender" class="form-control1">
				<option value='{{Auth()->user()->sex}}'>
					@if(Auth()->user()->sex == 1)
					Male
					@elseif(Auth()->user()->sex == 2)
					Female
					@else

					@endif</option>
				<option  value='1'>Male</option>
				<option value='2'>Female</option>
			</select>
		</div>

		<div class="form-group">
				<label for="age">Age (Individual/Company)</label>
				<input type="number" class="form-control" id="age" name='Age' placeholder="eg 47" value='{{Auth()->user()->age}}'>
			</div>

			<div class="form-group">
					<label for="First">Profile Picture (optional but recommended)</label>
					<input type="file" class="form-control" id="profile" name='Profile_Image' >
					</div>
					
			<div class="form-group">
					<label for="hrs">Working Hr(s)</label>
					<select name="Hrs" id="hrs" class="form-control1">
							<option value='{{Auth()->user()->hrs}}'>{{Auth()->user()->hrs}}</option>
							<option value='All Day(s)'>All Day(s)</option>
						<option  value='Only Weekdays'>Only Weekdays</option>
						<option value='Only Weekends'>Only Weekends</option>
						<option value='Only Night(s)'>Only Night(s)</option>
						<option value='Only Daytime'>Only Daytime</option>
					</select>
				 </div>

				 <div class="form-group">
						<label for="serve">Service Type <i>(eg I render only home services)</i></label>
						<select name="Service" id="serve" class="form-control1">
								<option value='{{Auth()->user()->service}}'>{{Auth()->user()->service}}</option>
								<option value='Only Home'>Only Home</option>
							<option  value='Only Away'>Only Away</option>
							<option value='Home and Away'>Home and Away</option>
						</select>
					 </div>
  <button type="submit" class="btn btn-info">Update</button>
</form>
</div>





<div class="grid-form1">
		<h3 id="forms-example" class="">Business</h3>

		<form id="form_biz" method=""  enctype="multipart/form-data">
{{csrf_field()}}

				<div class="form-group">
						<label for="biz">Business Title</label>
						<input type="text" class="form-control" id="biz" name='Title' value='{{$title}}' placeholder="eg Digital Marketer, Web Developer">
					   </div>
				<div class="form-group">
						<label for="cat">Service Category <i>(which category does your business belong?)</i></label>
						<select name="Category" id="cat" class="form-control1">
							<option value='{{$cat}}'>{{$cat}}</option>
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
					 <div class="form-group">
							<label for="state1">State</label>
							<select name="State" id="state1" class="form-control1">
							<option value='{{$state}}'>{{$state}}</option>
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
			<div class="form-group">
			<label for="town">Town</label>
			<input type="text" class="form-control" id="town" value='{{$town}}' name='Town' placeholder="eg ikeja">
			</div>
			<div class="form-group">
			 <label for="area">Address</label>
			 <input type="text" class="form-control" id="area" name='Address' value='{{$add}}' placeholder="eg no 47, Lekki phase 1">
			</div>
			<div class="form-group">
					<label for="loc_summary">Location Summary</label>
					<textarea class="form-control" id="loc_summary" name='Summary' placeholder="eg Opposite computer village gate, Ikeja under bridge, Obafemi awololo way.">{{$loc}}</textarea>
					</div>
		<div class="form-group">
		<label for="job_summary">Job Summary</label>
		<textarea class="form-control" rows='5' id="job_summary" name='Job_Summary' placeholder="eg We are pc games dealers located at lekki phase1, get in touch for the best high end pc games such as Fifa19.">{{$job}}</textarea>
		</div>
		
		<button type="submit" class="btn btn-info">Update</button>
		</form>
		</div>







		<div class="grid-form1">
				<h3 id="forms-example" class="">Social</h3>
		
				<form id="social" method="" >
		{{csrf_field()}}
		
						<div class="form-group">
								<label for="fb">Facebook</label>
						<input type="text" class="form-control" id="fb" name='Facebook' value='{{$soc->fb}}' placeholder="eg fb.me/Dstreet.LIVE">
							   </div>

							   <div class="form-group">
									<label for="tw">Twitter</label>
									<input type="text" class="form-control" id="tw" name='Twitter' value='{{$soc->tw}}' placeholder="eg twitter.com/DstreetNg">
								   </div>

								   <div class="form-group">
										<label for="web">Website</label>
										<input type="text" class="form-control" id="web" name='Website' value='{{$soc->web}}' placeholder="eg www.DStreet.com.ng">
									   </div>

				<button type="submit" class="btn btn-info social">Update</button>
				</form>
				</div>
<!---->



 	</div>
 	<!--//grid-->
	
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

