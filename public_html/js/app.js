$(document).ready(function(){
	// account tools

	// signup page
	if($("form#signupForm").length) {

		$("form#signupForm").broncoForm({
			success: function(status, response) {
				alert("Signed up! Email Sent");
				$("form#signupForm").find("input, select, textarea").val("");
				window.location.href = "/";
			},
			error: function(status, response) {
				for(var key in status.errors) {
					alert(status.errors[key]);
					break;
				}
			
			}
		});
	}

	///////////////////
	// contact page 
	if($("form#contactForm").length) {

		$("form#contactForm").broncoForm({
			success: function(status, response) {
				alert("Sent!");
				$("form#contactForm").find("input,select,textarea").val("");
			},
			error: function(status, response) {
				if(status.errors) {
					for(var key in status.errors) { // display the very first error that we are aware of
						alert(status.errors[key]);
						break;
					}
				}
			}
		});
	}
});