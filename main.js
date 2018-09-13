	function refresh()
{
  $.ajax({
		type: "GET",
		url: "express_status.php",
		error: function(err) {
			console.log(err);
		},
		success: function(result) {
			$("span.steamstatus").html(result);
		}
	});
	
	setTimeout(refresh, 1000);
}
