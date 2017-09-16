<?php
$page_title = "Contact Us | Warpony Bulldogs";
$body_class = "contact-us";

include_once 'includes/header.php';
?>

<div class="container main-content">
  <div class="row">

    <div class="col-md-12">
      <h1><i class="fa fa-envelope"></i> Contact Us</h1>
      <hr />


<address>
  <strong>Cathy Sanders</strong> <small>Owner</small><br />
  Carney Oklahoma 74832 <br />
  United States<br />
  <a href="mailto:warpony11@wildblue.net">warpony11@wildblue.net</a><br />
  <i class="fa fa-phone"></i> (405) 865-2202<br />
  <i class="fa fa-mobile-phone"></i> (405) 240-6114 (TEXT)<br />
  <i class="fa fa-phone"></i> (405) 640-4509
</address>

<hr />

<?php
//define variables and set to empty values
$name = "";
$email = "";
$message = "";

if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == 'POST'){
  //Check for Empty Form Fields
  if(($_POST['name'] != "") && ($_POST['email'] != "") && (strlen(trim($_POST['message'])))){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

  //check for valid email
  if(filter_var($email, FILTER_VALIDATE_EMAIL)){

  //check for valid name
  if(preg_match("/^[a-zA-Z ]*$/", $name)){

  //everything check out, send email.
  $to = "warpony11@wildblue.net";

  $subject = "Someone Sent You A Message!";

  $message = "
  <html>
  <head>
      <title>New Message From Warpony Bulldogs Website</title>
  </head>
  <body>
    <h1>You have a message!</h1>
    <p>From: $name</p>
    <p>Email: $email</p>
    <p>Message: $message</p>
  </body>
  </html>
  ";
  $headers = "From: admin@warponybulldogs.com\r\n";
  $headers .= "Reply-to: $email\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
  $headers .= "X-Mailer: PHP/" . phpversion();

  if(mail($to, $subject, $message, $headers)){
    $success = "Your Message Has Been Sent!";
    $url = "contact-us.php?successMsg=" . urlencode($success);
    redirect($url);
  }else{
    echo "<div class='alert alert-danger'>";
    echo "<h3 class='text-danger'>Unable to send message, please try again later.</h3>";
    echo "</div>";
  }
  }else{
    echo "<div class='alert alert-danger'>";
    echo "<h3 class='text-danger'>Invalid Name! Only Letters and White Space Allowed.</h3>";
    echo "</div>";
  }
  }else{
    echo "<div class='alert alert-danger'>";
    echo "<h3 class='text-danger'>Invalid Email Address!</h3>";
    echo "</div>";
  }
  }else{
    echo "<div class='alert alert-danger'>";
    echo "<h3 class='text-danger'>All Fields Are Required!</h3>";
    echo "</div>";
  }
}
?>

<?php
if(isset($_GET['errorMsg'])){
$errorMsg = urldecode($_GET['errorMsg']);
?>
<div class="alert alert-danger">
<h3 class="text-danger"><?php echo $errorMsg; ?></h3>
</div>
<?php
}
if(isset($_GET['successMsg'])){
$successMsg = urldecode($_GET['successMsg']);
?>
<div class="alert alert-success">
<h3 class="text-success"><?php echo $successMsg; ?></h3>
</div>

<?php
}
?>

<h2>Send Us A Message</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" value="<?php if(isset($_POST['name'])){ echo trim($_POST['name']); } ?>" required>
  </div>


  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php if(isset($_POST['email'])){ echo trim($_POST['email']); } ?>" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control" id="message" name="message" required>
      <?php
      if(isset($_POST['message'])){
        echo trim($_POST['message']);
      }
      ?>
    </textarea>
  </div>

  <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>

</form>

<hr />

    </div><!--end col-md-12-->



  </div><!--end row-->
</div><!--end container -->


<?php include_once 'includes/footer.php'; ?>
