$(document).ready(function() {
    $(".nav-contact").addClass("active");

    $("#contact-form").submit(function(event) {
    	event.preventDefault();

        $("#submit-btn").hide();
        // $("#sending").show();
        Swal.fire({
            title: 'Sending Message . . . ',
            text: 'It will take just a moment',
            backdrop: 'rgba(0, 0, 0, 0.75)',
            allowOutsideClick: false,
            onBeforeOpen: () => {
                Swal.showLoading()
            },
            padding: '5rem'
        });

    	var form = $(this);
    	var data = form.serialize();

    	$.ajax({
    		url: "helpers/email.php",
    		type: "post",
    		data: data,
    		success: function(result) {
                Swal.fire({
                    title: 'Message Sent☺',
                    text: 'We will contact you soon',
                    type: 'success'
                }).then(function() {
                    window.location = "contact";
                });
    		},
    		error: function() {
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    footer: '<b>Please try again later</b>'
                }).then(function() {
                    window.location = "contact";
                });
    		}
    	});
    });
});
