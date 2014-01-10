$(document).ready( function() {
			$("#result").hide();
var typingTimer;
var doneTypingInterval = 1000;			

$("#key").keyup( function(event){
	clearTimeout(typingTimer);
	typingTimer = setTimeout(function(){
	var s = $("#key").val();
		if( s != ''){
			$.ajax({
			type: "POST",
			data: {verse_text: s},
			url:"class/search.php",
			success: function(response) {
			$("#result").slideDown().html(response); 
			}
			})
			
		}else{
			var str = '<strong>Search for a word or text in Bible</strong>';
			$("#result").html(str);
		}
	},
		doneTypingInterval
	);

 })  

});

$(function(){

      $("#menuSearch").click(function(){
           $(".search").slideDown(); 
           $("#searchOverlay").show();  
     });

     $("#searchOverlay").click(function(){
          $(".search").slideUp(); 
           $("#searchOverlay").hide();
     });
     
     

});



