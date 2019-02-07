$(document).ready(function() {
    $(".nav-contact").addClass("active");

    $("#contact-form").submit(function(event) {
    	event.preventDefault();

        $("#submit-btn").hide();
        $("#sending").show();

    	var form = $(this);
    	var data = form.serialize();

    	$.ajax({
    		url: "helpers/email.php",
    		type: "post",
    		data: data,
    		success: function(result) {
    			alert("Thank you for sending message . . . We will Contact you soon");
    			$("#cus_name, #cus_email, #cus_tel, #co_name, #cus_message").val('');
                // $("#contact-form").html(result);
                location.reload(true);
    		},
    		error: function() {
    			alert("Sorry, your message couldn't be Sent !!!");
    		}
    	});
    });
});
