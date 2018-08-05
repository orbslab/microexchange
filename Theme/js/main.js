$(document).ready(function(){
	$("#pass2").keyup(checkPasswordMatch);
	$("#username").keyup(function(){
		var username = $("#username").val();
		if(username.length >= 3) {
			$.post("un_check.php", {username: username}, function(data, status) {
				$("#status").html(data);
			});
		}
	});
});

function checkPasswordMatch() {
    var password = $("#pass1").val();
    var confirmPassword = $("#pass2").val();

    if (password != confirmPassword) {
        $("#match").html("<p style='color: red;'>Passwords do not match!</p>");
    } else {
        $("#match").html("<p style='color: green;'>Passwords matched</p>");
    }
}