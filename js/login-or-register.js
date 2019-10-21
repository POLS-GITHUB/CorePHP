$(document).ready(function(e) {
    $('.register-form').hide();
	$('#voter').hide();
	$('#personal').hide();
	
	$('#register-link').click(function(e) {
        $('.register-form').slideDown(500);
        $('.login-form').hide(500);
		$('#personal').hide();
		$("#next-page").click(function(e) {
			$("#voter").slideDown(500);
            $('#personal').slideDown(500);
			
                         
        });
    });
});

 $(document).ready(function(e) {
   $('#dob').datetimepicker({ }); 
   $('#doi').datetimepicker({ });
});

<!-- JAVASCRIPT -->

