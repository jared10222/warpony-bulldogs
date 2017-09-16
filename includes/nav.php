<?php
function checkLinks($link, $body_class){
  if($link == $body_class){
    echo " active ";
  }
}
?>
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php checkLinks("index", $body_class); ?>">
        <a class="nav-link" href="/"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php checkLinks("about", $body_class); ?>">
        <a class="nav-link" href="about.php"><i class="fa fa-user"></i> About</a>
      </li>
      <li class="nav-item <?php checkLinks("male-bulldogs", $body_class); ?>">
        <a class="nav-link" href="male-bulldogs.php"><i class="fa fa-paw"></i> Male Bulldogs</a>
      </li>
      <li class="nav-item <?php checkLinks("female-bulldogs", $body_class); ?>">
        <a class="nav-link" href="female-bulldogs.php"><i class="fa fa-paw"></i> Female Bulldogs</a>
      </li>
      <li class="nav-item <?php checkLinks("available-puppies", $body_class); ?>">
        <a class="nav-link" href="available-puppies.php"><i class="fa fa-paw"></i> Available Puppies</a>
      </li>
      <li class="nav-item <?php checkLinks("services", $body_class); ?>">
        <a class="nav-link" href="services.php"><i class="fa fa-bank"></i> Services</a>
      </li>
      <li class="nav-item <?php checkLinks("anouncements", $body_class); ?>">
        <a class="nav-link" href="anouncements.php"><i class="fa fa-bullhorn"></i> Anouncements</a>
      </li>
      <li class="nav-item <?php checkLinks("contact-us", $body_class); ?>">
        <a class="nav-link" href="contact-us.php"><i class="fa fa-envelope"></i> Contact Us</a>
      </li>
      <li class="nav-item <?php checkLinks("paypal", $body_class); ?>">
        <a class="nav-link" href="paypal.php"><i class="fa fa-paypal"></i> PayPal</a>
      </li>
    </ul>
  </div>
</div><!--end container-fluid-->
</nav>
