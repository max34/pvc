/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function()
					
{
					
    fadeInFadeOutAnime(); 
    //call to function which will start the animation
    function fadeInFadeOutAnime(){ //definition of animation function 
    $('#container #1').fadeIn(2000).delay(1800).fadeOut(2000, function(){ //	using id of img element we start a chain of fade in, delay
    $('#container #2').fadeIn(2000).delay(1800).fadeOut(2000, function(){ //	, and fade out events that will end
    $('#container #3').fadeIn(2000).delay(1800).fadeOut(2000, function(){
    
						
    fadeInFadeOutAnime();});													//	in a call to the same function, making it a recursive infinite loop...
						});});
												 }
						
					}
				  );
function Slide(){
             $("#container #1").show("fade",500);
             $("#container #1").delay(5500).hide("slide",{direction:'right'},500);
             
             var sc = $("#slider img").size();
             var count = 2;
             
             setInterval(function(){
                 $("#container #"+count).show("slide",{direction:'left'},500);
                 $("#container #"+count).delay(5500).hide("slide",{direction:'right'},500);
                 
                 if(count === sc){
                     count = 1;
                         }else{
                           count = count + 1;  
                         }
             },6500);
             
            }
        
      