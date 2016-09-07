$(document).ready(function(){
	$('#main-content [rel=tooltip]').tooltip();
    $('#main-content [rel=popover]').popover();
    $('.nav li').eq(0).removeClass('active');
    $('.nav li').eq(1).addClass('active');
});