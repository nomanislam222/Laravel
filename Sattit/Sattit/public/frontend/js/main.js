// contact from
$("#contact_form").submit(function(e) {
	if (window.FormData !== undefined) {
		var formData = new FormData(this);
		$.ajax({
			url: 'send_temp_contact_data.php',
			type: 'POST',
			data: formData,
			contentType: false,
			cache: false,
			processData: false,
			success: function(data, textStatus, jqXHR) {
				if (data == 'success') {
					$('#contact_form').hide();
					$('#contact_form_msg').show();
				} else {
					$('#contact_form').hide();
					$('#contact_form_msg_error').show();
				}
			}
		});
		e.preventDefault();
	}
});

// contact from
$("ul.contact-us").find('button').click(function(e) {
	var email = $("ul.contact-us").find('input').val();
	$.ajax({
		url: 'send_temp_email_list.php',
		type: 'POST',
		data: 'email='+email,
		success: function(data, textStatus, jqXHR) {
		    alert(data);
			$("ul.contact-us").find('input').val('');
		}
	});
});