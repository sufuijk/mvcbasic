		<div class="left-page">
			<div class="logo">
				<img src="https://2.bp.blogspot.com/-lgOqVCzyJso/Wf-_CmfeGvI/AAAAAAAACCk/lcbdoojp7cwPh3bmHUzqdB1VXt8XN9AEQCEwYBhgL/s1600/logo.jpg">
			</div>
			<div class="quote">
				<p>Born in the different places, together join in one class, this is our family</p>
			</div>
			<div class="nav">
				<ul>
					<a href="home"><li>Home</li></a>
					<a href="teamtalk"><li>TeamTalk</li></a>
					<?php if(!isset($_SESSION['name'])){
						echo '<a href="login"><li>Login</li></a>';
						echo '<a href="signup"><li>Sign up</li></a>';

					}else{
						echo '<a href="login/logout"><li>Logout</li></a>';
					} 
					?>
			</div>
			<div class="info">
				Design by DA15TTB
				
			</div>
		</div>
