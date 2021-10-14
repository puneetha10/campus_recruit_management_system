<?php
session_start();
$error = "";
$success = "";
if(array_key_exists("submit",$_POST))
{
    $link = mysqli_connect("localhost","root","","ospforms");
    if(mysqli_connect_error()){
        die("Database connection Error");
    }

    
    if(!$_POST['companyname'])
    {
        $error .="Company Name is required<br>";
    }
    if(!$_POST['email'])
    {
        $error .="Email is required<br>";
    }
    if(!$_POST['sname'])
    {
        
        $error .= "Student Name is required<br>";
    }
    if(!$_POST['mobilenumber'])
    {
        
        $error .= "Mobile Number is required<br>";
    }
    if(!$_POST['skills'])
    {
        
        $error .= "Mention your skills<br>";
    }
    if(!$_POST['projects'])
    {
        
        $error .= "Mention your skills<br>";
    }
    

    if($error!="")
    {
        
        $error = "<p>There is an error in your form</p>".$error;
    }
    else
    {
        
            $query = "INSERT INTO applyjobs(APCOMPANY,APEMAIL,STMAIL,SNAME,SMOBILE,SKILLS,PROJECTS) 
            VALUES('".mysqli_real_escape_string($link,$_POST['companyname'])."',
            '".mysqli_real_escape_string($link,$_POST['email'])."',
            '".mysqli_real_escape_string($link,$_SESSION['smail'])."',
            '".mysqli_real_escape_string($link,$_POST['sname'])."',
            '".mysqli_real_escape_string($link,$_POST['mobilenumber'])."',
            '".mysqli_real_escape_string($link,$_POST['skills'])."',
            '".mysqli_real_escape_string($link,$_POST['projects'])."')";
            if(!mysqli_query($link,$query))
            {
                $error = "<p>Please try again.</p>";
            }
            else
            {
                
                $success =  "<p>Successfully submitted.</p>";
            }    
    }
} 
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- <link rel="stylesheet" href="assets/css/jobs.css"> -->
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JOBS</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <style>
        table {
            border-collapse:separate;
            width: 80%;
            
            /* border-style: PHP_ROUND_HALF_DOWN; */
            padding: 10px;
        }
        th, td {
            text-align: center;
            padding:8px;
            background-color: black;
            color:white;
        }
        th {
            background-color: red;
            color:white;
        }
        
        #main-menu{
            z-index:2;
        }
        
        /* tr:nth-child(odd){background-color: red;} */
    </style> -->
</head>
<body bgcolor="white">
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.html">RECRUITMENTS</a> 
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">&nbsp; <a href="../home_login_pages/index.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
<!-- <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"> &nbsp;  </div> -->
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a  href="dashboard.html"><i class="fa fa-dashboard fa-3x"></i> DASHBOARD</a>
                    </li>
                      <li>
                        <a  href="profile.php"><i class="fa fa-desktop fa-3x"></i>PROFILE</a>
                    </li>
                    <li>
                        <a  class="active-menu" href="jobs.php"><i class="fa fa-qrcode fa-3x"></i>JOBS</a>
                    </li>
						  
                    <li  >
                        <a  href="experience.php" ><i class="fa fa-edit fa-3x"></i>INTERVIEW EXPERIENCE</a>
                    </li>	
                    <li>
                          <a href=""><i class=""></i></a>
                      </li>
                      <li>
                          <a href=""><i class=""></i></a>
                      </li>
                      <li>
                          <a href=""><i class=""></i></a>
                      </li>
                      <li>
                          <a href=""><i class=""></i></a>
                      </li>
                      <li>
                          <a href=""><i class=""></i></a>
                      </li>
                      <li>
                         <a  href=" "><i class=" "></i></a> 
                    </li>	
                    <li>
                         <a  href=" "><i class=" "></i></a> 
                    </li>	
                    <li>
                         <a  href=" "><i class=" "></i></a> 
                    </li>	
                    <li>
                         <a  href=" "><i class=" "></i></a> 
                    </li>	
                    <li>
                         <a  href=" "><i class=" "></i></a> 
                    </li>	
                    <li>
                         <a  href=" "><i class=" "></i></a> 
                    </li>	
                    <li>
                         <a  href=" "><i class=" "></i></a> 
                    </li>	
                    <li>
                         <a  href=" "><i class=" "></i></a> 
                    </li>	
                    <li>
                         <a  href=" "><i class=" "></i></a> 
                    </li>	
                    </ul>
                    </div>
                    </nav>


                    <div id="page-wrapper">
                    <div class="container-fluid">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                APPLY JOBS
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                    
                                        <table class="table table-striped table-bordered table-hover" id="dataTables">
                                          <thead>
                                            <tr>
                                                <th>COMPANY NAME</th>
                                                <th>EMAIL</th>
                                                <th>VENUE</th>
                                                <th>JOB TYPE</th>
                                                <th>SALARY</th>
                                                
                                            </tr>
                                            </thead>
                                            <?php
                                              $conn=mysqli_connect("localhost","root","","ospforms");
                                              if($conn-> connect_error){
                                                  die("Connection Failed:".$conn-> connect_error);
                                              }                    
                                              $sql="SELECT companyname,email,venue,jobtype,salary from postjobs";
                                              $result=$conn-> query($sql);
                                              // $sql="CREATE "
                                              if($result-> num_rows > 0){
                                                  while($row=$result-> fetch_assoc()){
                                                      echo "<tr><td>".$row["companyname"]."</td><td>".$row["email"]."</td><td>".$row["venue"]."</td><td>".$row["jobtype"]."</td><td>".$row["salary"]."</td></tr>";

                                                    //    echo "<tr><td>". $row["companyname"]."</td><td>".$row["venue"]."</td><td>".$row["jobtype"]."</td><td> <button class='btn' id='mybtn' background-color: #4CAF50 onclick=myselect()>APPLY</button> </td></tr>";
                                                  }
                                                  echo "</table>";
                                              }
                                              else{
                                                  echo "0 result";
                                              }
                                              $conn-> close();
                                            ?>
                                        </table>
                                        </div>


                    <div class="container col-lg-12">
                    <div class="row col-md-6 col-md-offset-3">
                      <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                          <h1>APPLY JOBS</h1>
                        </div>
                        <div class="panel-body">
                          <form method="post">
                            <div class="form-group">
                              <label for="companyname">COMPANY NAME</label>
                              <input
                                type="text"
                                class="form-control"
                                id="companyname"
                                name="companyname"
                              />
                            </div>  
                            <div class="form-group">
                              <label for="email">COMPANY EMAIL</label>
                              <input
                                type="text"
                                class="form-control"
                                id="email"
                                name="email"
                              />
                            <div class="form-group">
                              <label for="sname">STUDENT NAME</label>
                              <input
                                type="text"
                                class="form-control"
                                id="studentname"
                                name="sname"
                              />
                            </div>
                            <div class="form-group">
                              <label for="mobilenumber">MOBILE NUMBER</label>
                              <input
                                type="text"
                                class="form-control"
                                id="mobilenumber"
                                name="mobilenumber"
                              />
                            </div>
                            <div class="form-group">
                              <label for="skills">SKILLS</label>
                              <input
                                type="text"
                                class="form-control"
                                id="skills"
                                name="skills"
                              />
                            </div>
                            <div class="form-group">
                              <label for="projects">PROJECTS</label>
                              <input
                                type="text"
                                class="form-control"
                                id="projects"
                                name="projects"
                              />
                            </div>
                            
                            <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary" id="submit" />
                            <input type="reset" name="formreset" value="RESET" class="btn btn-primary" />
                            <div class="err"><?php echo $error; ?></div>
                            <div class="succ"><?php echo $success; ?></div>
                          </form>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
    
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script>
        function myselect(){
    $.ajax({
    type: "POST",
    data:{},       
    success:function( data ) {
       $(".btn").html("Accepted");   // Add this line
    }
});
 }
</script>
    <!-- <script type="text/javascript"> 
        function myselect(){
            // var submit = document.getElementById(btn);
            // submit.value = 'APPLIED';
            // console.log('APPLIED');
            $buttonname="APPLIED";
            return false;
        };
    </script> -->
   
</body>
</html>
