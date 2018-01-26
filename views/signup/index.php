<div class="signup">
	
	<form id="signupForm" method="POST" action="signup/signup">
		<legend><h2>Sign up</h2></legend>
		<input type="text" name="firstname" placeholder="First Name" required>
		<input type="text" name="lastname" placeholder="Last Name" required>
		<input type="number" name="age" placeholder="Age" required>
		<input type="email" name="email" placeholder="Email" required>
		<input type="text" name="gender" placeholder="Gender" required>
		<input type="text" name="username" placeholder="Username" required><br>
		<span id="username_status"></span><br>
		<input type="password" name="password" placeholder="Password" required>
		<button id="signupButton" type="submit" disabled="true" >Đăng kí</button>
	</form>
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="public/js/validate.js" type="text/javascript"></script>
	
</div>