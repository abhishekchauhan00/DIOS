<!-- PHP Starts Here -->


<!doctype html>
<html lang="en">
	<head>
		<title>Login - DIOS Application Panel</title>
     <meta charset="utf-8">
    <link rel="shortcut icon" href="$baseUrl/../Images/icbs_logo.png" type="image/x-icon">
    
    <!-- css style goes here -->

      <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../css/footer.css">
      <link rel="stylesheet" type="text/css" href="../css/style.css">

    <!-- css style go to end here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body class="login-background" style="background-image:url(../images/login-bg-1.jpg)";>
        <div class="login-div mt-3 rounded">
            <div class="logo-div text-center">
                <img src="../images/logo.jpg" alt="" class="align-items-center" width="150px" height="150px">
            </div>
            <div class="login-padding">
                <h6 class="text-center ">SIGN IN</h6>
                <form class="p-1" action="validation.php" method="POST">
                    <div class="form-group">
                        <label><h6>Enter Your ID/Email:</h6></label>
                        <input type="text" name="email" placeholder="Enter User ID" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label><h6>Enter Password:</h6></label>
                        <input type="Password" name="password" placeholder="Enter Password" class="form-control border-bottom" required>
                        <!-- <?php echo $message; ?> -->
                    </div>
                    <div class="form-group text-center mb-3 mt-4">
                        <input type="submit" name="btnlogin" value="LOGIN" class="btn btn-white pl-5 pr-5 " STYLE="background-color:#E81224; font-weight:bolder;">
                    </div>

                    <center>  <p style="color:#000;"> Made with <span style="color:red;">&#10084; </span> by Webquency</p></center>

                </form>
            </div>
        </div><br><br>

    </body>
</html>



