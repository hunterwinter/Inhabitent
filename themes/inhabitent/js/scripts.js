jQuery(document).ready(function( $ ) {

	$("#search-field").hide();
    
    $(".search-btn").on('click', function(){
        event.preventDefault();
        $("#search-field").toggle('slide').focus();
    });
    
});