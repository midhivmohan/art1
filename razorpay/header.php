<?php
session_start();
?>

<!DOCTYPOE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width,initial -scale=1.0">
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h2>Art Space</h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
        </li> 
<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="EditProfile.php">EditProfile</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="welcome.php">Order Art</a>
        </li>
 		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="my_cart.php">My Cart
		  </a>
        </li>
		
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">Logout
		  </a>
        </li>
		
		
      </ul>
      <div>
	
        <?php
        $count=0;
        if(isset($_SESSION['cart']))
        {
          $count=count($_SESSION['cart']);
        }
        ?>
		<p align="right">
		<br>
          <a href ="my_cart.php"class="btn btn-success">My Cart (<?php echo $count; ?>)</a>
		 </p>
</div>

    </div>
  </div>
</nav>


</body>
        
</html>