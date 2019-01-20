
<!DOCTYPE HTML>
<html>
<head>
<title>Artisan - Login</title>
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
            <h2>Login</h2>
            
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
			<div class="col-md-6">
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
				<div class="login-mail">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        </div>
					<input type="text" name='email' id='email' placeholder="Email" value="{{ old('email') }}" required autofocus>
                    <i class="fa fa-envelope"></i>
                   
                </div>
              
				<div class="login-mail">
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        </div>
					<input type="password" id='password' placeholder="Password" name="password" required>
                    <i class="fa fa-lock"></i>
                   
                </div>
                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
             <!--   <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>-->
				   <a class="news-letter " href="#">
						<a href='{{ route('password.request') }}'> Forgot Password?</a>
					   </a><br>

			
			</div>
			<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="login">
					</label>
					<p>No account?</p>
				<a href="/register" class="hvr-shutter-in-horizontal btn">Signup</a>
			</div>
			
			<div class="clearfix"> </div>
			</form>
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



