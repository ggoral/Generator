$(function() {
	$( 'form' ).submit
	(
		function()
		{
			$.ajax({
				type: 'GET',
				url: 'generate.php',
				data: $(this).serialize(),
				processData: false,
				contentType: false,
				success: function(data) {
					console.log(data);
					Materialize.toast("Your password had been generated", 4500 );
					$( '#response' ).empty();
					$( '#response' ).text(data);
				}
			});
			
			return false;
		}
	);
});