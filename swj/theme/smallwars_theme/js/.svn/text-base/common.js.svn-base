$(document).ready(function(){

	var searchTextDefault = 'Search';
	

	if ($('#edit-search-theme-form-1').val() =='')
	{
		$('#edit-search-theme-form-1').val(searchTextDefault);
	}
	
		$('#edit-search-theme-form-1').click(function(){
			if ($('#edit-search-theme-form-1').val() ==searchTextDefault )
			{
				$(this).val('');
			}
		});
		$('#edit-search-theme-form-1').blur(function(){
			if ($('#edit-search-theme-form-1').val() =='' )
			{
			$(this).val(searchTextDefault);
			}
		});

		// IMCE : A check on the file uploader to disallow any files with spaces in their names.
		var imce_up = $('[name=files\[imce\]]');
		imce_up.change(function(){
			var reg = /\s/;
			if(reg.test(imce_up.val())){ 
				alert ('Please avoid spaces in file names'); 
				imce_up.val('');
			}
			
		});

		$("table.caption tr:last").addClass('caption-row');
});