<?php
    $title = 'Platinum House Contact Page';

    include "template.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h1>Contact Platinum House Today!</h1>
            <p>If you are interested in viewing one of our available spaces please fill out the contact form below and we will arrange a meeting as so as possible.</p>
                   
            <form action="/send.php" method="POST">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                <label for="company">Company Name</label>
                <input type="text" class="form-control" name="company" placeholder="Company Name" required>
                <label for="email">E-Mail</label>
                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                <label for="message">Type your message here</label>
                <textarea rows="6" cols="50" class="form-control" name="message" placeholder="Let us know how we can help you" required></textarea>
                <div class="g-recaptcha" data-sitekey="6Lej4qgUAAAAAGpsdIGjK4arMtsbFRKcA3lFrGzS"></div>

                <input type="submit" class="btn btn-primary" value="Submit">
            </form> 
            <h2>151 Merrylee Rd</h2>
            <h3>Glasgow</h3>
            <h4>G44 3DL<h4>
            <h5>0141 266 0098</h5>
            <a class="contactLinks" href="mailto:office@platinum-house.co.uk"><p>office@platinum-house.co.uk</p></a>
        </div>
        <div class="col-sm-6">
            
        <img src="images/officeSign.jpg" class="office-image" alt="image of company sign outside building"> 
        </div>
    </div>
</div>
<div class="second-theme"> 
    
 
    <div class="container">
    <div class="google-maps">  
        <div class="row">
            <div class="col-lg-12">
        <iframe  src="https://www.google.com/maps/embed?pb=!4v1559557416108!6m8!1m7!1sZkIa0qJLRV1ZbL0Wb79pIg!2m2!1d55.81384110409522!2d-4.267553457881137!3f10.749137891922423!4f10.470667320028241!5f0.7820865974627469" width="1200" height="450" frameborder="10" style="border:0" allowfullscreen></iframe>
        
        </div><div class="row">
        <div class="col-lg-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2241.8151900777953!2d-4.26857822013705!3d55.81380875370674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x488847016d72612b%3A0x21e4eaf88a562324!2sThe+Platinum+Group!5e0!3m2!1sen!2suk!4v1560507998178!5m2!1sen!2suk" width="1200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
    </div>
</div></div>

</div>

<?php
    include "footer.php";
?>
