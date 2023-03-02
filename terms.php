<?php
      include_once('connect.php');
?>
<?php
    // session_start();
    $email_r = $_SESSION['email'];
    $password_r = $_SESSION['password'];
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){
        header("location:sign_in.php");
        exit;
    }
?>
<?php 

$query = "SELECT * FROM `sign_up` WHERE email = '$email_r' password = '$password_r"; 
// print_r ($query);
// exit;
$result = mysqli_query($conn, $query);
$array = mysqli_fetch_array($result);
// print_r($array);
// exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="logo.png">
    <title>Terms Of Use</title>
</head>
<body>
<form method="GET">
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="home.php">
              <img src="Netflix_Logo_PMS.png" width="170" height="80" class="d-inline-block align-top" alt="">
            </a>
            <div class="navbar-right">
            
            <div class="dropdown">
                <a href="#" id="imageDropdown" data-toggle="dropdown">
                <span><?php'$file'?><img class="image" src ='Upload/<?php echo $array[8];?>'height='50px'width='50px'></span>
                </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="imageDropdown">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="YourAccount.php">Your Account</a></li>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="logOut.php">Sign Out</a></li>
                </ul>
                </div>
            </div>
          </nav>
          <center>
            <h1>Help Center</h1>
            <div class="container search">
              <!-- <div class="col-xs-6"> -->

            <div class="form-group has-feedback has-search">
    <span class="glyphicon glyphicon-search form-control-feedback"></span>
    <input type="text" class="form-control rounded" placeholder="Search">
  </div>
  <!-- </div> -->
  </div>
  </center>
        </header>

       
      <footer>
        <div class="container">
            <center>
            <div class="row col-md-4">
                <h4>Contact us</h4>
                <p>Call : <a href="tel:9999988888">9999988888</a></p>
                <p>Mail : <a href="mailto:abc@gmail.com">abc@gmail.com</a></p>
            </div>
            <div class="row col-md-4">
                <h4>Follow on social media</h4>
                <a href="https://www.facebook.com/profile.php?id=100005350457657" class="fa fa-facebook"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://www.instagram.com/__plutobeey__/" class="fa fa-instagram"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://twitter.com/RituparnaSing18" class="fa fa-twitter"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://www.linkedin.com/in/rituparna-singh-/" class="fa fa-linkedin"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://github.com/Rituparna-Singh" class="fa fa-github"></a>
            </div>
            <div class="row col-md-4">
                <h4>About us</h4>
                <p><a>Terms of use</a></p>
                <p><a>Privacy</a></p>
                <p><a>Help center</a></p>
            </div>
        </center>
        </div>
    </footer>
    </form>
</body>
</html>