<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact form</title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />  	  		
 	<!-- boostrap -->

	<link rel="stylesheet" href="assets/animate.css">
	<link rel="stylesheet" href="assets/style.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	

</head>
<body>
  <div id="contact" class="spacer">
    <div class="contactform center">
      <div class="row">      
        <div class="col-sm-6 col-sm-offset-3 ">
        <form method="POST" id="mail" method="post"> 
        <input type="text" id="name" name="name" placeholder="Name">
        <input type="text" id="email" name="email" placeholder="Email">
        <textarea rows="5" id="message" name="message" placeholder="Message"></textarea>
        <button id="submit" type="submit" class="btn btn-warning bgcolor">Send</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  <!-- boostrap -->
  <script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>
  <script src="assets/scripts/mail.js" type="text/javascript"></script>
  </body>
  </html>