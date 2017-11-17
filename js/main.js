jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
/**---------------------------modal------------------------------------------------------**/
	function vidplay() {
       var audio = document.getElementById('audio');
       if (audio.paused) {
          audio.play();
		  $('#play').hide();
		  $('#pause').show();
       }
	   else {
          audio.pause();
          $('#play').show();
		  $('#pause').hide();
       }
    }
    function restart() {
        var audio = document.getElementById("audio");
        audio.currentTime = 0;
    }

    function skip(value) {
        var audio = document.getElementById("audio");
        audio.currentTime += value;
    } 

	
 /**-----------------------------------volume--------------------------------------------**/
function volume(){
	$("up").click(function(){
		$("#up").hide();
		$("#down").show();
		$("#off").hide();
	});
	$("down").click(function(){
		$("#up").hide();
		$("#down").hide();
		$("#off").show();
	});
	
	$("off").click(function(){
		$("#up").show();
		$("#down").hide();
		$("#off").hide();
	});
	
} 

















