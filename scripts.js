$(document).ready(function() {

	
	$("#shortenLinkButton").click(function() {
		if ($(this).text() == "Shorten!") {
			$(this).text("New link?");
			let url = $("#shortenLink").val();
			
			$.post("system/short.php", { url: url }, function(data) {
				$("#shortenLinkCopy").val(data);
				$("#shortenLink").hide('slide', { direction: 'left' }, 1000);
				$("#shortenLinkCopy").show('slide', { direction: 'right' }, 1000);
				$("#shortenLinkCopy").select();
			});
		} else {
			$(this).text("Shorten!");
			
			$("#shortenLink").val("");
			$("#shortenLink").show();
			$("#shortenLinkCopy").hide();
		}
	});
});



