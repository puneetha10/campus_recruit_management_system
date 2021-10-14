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

    // if(!$_POST['companyname'])
    // {
    //     $error .="Company Name is required<br>";
    // }
    if(!$_POST['Name'])
    {
        $error .="Name is required<br>";
    }
    if(!$_POST['email'])
    {
        
        $error .= "An email address is required<br>";
    }
    if(!$_POST['mobilenumber'])
    {
        
        $error .= "Mobile number is required<br>";
    }
    if(!$_POST['skills'])
    {
        
        $error .= "Skills are required<br>";
    }
    if(!$_POST['projects'])
    {
      $error .= "Projects done is required";
    }

    if($error!="")
    {
        
        $error = "<p>There is an error in your form</p>".$error;
    }
    else
    {
            $query = "UPDATE users SET NAME='".mysqli_real_escape_string($link,$_POST['Name'])."',
            EMAIL = '".mysqli_real_escape_string($link,$_POST['email'])."',
            PHONE = '".mysqli_real_escape_string($link,$_POST['mobilenumber'])."',
            SKILLS = '".mysqli_real_escape_string($link,$_POST['skills'])."',
            PROJECTS = '".mysqli_real_escape_string($link,$_POST['projects'])."' 
            WHERE EMAIL = '".mysqli_real_escape_string($link,$_SESSION['smail'])."'";
            
            if(!mysqli_query($link,$query))
            {
                $error = "<p>Please try again.</p>";
            }
            else
            {
                
                $success =  "<p>Successfully Updated.</p>";
            }    
    }
} 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PROFILE</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
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
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> &nbsp; <a href="../home_login_pages/index.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>

        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li> 
                        <a  href="dashboard.html"><i class="fa fa-dashboard fa-3x"></i>DASHBOARD</a>
                    </li>
            
            
                      <li>
                        <a  href="profile.php" class="active-menu"><i class="fa fa-desktop fa-3x"></i>PROFILE</a>
                    </li>
                    <li>
                        <a  href="jobs.php"><i class="fa fa-qrcode fa-3x"></i>JOBS</a>
                    </li>
			
                    <li  >
                         <a  href="experience.php"><i class="fa fa-edit fa-3x"></i>INTERVIEW EXPERIENCE</a> 
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
                        <!-- <div class="col-lg-12">
                            <h1 class="page-header">Tables</h1>
                        </div> -->
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    MY DETAILS 
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                    
                                        <table class="table table-striped table-bordered table-hover" id="dataTables">
                                            <thead>
                                                <tr>
                                                    <th>NAME</th>
                                                    <th>EMAIL</th>
                                                    <th>MOBILE NUMBER</th>
                                                    <th>SKILLS</th>
                                                    <th>PROJECTS</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            
                                            $conn=mysqli_connect("localhost","root","","ospforms");
                                            if($conn-> connect_error){
                                                die("Connection failed :". $conn-> connect_error);
                                            }
                                            
                                            $sql="SELECT NAME,EMAIL,PHONE from users WHERE EMAIL = '".mysqli_real_escape_string($conn,$_SESSION['smail'])."'";
                                            $sql1="SELECT SKILLS,PROJECTS from users WHERE EMAIL = '".mysqli_real_escape_string($conn,$_SESSION['smail'])."'";
                                            $result1 = $conn->query($sql1);
                                            $result=$conn-> query($sql);
                                            if($result-> num_rows>0)
                                            {
                                                while($row=$result-> fetch_assoc() and $row1=$result1->fetch_assoc()){
                                                    echo "<tr><td>". $row["NAME"]."</td><td>".$row["EMAIL"]."</td><td>".$row["PHONE"]."</td><td>".$row1["SKILLS"]."</td><td>".$row1["PROJECTS"]."</td></tr>";
                                                }
                                                echo "</table>";
                                            }
                                            else{
                                                echo "0 result";
                                            }
                                            $sql="SELECT SKILLS,PROJECTS from users WHERE EMAIL = '".mysqli_real_escape_string($conn,$_SESSION['smail'])."'";
                                            
                                            $conn-> close();
                                            ?>
                                        </table>
                                    </div>
                                    
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>



                <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>UPDATE DETAILS</h1>
          </div>
          <div class="panel-body">
            <form method="post">
            <!-- <div class="form-group">
                <label for="companyname">Company Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="companyname"
                  name="companyname"
                />
              </div> -->
              <div class="form-group">
                <label for="Name">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="Name"
                  name="Name"
                />
              </div>
              <!-- <div class="form-group">
                <label for="regno">REGESTRATION NUMBER</label>
                <input
                  type="text"
                  class="form-control"
                  id="regno"
                  name="regno"
                />
              </div> -->
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email" />
              </div>
              <div class="form-group">
                <label for="mobilenumber">Mobile Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="mobilenumber"
                  name="mobilenumber"/>
              </div>
              <div class="form-group">
                <label for="skills">Skills</label>
                <input
                  type="text"
                  class="form-control"
                  id="skills"
                  name="skills"/>
              </div>
              <div class="form-group">
                <label for="projects">Projects</label>
                <input
                  type="text"
                  class="form-control"
                  id="projects"
                  name="projects"/>
              </div>

              <!--<div class="form-group">
                <label for="cv">Upload your CV</label>
                <input
                  type="file"
                  class="form-control"
                  id="cv"
                  name="cv"
                />
              </div>-->

              <input type="submit" name="submit" value="SUBMIT" id="submit" />
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
    
   
</body>
</html>
