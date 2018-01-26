$(document).ready(function(){

	

	$('#signupForm input[name="username"]').keyup( function() {
	    var username = $(this).val();

	    $('#username_status').text('Searching...');

	    if(username != '') {
	       	$dulieu = {
	       		username : username
	       } 
	       $.ajax({
	       		url: "signup/check",
	       		method: "POST",
	       		data: $dulieu,
	       		success: function(data){
	       			var result = $.trim(data);
		            if(result === "0"){
		            	$('#username_status').text("Username available");
		            	document.getElementById("signupButton").disabled = false;
		            }else{
		            	$('#username_status').text("Username already exists");
		            }
	       		}
	       });
	    }
	    else {
	        $('#username_status').text('');
	    }
	});

});




// $.post('signup/check', { username: username}, function(data) {
	            
	            
// 	        });