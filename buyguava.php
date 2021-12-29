<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $sqlinsert = "INSERT INTO orange (name,quantity,address,phone) VALUES 
    ('$name','$quantity','$address','$phone')";
    mysqli_query($conn, $sqlinsert);
if ($sqlinsert) {
    echo "<script> alert('Order Placed');
</script>";
} else {
echo "Error: " . $sqlinsert . "<br>" . $conn->error;
}}
mysqli_close($conn);
?>
<!DOCTYPE HTML>
<html>
    <head>
         <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Pazha Kadai</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
    </head>
    <body>
    <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="" /><span>
              Pazha Kadai
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="fruit.html"> Fruits</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html"> Services </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact us</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
            <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
              <a href="login.php">
                Admin Login
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <section class="contact_section layout_padding">
    <div class="container">
      <h2 class="font-weight-bold">
        Order Guava
      </h2>
      <div class="row">
        <div class="col-md-8 mr-auto">
          <form method="POST">
            <div class="contact_form-container">
              <div>
                <div>
                <input type="text" id="name" name="name" placeholder="Name"><br><br>
                </div>
                <div>
                  <input type="text" name="quantity" id="quantity" placeholder="Fruit and Quantity(in kg)">
                </div>
                <div>
                  <input type="text" name= "address" id="address" placeholder="Address">
                </div>

                <div class="mt-5">
                  <input type="text" name="phone" id="phone" placeholder="Phone no.">
                </div>
                <div class="mt-5">
                  <input type="submit" name="submit" id="submit">
                   
                </div>
              </div>

            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
    </body>
</html>