<!doctype html>
<html>
  <head>
  <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta name="description" content="Executive Office Spaces in the southside of glasgow">
    <meta name="keywords" content="Executive, Office, Spaces, Glasgow">
    <meta name="author" content="Marc Inglis">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Roboto&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  </head>
  <body id="body">
    
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container-fluid">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Platinum House</a>
      </div>
      <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){echo 'active'; }else { echo ''; } ?>"><a href="index.php">Home</a></li>
          <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'offices.php'){echo 'active'; }else { echo ''; } ?>"><a href="offices.php">Offices</a></li>
          <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'contact.php'){echo 'active'; }else { echo ''; } ?>"><a href="contact.php">Contact</a></li>
  
          </ul>
      </div>
  </div>
</nav>
