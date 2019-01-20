
<!DOCTYPE HTML>
<html>
<head>
<title>Artisan - Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<!--css-->
@include('users.includes.css')

</head>
<body>
	<div class="login">
		<h1><a href="/">Artisan</a></h1>
		<div class="login-bottom">
            <h2>Register</h2>

            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
			<div class="col-md-6">
				<div class="login-mail">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"></div>
					<input type="text" id='email' placeholder="Email" name="email" value="{{ old('email') }}" required>
                    <i class="fa fa-envelope"></i>
                   
                </div>
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
				<div class="login-mail">
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"></div>
					<input type="password" id='password' placeholder="Password" name="password" required>
                    <i class="fa fa-lock"></i>
                   
                </div>
                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

				<div class="login-mail">
					<input  placeholder="Repeated password"  id="password-confirm" type="password" class="" name="password_confirmation" required>
					<i class="fa fa-lock"></i>
				</div>
				  <a class="news-letter" href="#">
						 <label class="checkbox1"><input type="checkbox" name="checkbox" id="checkbox1" ><i> </i>I agree with the terms</label>
					   </a>
	
            </div>
            

			<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="Submit" class='go'>
					</label>
					<p>Registered?</p>
				<a href="/login" class="hvr-shutter-in-horizontal">Login</a>
            </div>
            
        </form>

			<div class="clearfix"> </div>
		</div>
	</div>
		<!---->
		<div class="copy-right">
				@include('users.includes.footer')   
				 </div>  
		<!-- <p> &copy; 2018 DutyPost. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>  
		-->
		@include('users.includes.js')
			<!--//js-->
</body>
</html>

