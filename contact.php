<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     
      <?php include('email.php'); ?>
     <link rel="stylesheet" href="contact.css" type = "text/css">
    <title>Contact</title>
    <link rel="icon" type="image/jpeg" href="images/icon.jpg">
  </head>
  <body>

<div class="container">  
  <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your Name" type="text" tabindex="1" name="username" value="<?= $name ?>">
      <span class = "error"><?= $nameErr ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" name="email" value="<?= $email ?>" tabindex="2">
      <span class = "error"><?= $emailErr ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="tel" name="phone" value="<?= $phone ?>" tabindex="3" >
      <span class = "error"><?= $phoneErr ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Subject" type="text" name="subject" value="<?= $subject ?>" tabindex="4">
      <span class = "error"><?= $subjectErr ?></span>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." type="text" name="message" value="<?= $message ?>" tabindex="5" ></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
   <!--  <div class = "success"><?= $success ?></div>  -->
  </form>
 
</div>
<script> 
 if(<?=$com ?> == 1) {
   myFunc();
 }
         function myFunc() { 
           window.location.href="success.html"; 
         } 
      </script> 
</body>
</html>

<!--"https://manan-insyncuitrgpv.000webhostapp.com" -->