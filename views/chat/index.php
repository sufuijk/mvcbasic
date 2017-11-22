
<div class="chat">
<h1>Chat group</h1>
	<div id="reloadbox"></div>
	<form name="form1" id="appForm1" action="post.php" method="POST" role="form">
		<?php 
			if(!isset($_SESSION['name'])){
				echo '<script language="javascript">';
				echo 'alert("Bạn phải đăng kí để sử dụng tính năng này.")';
				echo '</script>';
			}else{
				echo '<label>Name:<b><span id="name">'.$_SESSION["name"].'</span></b></label><br>
					<label>Comment:</label>
					<textarea name="message_send" id="sendMsg"></textarea>
					<button id="btnSend" >Gửi</button>';
			}
		?>
		
	</form>
</div>
<script type="text/javascript" src="views/chat/js/script.js"></script>