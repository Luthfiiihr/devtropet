@extends('layouts.login')
@section('content')

<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" id="log" onclick="login()" style="color: #fff;">Log In</button>
				<button type="button" class="toggle-btn" id="reg" onclick="register()">Register</button>
			</div>
			<div class="social-icons">
				<img src="images/icon/fb2.png">
				<img src="images/icon/insta2.png">
				<img src="images/icon/tt2.png">
			</div>
			
			<!-- Login Form -->
			<form id="login" class="input-group" action="{{ route ('index') }}">
				<div class="inp">
					<img src="images/icon/user.png"><input type="text" id="email" class="input-field" placeholder="Username or Phone Number" style="width: 88%; border:none;" required="required">
				</div>
				<div class="inp">
					<img src="images/icon/password.png"><input type="password" id="password" class="input-field" placeholder="Password" style="width: 88%; border: none;" required="required">
				</div>
				<input type="checkbox" class="check-box">Remember Password
				<button type="submit" class="submit-btn">Log In</button>
			</form>


			<div class="other" id="other">
				<div class="instead">
					<h3>or</h3>
				</div>
				<button class="connect" onclick="google()">
					<img src="images/icon/google.png"><span>Sign in with Google</span>
				</button>
			</div>
			
			<!-- Registration Form -->
			<form id="register" class="input-group">
				<input type="text" class="input-field" placeholder="Full Name" required="required">
				<input type="email" class="input-field" placeholder="Email Address" required="required">
				<input type="password" class="input-field" placeholder="Create Password" name="psame" required="required">
				<input type="password" class="input-field" placeholder="Confirm Password" name="psame" required="required">
				<input type="checkbox" class="check-box" id="chkAgree" onclick="goFurther()">I agree to the Terms & Conditions
				<button type="submit" id="btnSubmit" class="submit-btn reg-btn">Register</button>
			</form>
		</div>
@stop