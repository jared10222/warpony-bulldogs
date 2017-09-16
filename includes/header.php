<?php ob_start();
include_once "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php if(isset($page_title) && "" != $page_title){ echo $page_title; }else{echo "Warpony Bulldogs"; } ?></title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <meta name="description" content="English Bulldog Breeders Providing The Highest Quality Puppies, Stud Services, and Customer Satisfaction">
    <meta name="keywords" content="English Bulldogs, Puppies, Stud Services">

    <!-- Facebook Open Graph -->
    <meta property="fb:app_id" content="175820982978198" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://www.warponybulldogs.com/images/new-kennel.jpg"/>
    <meta property="og:title" content="Warpony Bulldogs | English Bulldog Breeders Providing The Highest Quality Puppies, Stud Services, and Customer Satisfaction"/>
    <meta property="og:description" content="Here at Warpony Ranch, we are blessed to raise these wonderful characters. Our goal is to always improve the health, confirmation, and temperament while staying true to the standards. All our English bulldogs and bulldog puppies are well socialized by our family with lots of love and attention.Stud services are also available. Feel free to browse around our site, and thank you for visiting."/>
    <meta property="og:url" content="http://www.warponybulldogs.com/"/>



    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Warpony Bulldogs">
    <meta name="twitter:description" content="English Bulldog Breeders Providing The Highest Quality Puppies, Stud Services, and Customer Satisfaction">
    <meta name="twitter:url" content="http://www.warponybulldogs.com">
    <meta name="twitter:image" content="http://www.warponybulldogs.com/images/logo-2.png">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body class="<?php if(isset($body_class) && "" != $body_class){ echo $body_class; } ?>">






    <div class="container-fluid">
      <div class="row">
        <div class="col-12 main-header">
          <div class="logo-wrapper">
            <a href="/"><img class="img-fluid" src="images/logo-2.png" alt="Warpony Bulldogs Logo" /></a>
          </div><!--end logo-wrapper-->
        </div>
      </div><!--end row-->
    </div><!--end container-->


<?php include_once 'nav.php'; ?>
