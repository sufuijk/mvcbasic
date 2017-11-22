<div class="signup">
	
	<form id="signupForm" method="POST" action="signup/getAccount">
		<legend><h4>SIGN IN</h4></legend>
		<label>First name:</label>
		<input type="text" name="firstname" required>
		<label>Last name:</label>
		<input type="text" name="lastname" required>
		<label>Age:</label><br>
		<input type="number" name="age" required>
		<label>Email:</label><br>
		<input type="email" name="email" required>
		<label>Gender:</label><br>
		<input type="text" name="gender" required>
		<label>Username:</label><br>
		<input type="text" name="username" required>
		<span id="username_status"></span><br>
		<label>Password:</label>
		<input type="password" name="password" required>
		<button id="signupButton" type="submit" disabled="true" >Đăng kí</button>
	</form>
</div>