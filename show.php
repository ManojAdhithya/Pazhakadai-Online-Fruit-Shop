<!DOCTYPE html>
<html>
    <head>
        <title>Database Display</title>
        <link rel="stylesheet" type="text/css" href="css/style1.css">
        <style type="text/css">
            table{
                border-collapse: collapse;
                width: 100%;
                color: #1f1f1f;
                font-family: monospace;
                font-size: 25px;
                text-align: left;

            }
            th{
                background-color: #1f1f1f;
                color:white;
            
                

            }
            </style>
                  <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Admin</title>
     
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
 <script>
      function change() 
{
    var elem = document.getElementById("myButton1");
    if (elem.value=="Order Pending") elem.value = "Order Taken";
    else
    elem.value="Order Pending"
}
         </script>   
         <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="css/responsive.css" rel="stylesheet" />
</head>
<header>
         <!-- header inner -->
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
              <a href="logout.php">
               Logout
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
<body>
<?php
	include 'config.php';
	$sql = "SELECT * FROM orange";
	$result = mysqli_query($conn, $sql);
	?>

<div class="container">
		<h2 style="text-align: center;">Orders</h2>
		<br>
      <div class="color">
		<div class="row">
			<div class="col">
				<div class="table-responsive-sm">
					<table class="table table-striped">

						<tr>
							<th scope="col" class="text-center py-2">Order ID</th>
							<th scope="col" class="text-center py-2">Name</th>
							<th scope="col" class="text-center py-2">Fruit and Quantity</th>
							<th scope="col" class="text-center py-2">Address</th>
							<th scope="col" class="text-center py-2">Phone No.</th>
							<th scope="col" class="text-center py-2">Operation</th>
						</tr>
						</thead>
						<tbody>
							<?php
							while ($rows = mysqli_fetch_assoc($result)) {
							?>
								<tr style="color : black;">
									<td class="py-2"><?php echo $rows['id'] ?></td>
									<td class="py-2"><?php echo $rows['name'] ?></td>
									<td class="py-2"><?php echo $rows['quantity'] ?></td>
									<td class="py-2"><?php echo $rows['address'] ?></td>
									<td class="py-2"><?php echo $rows['phone'] ?></td>
									<td><input onclick="change()" type="button" value="Order Pending" id="myButton1"></input></td>
                        
                        </tr>
							<?php
							}
							?>

						</tbody>
					</table>
            </div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>