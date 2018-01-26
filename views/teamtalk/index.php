
<div class="chat">
<h1>Talk Room</h1>
	<div id="reloadbox"></div>
	
		<?php 
			if(!isset($_SESSION['name'])){
				echo '<script language="javascript">';
				echo 'alert("Bạn phải đăng kí để sử dụng tính năng này.")';
				echo '</script>';
			}else{
				echo '
					<form name="form1" id="appForm1" action="post.php" method="POST" role="form">
						<label id="chat-name">Name:<span id="name">'.$_SESSION["name"].'</span></label><br>
						<label>Comment:</label>
						<textarea name="message_send" id="sendMsg"></textarea>
						<button id="btnSend" >Gửi</button>
					</form>';
			}
		?>
		
	
</div>

<script src="views/teamtalk/js/script.js" type="text/javascript" charset="utf-8" async defer></script>
