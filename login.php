<?php
session_start();
include("connection.php"); 
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="shortcut icon" href="./assets/img/logo.jpg" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="./node_modules/sal.js/dist/sal.css">
     <link rel="stylesheet" href="./assets/css/semantic.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/67626951b2.js" crossorigin="anonymous"></script>
    <title>City Livelihood Centre Kokrajhar</title>
  </head>
  <body>


	<!-- nav-bar -->
	<div class="alert bg-light font text-center" role="alert">
			<img src="assets/img/logo.jpg" width="50" height="50" class="font-size" alt=""> <h4> <b> CITY LIVELIHOOD CENTER KOKRAJHAR </b></h4>
			<i class="fab fa-facebook"></i>
			<i class="fab fa-twitter"></i>
			<i class="fab fa-instagram"></i>

	</div>


<div class="login-form">
    <form method="POST">
		<div class="avatar">
			<img src="assets/img/avatar-png-1.png" alt="Avatar" />
		</div>
        <h2 class="text-center">Member Login</h2>

		<div class="or-seperator"><i>or</i></div>
        <div class="form-group">
        	<input type="text" class="form-control" name="uname" placeholder="Username" required="required">		
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="psw" placeholder="Password" required="required">	
        </div>        
        <div class="form-group">
        <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-btn loading" value="Login"/>       
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-lg btn-block login-btn" onclick="window.location.href='index.php'"><i class="fas fa-home"></i></button>
        </div>
    </form>


<?php                         
                             if(isset($_POST['submit']))
                             {
                               $user = $_POST['uname'];  
                               $user = mysqli_real_escape_string($conn,$user);                                                    
                               $pwd = $_POST['psw'];
                               $query = "SELECT * FROM user WHERE user='$user' && password='$pwd'";
                               $data = mysqli_query($conn, $query);
                               $total = mysqli_num_rows($data);
                               if($total==1)
                               {
                                 $_SESSION['user_name'] = $user;                             
                                 echo "<script>window.location.assign('cms.php')</script>";                                                                                         
                               }
                               else
                               {
                                ?>
                                  <div class="alert alert-danger" role="alert" style='margin-top:20px; text-align:center'>
                                         Opps..! Password and Username Doesn't Match.
                                    </div>
                               <?php
                               }                            
                            }                          
 ?>


<div class="container underline"></div>


<div class="footer">
    <P style="text-align: center; margin-top: 3rem;">
      © 2020 City Livelihoods Centre | Design & Developed By | 4b it solution</P>
</div>





    <!-- Optional JavaScript -->
    <script src="./node_modules/sal.js/dist/sal.js"></script>
    <script>sal()</script>
    <script src="./assets/js/app.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>