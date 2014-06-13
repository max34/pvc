<!DOCTYPE html>
<html>
    <head>
        <title>Passaic Vision</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="pv.css" type="text/css">
        <link rel="stylesheet" href="bootstrap.css" type="text/css">
        <link rel="stylesheet" href="foundation.css" type="text/css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script type="text/javascript">
           $(document).ready(function()
					
{
					
    fadeInFadeOutAnime(); 
    //call to function which will start the animation
    function fadeInFadeOutAnime(){ //definition of animation function 
    $('#container #1').fadeIn(2000).delay(1800).fadeOut(2000, function(){ //	using id of img element we start a chain of fade in, delay
    $('#conatiner #2').fadeIn(2000).delay(1800).fadeOut(2000, function(){ //	, and fade out events that will end
    $('#container #3').fadeIn(2000).delay(1800).fadeOut(2000, function(){
    
						
    fadeInFadeOutAnime();});													//	in a call to the same function, making it a recursive infinite loop...
						});});
												 }
						
					}
				  );
        </script>
    </head>
   
    <body>
        <?php include 'header.php'; ?>
      
 
       <div class="orbit-container" id="slider">
          <ul data-orbit class="example-orbit orbit-slides-container">
            <li>
                <img id="1" src="img/right.JPG" alt="slide 1" />
               <div class="orbit-caption">Caption One.</div>
            </li>
            <li class="active">
                <img id="2" src="img/leftangle.jpg" alt="slide 1" />
               <div class="orbit-caption">Caption Two.</div>
            </li>
            <li>
                <img id="3" src="img/rightangle.JPG" alt="slide 1" />
               <div class="orbit-caption">Caption Three.</div>
            </li>
          </ul>

                    <!-- Navigation Arrows -->
            <a href="#" class="orbit-prev">Prev <span></span></a>
            <a href="#" class="orbit-next">Next <span></span></a>

                    <!-- Slide Numbers -->
            <div class="orbit-slide-number">
             <span>1</span> of <span>3</span>
            </div>

                  <!-- Timer and Play/Pause Button -->
            <div class="orbit-timer">
             <span></span>
             <div class="orbit-progress"></div>
            </div>
            </div>
        
                  <!-- Bullets -->
            <ol class="orbit-bullets">
              <li data-orbit-slide-number="1"></li>
              <li data-orbit-slide-number="2" class="active"></li>
              <li data-orbit-slide-number="3"></li>
            </ol>
              
           
             <div class=" large-4 columns medium-3 columns small-12 columns">
                 <a href="/passaicVision/services.php"><div class="panel callout">
                  <h5>Learn more about</h5>
                  <ul>
                     <li><a href="/passaicVision/services.php">Services</a></li>
                     <li><a href="#">location</a></li>
                  </ul>
                  </div>
             </div>
             
              <div class=" large-4 columns medium-3 columns small-12 columns">
                 <a href="/passaicVision/appointment/appointment.php"><div class="panel callout">
                  <h5>Appointment</h5>
                  <p>Make an appointment and look for our office hours. <br/>
                  See your doctor's schedule</p>
                  </div></a>
             </div>
             
              <div class=" large-4 columns medium-3 columns small-12 columns">
                 <a href="/passaicVision/testimony/testimony.php"><div class="panel callout">
                  <h5>Comment</h5>
                  <p>Give us a comment and let us know how we can improve</p>
                  </div></a>
             </div>
             
                  
           

        
        <?php include 'footer.php'; ?>
         <script src="../jquery.min.js"></script>
         <script src="../bootstrap.min.js"></script>
  
    </body>
</html>
