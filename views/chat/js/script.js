$(document).ready(function(){
	//Gửi khi người dùng click hoặc enter
	$("#btnSend").click(function(event){
		event.preventDefault();
		sendMsg();
	});
	$("textarea").keypress(function(event){
		var keycode = (event.keyCode ? event.keyCode : event.which);
		if (keycode == '13') {
			sendMsg();
		}
	});

	function sendMsg(){
		var name = document.getElementById("name").innerHTML;
		$dta = {
			"username": name,
			"message_send": $("#appForm1 textarea[name='message_send']").val(),

		};
		$.ajax({
			url: "chat/sendMsg",
			method: "POST",
			data:$dta,
			success: function(){
				gotoBottom("reloadbox");
				$("#appForm1 textarea[name='message_send']").val("");
			}
		});
	}
	//-------------Vòng lặp sử dụng ajax------------//
	
		
	
	setInterval(function(){
		refreshPage();
	},1000);

	function gotoBottom(id){
  		var element = document.getElementById(id);
  		element.scrollTop = element.scrollHeight - element.clientHeight;
	}
	function refreshPage(){
		gotoBottom("reloadbox");
		$.ajax({
			url : "chat/getMsg",
			success : function(data){
				var txt= "<div class='box'>";
		 		for (var i = 0 ; i < data.length; i++) {
		 			txt+="<div class='lineChat'><b>"+data[i].user+'['+data[i].timeline+"]</b>:" + data[i].msg + "</br></div>";
		 		}
		 		txt+="</div>";
		 		$("#reloadbox").html(txt);

		 		return true;
			},
			dataType: "json"
		});

	}


	$("button#changeStyle").click(function(event){
		var code;
		event.preventDefault();
		$("div.test").toggle(300);
		$("div.profile").toggle(500);
		
	});
});