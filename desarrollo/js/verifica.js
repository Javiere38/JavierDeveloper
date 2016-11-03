function verifica(){
	$(document).ready(function() {	
	$('#user').blur(function(){
		
		$('#Info').html('').fadeOut(1000);

		var user = $(this).val();		
		var dataString = 'user='+user;
		
		$.ajax({
            type: "POST",
            url: "verifica.php",
            data: dataString,
            success: function(data) {
				$('#Info').fadeIn(1000).html(data);
				//alert(data);
            }
        });
    });              
});    
}
