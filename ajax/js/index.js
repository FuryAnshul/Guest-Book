$('document').ready(function()
{
	//alert('hi');
	$('.flash').hide();
	$('#submit').click(function()
	{
		var email= $('#email').val();
		var pass= $('#password').val();
		
		if(email=='')
		{
			var eemail= "Please enter email";
			$('#erroremail').text(eemail).show();
			setTimeout(function()
			{
			$('#erroremail').hide();
			},3000);
			
			$('#email').focus();
			return false;
		}
		else if(pass=='')
		{
			//alert('hi');
			var epass="Please enter password";
			$('#errorpass').text(epass).show();
			setTimeout(function()
			{
				$('#errorpass').hide();
			},3000);
		}
		else
		{
			$.ajax
			({
			type : 'POST',
			url : 'index_page.php',
			data : 'email_address='+email+'&password='+pass, 
			cache : false,
			
			success : function(returndata)
			{
				//alert(returndata);
				
				if(returndata=='true')
				{
					window.location = "dashboard.html";
				}
				else
				{
					var msg = "You are not authorised user";
					$('#msg').text(msg).show();
					$('.flash').show();
				}
				
			}
			});
		}
	});
	
});