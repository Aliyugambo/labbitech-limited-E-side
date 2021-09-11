<?php
session_start(); 
include "dbconnect.php";



  if (isset($_POST['submit'])) {

       
      $username = $conn->real_escape_string($_POST['fname']);
      $Phones = $conn->real_escape_string($_POST['Phonenumber']);
      $email = $conn->real_escape_string($_POST['Emails']);
      $passs = $conn->real_escape_string($_POST['pass']);
      // $coms_pass = $con->real_escape_string($_POST['cpass']);

      // $username = $_POST['fname'];
      // $Phones = $_POST['Phonenumber'];
      // $email = $_POST['Emails'];
      // $passs = $_POST['pass'];
      // $coms_pass = $_POST['pass'];

   function validate($data){
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }

   
      $username = validate($_POST['fname']);
      $Phones = validate($_POST['Phonenumber']);
      $email = validate($_POST['Emails']);
      $passs= validate($_POST['pass']);
      // $coms_pass= validate($passs);

      if ($username == "" || $Phones == "" || $email != $passs)
      $msg = "Please check your inputs!";
    
    else{

    $sql = "SELECT * FROM users WHERE Email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
    $msg = "Email already exists in the database!";
  }else{
        $query ="INSERT INTO users(Fname,Phone,Email,password)VALUES('$username','$Phones ','$email' ,'$passs')";
        $result2 = mysqli_query($conn, $query);

        if ($result2) {
          header("Location: register.php?$msq=Your account has been created successfully");
          exit();
        }else{

      header("Location: register.php?$msq=Unkown error occured");
      exit();

        }
      }

    }

}
else{
  header("Location: register.php?$msq=Unkown error occure");
  exit();
}
?>

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
</head>
<body class="login-form">
   <center>
     <!-- end best -->
      <!-- request -->
      <div id="contact" class="request">
            
         <div class="container">

            <div class="row">
               <div class="col-sm-9">
                  <div class="black_bg">
                     <div class="row">
                        <div class="col-md-7 ">
                           <form action="POST" class="main_form">
                              <div class="row">
                                <label class="lab">Names</label>

                                 <div class="col-md-12 ">

                                    <input class="contactus" placeholder="Full Name" type="text" name="fname">
                                 </div>
                                 <label class="lab">Phone Number</label>
                        
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="Phone number" type="text" name=" Phonenumber">
                                 </div>
                                 <label class="lab">Email Adress</label>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="Email" type="Email" name="Emails">
                                 </div>
                                 <label class="lab">Password</label>
                                 <div class="col-md-12 ">
                                    <input class="contactus" placeholder="Password" type="Password" name="pass">
                                 </div>
                                 <div class="col-sm-12">
                                    <input type="submit" name="submit">
                                 </div>
                              </div>
                              <!-- end request -->
       <p ><a href="login.php">click here to Login</a><p>
                      <footer id="footer">
                      <div class="copyright">
                        &copy; Labbitech Limited All rights reserved.
                      </div>
                    </footer>
      </div>
                           </form>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
</body>
</html>>