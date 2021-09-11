<!DOCTYPE html>
<html>
<head><!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>labbitech</title>
      <meta name="keywords" content="">
      <meta name="description" content=""> 
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/login.css">
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
</head>
<body class="login-form">

   <center>
     <form action="login.php" method="POST" >

      <div class="frmDronpDown">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
        <div class="row">
          <label>User Name</label>
          <input type="Email" name="uname" placeholder="Email Adress" />
           </div>
           <div class="row">
          <label>Passwords</label>
          <input type="Password" name="pass" placeholder="Password" />
        </div>
       
       <div class="row">
        <input type="submit" name="submit" value="Login">
       </div>
       <p><a href="register.php">click here to register</a><p>
        <footer id="footer">
        <div class="copyright">
          &copy; Labbitech Limited All rights reserved.
        </div>
      </footer>

       </div>
      </form>
  </center>

   </div>

</body>
</html>