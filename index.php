<!DOCTYPE html>
<html>
    <head>
        <title>Passaic Vision</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="pv.css" type="text/css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script type="text/javascript">
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
        </script>
    </head>
   
    <body onload="fadeInFadeOutAnime();">
        <?php include 'header.php'; ?>
        <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'es,it'}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
       <div id="container" data-orbit>
           <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?ie=UTF8&amp;cid=6380703124201646712&amp;q=Passaic+Vision+Center&amp;gl=US&amp;hl=en&amp;t=h&amp;ll=40.864864,-74.126151&amp;spn=0.007789,0.013733&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe>
            <img id="1"src="img/center.jpg" name="slide"/>
            <img id="2" src="img/rightangle.jpg"/>
            <img id="3" src="img/leftangle.jpg"/>
         
         <div id="location">
            <address>
                <p>289 Monroe Street Passaic, NJ, 07055<br/>
                    <strong>Phone:</strong>&nbsp(973) 473-5151 &nbsp
                <strong>fax:</strong>&nbsp(973) 473-3331</p>
            </address>
        </div><!--end of location-->
       </div><!-- end of container-->  
        
       
       <div id="mission">
           <h2>Mission Statement</h2>
          <p>Passaic Vision Center llc is a health service company. Located in the hearth of Passaic 
              in the state of New Jersey. We are in charge of the eye health of our community. 
              We as a clinic and nevertheless as human beings, take care of our community no just as a chart number, 
              but as a member of this community. Our Staff members and Ophthalmologists are here to take care of your eyes,
              by providing an excellent service, the most accurate equipment of the area, and the most knowledgeable staff.
              </p>
              <br/>
              <p>
              We, as family members and members of the Passaic Community, 
              are always seeking for our community's best interest, for that reason we expanding our store, 
              and offering the most affordable prices in the county. We keep our business going because of you 
              the patient and our most valuable family member. We learn more from the community everyday so we 
              put it into practice everyday, that reflects on our performance on and off the premises.
          </p>
          <br/>
          <p>
              A word from Doctor Mendoza: “After more than forty years as a Physician, specialized in Ophthalmology (eyes), 
              I know and I feel that<strong>NOW</strong> I am more qualified to provide my patients <strong>the best integral eye care.</strong> 
              Each patient is a whole person and not just a pair of sick eyes.” 
              Believe it to see it followed by see it to believe it.
          </p>
         </div><!-- end of mission-->
        
        <?php include 'footer.php'; ?>
    </body>
</html>
