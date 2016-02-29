$(document).ready(function() {

	$("#form").submit(function() {
		$.ajax({
			type: "POST",
			url: "../php/mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку. Мы свяжемся с вами в ближайшее время.");
			$("#form").trigger("reset");
		});
		return false;
	});
	
});