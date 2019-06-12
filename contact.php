<?php
    include "template.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h1>Contact Platinum House Today!</h1>
            <p>If you are intrested in viewing on of our avaiable spaces please fill out the contact form below and we will arrange a meeting as so as possible.</p>
                   
            <form action="send.php" method="POST">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                <label for="company">Company Name</label>
                <input type="text" class="form-control" name="company" placeholder="Company Name" required>
                <label for="email">E-Mail</label>
                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                <label for="message">Type your message here</label>
                <textarea rows="6" cols="50" class="form-control" name="message" placeholder="Let us know how we can help you" required></textarea>
                <input type="submit" class="btn btn-primary" value="Submit"><input type="reset" value="Clear Form" class="btn btn-danger">
            </form> 
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
