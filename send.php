<?php
 
 if($_POST) {
	 $visitor_name = "";
	 $visitor_company ="";
     $visitor_email = "";
     $visitor_message = "";
     $email_title ="Message from Platinum House contact form.";
     $recipient="marcinglis91@hotmail.com";
      
     if(isset($_POST['name'])) {
         $visitor_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	 }
	 if(isset($_POST['company'])) {
		$visitor_company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);
	}
      
    
     if(isset($_POST['email'])) {
         $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
         $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
     } 
      
     if(isset($_POST['message'])) {
        $visitor_message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

     }    
      
     $header = "From: noreply@platinumhouse.com\r\n" 
    . "MIME-Version: 1.0\r\n" .
    "Content-Type: text/plain; charset=utf-8\r\n" .
    "X-Priority: 1\r\n"; 
     if(mail("marcinglis91@hotmail.com", $email_title, $visitor_message, $header)) {
         echo "<p>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
     } else {
         echo '<p>We are sorry but the email did not go through.</p>';
     }
      
 } else {
     echo '<p>Something went wrong</p>';
 }
  
 ?>

<?php
    include "template.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
			<h1>Thank you for your message!</h1>
			<p>We will try to respond as soon as possible.</p>    
            <h2>151 Merrylee Rd</h2>
            <h3>Glasgow</h3>
            <h4>G44 3DL<h4>
            <h5>0141 266 0098</h5>
            <p>office@platinum-house.co.uk</p>

        </div>
        <div class="col-lg-6">
            
        <img src="images/officeSign.jpg" class="office-image" alt="image of company sign outside building"> 
        </div>
    </div>
</div>

<div class="second-theme">    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
        <iframe class="googleMaps" src="https://www.google.com/maps/embed?pb=!4v1559557416108!6m8!1m7!1sZkIa0qJLRV1ZbL0Wb79pIg!2m2!1d55.81384110409522!2d-4.267553457881137!3f10.749137891922423!4f10.470667320028241!5f0.7820865974627469" width="1200" height="450" frameborder="10" style="border:0" allowfullscreen></iframe></div>
        
        </div>
    </div>
</div>

        </div>

<?php
    include "footer.php";
?>
