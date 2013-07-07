<!--Adapted from TangledByDesign-->
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: TangledDemo'; 
    $to = 'contact@designinktank.com'; 
    $subject = 'Hello';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
    if ($_POST['submit']) {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p id="php">Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>
<!DOCTYPE html>
<html lang="en-us">
<html>
<head>
<link rel="SHORTCUT ICON" href="/flavicon.ico">
<!--Stylesheets-->
<link rel="stylesheet" type="text/css" media="all" href="CSS/master.css">
<link rel="stylesheet" type="text/css" media="all" href="CSS/contact.css">
<link href="CSS/lightbox.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400' rel='stylesheet' type='text/css'>

<link href="CSS/contact.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="logo"> <img src="images/logoTransparent.png" width="230px"  alt="Ink Tank"> </div>
<div id="main">
  <div id="main2">
    <div id="blurb">
      <h1>Hello,</h1>
      <p>We are Alex and Jacob and this is our design firm, Ink Tank. Jacob does design, Alex does code. Together with our clients we create compelling visual and interactive experiences. We are currently studying at Oberlin College, where, after years of artistic collaboration, we have finally launched our studio. We approach design as an integrated process. By working closely with our clients and understanding their specific goals and missions, we are able to craft for them a unique artistic identity. </p>
    </div>
    <div id="wrapper">
      <div id="gallery">
        <div id="containter">
          <div class="single"> <a href="images/portfolio/houses.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."> <img id="houses" src="images/houseT.jpg" alt="Image 1 0f 4 thumb" /></a> <a href="images/portfolio/boot6.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key." > <img id="boot" src="images/bootT1.jpg" alt="Image 2 0f 4 thumb" /></a> </div>
          <div class="single"> <a href="images/portfolio/boot2.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="images/bootT2.jpg" alt="Image 3 0f 4 thumb" /></a> <a href="images/portfolio/boot3.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="images/bootT3.jpg" alt="Image 4 0f 4 thumb" /></a> </div>
          <div class="single"> <a href="images/portfolio/bootTop.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="images/bootT4.jpg" alt="Image 3 0f 4 thumb" /></a> <a href="images/portfolio/boot5.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="images/bootT5.jpg" alt="Image 4 0f 4 thumb" /></a> </div>
          <div class="single"> <a href="images/portfolio/skateboardB2.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="images/boardT1.jpg" alt="Image 3 0f 4 thumb" /></a> <a href="images/portfolio/american.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="images/roomT1.jpg" alt="Image 4 0f 4 thumb" /></a> </div>
          <div class="single"> <a href="images/portfolio/skateboardB.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="images/boardT2.jpg" alt="Image 3 0f 4 thumb" /></a> </div>
          <div class="single"> <a href="images/portfolio/old.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="images/oldhouseT1.jpg" alt="Image 3 0f 4 thumb" /></a> </div>
          <div class="single"> <a href="images/portfolio/typewriter.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."> <img src="images/typeT1.jpg" alt="Image 3 0f 4 thumb" /></a> <a href="images/portfolio/jerusalem.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"> <img src="images/jeruT1.jpg" alt="Image 4 0f 4 thumb" /></a> </div>
        </div>
      </div>
    </div>
    
  <div id="contact">
      <p><a href="mailto:contact@designinktank.com">boomdonerecords@gmail.com</a> | 617-893-1070</p>
    </div> 
    
    <form method="post" action="index.php">
      <div style="float:left">
        <label>Name</label>
        <input name="name" placeholder="Type Name Here">
      </div>
      <div style="float:right">
        <label>Email</label>
        <input name="email" type="email" placeholder="Type Email Here">
      </div>
      <label>Message</label>
      <textarea name="message" placeholder="Type Here"></textarea>
      <input id="submit" name="submit" type="submit" value="Submit">
    </form>
  </div>
</div>
<a href="http://www.boomdonerecords.com">boomdone</a><br/>
<a href="stereocure.html">stereocure</a>
<!--The bottomSec contains the contact form-->
<div id="footer"></div>

<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script> 
<script type="text/javascript" src="js/jquery.smooth-scroll.min.js"></script> 
<script type="text/javascript" src="js/lightbox.js"></script> 


<script>
//  $("#php").click(function () {
  $("#php").fadeIn(900).delay(1500).fadeOut(1000);	
  </script>

<script type="text/javascript">// <![CDATA[
jQuery(document).ready(function($) {
      $('a').smoothScroll({
        speed: 1000,
        easing: 'easeInOutCubic'
      });

      $('.showOlderChanges').on('click', function(e){
        $('.changelog .old').slideDown('slow');
        $(this).fadeOut();
        e.preventDefault();
      })
  });

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2196019-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
// ]]></script>
</body>
</html>