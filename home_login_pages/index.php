<?php

$error = "";
$success = "";
if(array_key_exists("submit",$_POST))
{
    $link = mysqli_connect("localhost","root","","ospforms");
    if(mysqli_connect_error()){
        die("Database connection Error");
    }

    if(!$_POST['fname'])
    {
        $error .="First Name is required<br>";
    }
    if(!$_POST['lname'])
    {
        $error .="Last name is required<br>";
    }
    if(!$_POST['email'])
    {
        
        $error .= "An email address is required<br>";
    }
    if(!$_POST['phno'])
    {
        
        $error .= "Phone number is required<br>";
    }
    if(!$_POST['query'])
    {
        
        $error .= "Mention your issue<br>";
    }

    if($error!="")
    {
        
        $error = "<p>There is an error in your form</p>".$error;
    }
    else
    {
        
            $query = "INSERT INTO contactform(FNAME,LNAME,EID,PHNO,QUERY) 
            VALUES('".mysqli_real_escape_string($link,$_POST['fname'])."',
            '".mysqli_real_escape_string($link,$_POST['lname'])."',
            '".mysqli_real_escape_string($link,$_POST['email'])."',
            '".mysqli_real_escape_string($link,$_POST['phno'])."',
            '".mysqli_real_escape_string($link,$_POST['query'])."')";
            if(!mysqli_query($link,$query))
            {
                $error = "<p>Please try again.</p>";
            }
            else
            {
                
                // $success =  "<p>Successfully submitted.</p>";
                echo "<script>alert('Your Details are saved');</script>";
            }

        
        
        
    }
}

  
?>



<!DOCTYPE html>
<html>
    <head>
        <title>
            Campus Recruitment System
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="assets/css/index.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      </head>
    
    <body>
      
      <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <a class="navbar-brand" href="#">Campus Recruitment System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">SIGN UP</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="csignup.php">COMPANY</a>
                <a class="dropdown-item" href="signup.php">STUDENT</a>
              </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">LOGIN</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="alogin.php">ADMIN</a>
                  <a class="dropdown-item" href="clogin.php">COMPANY</a>
                  <a class="dropdown-item" href="login.php">STUDENT</a>
                </div>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">CONTACT US</a>
            </li>
          </ul>
        </div>
      </nav>
         
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="../images/corporate_logo_management_all_list.jpg" width="500px" height="700px" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../images/placements.jpg" width="500px" height="700px" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../images/campus-placement.jpg" width="500px" height="700px" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
<hr class="hr">
          <div class="container gu">
            <div class="row">
          <div class="bg-light col-sm-6 col-md-6 col-lg-4">
            <img src="../images/107-1070474_white-graduation-hat-png-3d-white-graduation-cap.png" width="220px" height="180px">
            <br>
            <h4>BEST PLACE TO GET YOUR DREAM PLACEMENT</h4>

          </div>

          <div class="bg-light col-sm-6 col-md-6 col-lg-4">
              <img src="../images/02f8664b95445de6f27ba682f3c5f9ab.jpg" width="290px" height="180px"><br>
              <h4>GUARANTEED PRIVACY</h4>
          </div>
        
          <div class="bg-light col-sm-12  col-md col-lg-4">
              <img style="margin-left: 35px; margin-top: 9px;" src="../images/ISO.png" width="160px" height="170px">
              <br>
              <h4>CERTIFIED COMPANIES</h4>
          </div>
        </div>
        </div>

        <div class="container cont bg-light">
          <div class="row">
            <div class="col-6 points">
                <p><i class="fas fa-check"></i>Recruitments process made simple</p>
                <p><i class="fas fa-check"></i>Register yourself</p>
                <p><i class="fas fa-check"></i>Apply for companies</p>
                <p><i class="fas fa-check"></i>Get placed according to your eligibility</p>
            </div>

            <div class="col-6">

              <img src="../images/Browsing-laptop-SyleMag.jpeg" width="330px" height="220px">
            </div>
          
          </div>
        
        </div>
        <div id="about">
          <h2>ABOUT US</h2>
          <p>
             Campus Recruitments is all about monitoring students foot print. 
             We do this using our online web and mobile portal. 
             Colleges can register on the portal for free and download the apps they prefer both on Web and Mobile. 
             Several of these Apps are available for Free. 
             Based on the usage of these Apps, we assess student's skill set and match against a Company's requirement.
             Campus Recruitments has been used by more than 100 colleges in India and many companies to hire best brains from the campuses.
             Campus Recruitments is all about monitoring students foot print. We do this using our online web and mobile portal. Colleges can 
             register on the portal for free  on Web . Services of the website are available for Free. 
             Based on the usage of these services, we assess student's skill set and match against a Company's requirement. 
            Campus Recruitments has been used by more than 100 colleges in India and many companies to hire best brains from the campuses.
            
             
            </p>
        </div>
        <div class="reviews">
          <h3 style="justify-content: center;">REVIEWS</h3><br>
          <div class="row">
          
            <div class="col-4 re">
            This is wonderful .. Very easy to use service.. Both for company and student 
            Inexpensive, easy to use and great-platform, delivers right content. We have lots of similar websites, but no one comes even close to Campus Recruitments.
            Me and my friends love this website so much!

            </div>

            <div class="col-4 re">
              I was looking for a quick and easy platform to search for eligible placement. I tried a lot of them and ended up with Campus Recruitment. 
              Best content delivered. Keep up the great work!

            </div>
            
            <div class="col-4 re">
              Content and services are just awesome! To get placed in a company interaction between company and student is important...
              This website connects company and students....Also... It's an easy way to apply for jobs in this website

            </div>
          </div>
          </div><br>
        <div class="container contact">
          <h2>CONTACT US</h2>
          <form class="form-control" id="contact" method="POST">
              <label for="fname">First Name</label>
              <input class="input" name="fname" type="text" placeholder="First Name" required><br><br>
              <label for="lname">Last Name</label>
              <input class="input" name="lname" type="text" placeholder="Last Name" required><br><br>
              <label for="email">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input class="input" name="email" type="email" placeholder="Email" required><br><br>              
              <label for="phno">Phone No &nbsp;</label>
              <input type="number" name="phno" id="ph" class="input" placeholder="Phone Number" required><br><br>
              <label for="fname">Query &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp  </label>
              <input class="input" name="query" type="text" placeholder="Write your issues" required><br><br>
              <span id="vph" style="visibility: hidden;">Enter a valid number</span>
              <br>
              <br><br>
              <input type="submit" onclick="validate()" name="submit" id="submit">
              <div class="err"><?php echo $error; ?></div>
              <div class="succ"><?php echo $success; ?></div>
            </form>
           <a href="#carouselExampleIndicators"><i id="btp" class="fas fa-angle-double-up"></i></a>


        </div>
        <script type="text/javascript">
         function validate()
         {
            var ph = document.getElementById("ph").value;
            var vph = document.getElementById("vph");
            var l = String(ph).length;
            if(l<10)
            {
              vph.style.visibility="visible";
            }
          }
        </script>
    </body>
    
</html>