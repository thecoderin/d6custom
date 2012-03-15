/* Jquery validation */
function enable_submit() {
var value = $("#agree_checkbox").attr('checked');
  if(value) {
	$("#member_add_button").removeAttr('disabled')
  }
  else {
	$("#member_add_button").attr('disabled', 'disabled');
  }
}

$(document).ready( function(){
  $("#agree_checkbox").attr('checked', false);
  $("#agree_checkbox").click(enable_submit)
});