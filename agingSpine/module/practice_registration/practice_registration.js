$(document).ready(function() {
	$('#state').change(function(){
		var st = $(this).val();
		var base_url = '';
		if(st!='')
		{

			var url =base_url+'/find/member/' + st+'/ajax';
			$('.find-member-data').fadeOut(300);
			 
			$.post(url, function(data) {
				$('.find-member-data').html(data);
				$('.find-member-data').fadeIn(300);
				 
				});


			}
	
	});	





});

