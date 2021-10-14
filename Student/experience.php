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
    if(!$_POST['cname'])
    {
        $error .="Company Name is required<br>";
    }
    if(!$_POST['salary'])
    {
        
        $error .= "Salary is required<br>";
    }
    if(!$_POST['mode'])
    {
        
        $error .= "Mode is required<br>";
    }
    if(!$_POST['experience'])
    {
        
        $error .= "Experience is required<br>";
    }
    if(!$_POST['email'])
    {
      $error .= "Email is required<br>";
    }
    // if(!$_POST['suggestion'])
    // {
    //   $error .= "P done is required";
    // }

    if($error!="")
    {
        
        $error = "<p>There is an error in your form</p>".$error;
    }
    else
    {
        
            $query = "INSERT INTO studentexp(email,cname,salary,mode,experience,suggestion) 
            VALUES('".mysqli_real_escape_string($link,$_POST['email'])."',
            '".mysqli_real_escape_string($link,$_POST['cname'])."',
            '".mysqli_real_escape_string($link,$_POST['salary'])."',
            '".mysqli_real_escape_string($link,$_POST['mode'])."',
            '".mysqli_real_escape_string($link,$_POST['experience'])."',
            '".mysqli_real_escape_string($link,$_POST['suggestion'])."')";
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
                    <span class="fa fa-bar"></span>
                    <span class="fa fa-bar"></span>
                    <span class="fa fa-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.html">RECRUITMENTS</a> 
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">&nbsp; <a href="../home_login_pages/index.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
<!-- <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"> &nbsp;  -->
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
                        <a href="profile.php"><i class="fa fa-desktop fa-3x"></i>PROFILE</a>
                    </li>
                    <li>
                        <a  href="jobs.php"><i class="fa fa-qrcode fa-3x"></i>JOBS</a>
                    </li>
                     <li  > 
                        <a  href="experience.php" class="active-menu"><i class="fa fa-edit fa-3x"></i>INTERVIEW EXPERIENCE</a> 
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
                        <!-- <div class="col-lg-12">
                            <h1 class="page-header">Tables</h1>
                        </div> -->
                        <!-- /.col-lg-12 -->
                    </div>
            <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Interview Experience 
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                    
                                        <table class="table table-striped table-bordered table-hover" id="dataTables">
                                            <thead>
                                                <tr>
                                                    <th>COMPANY</th>
                                                    <th>SALARY</th>
                                                    <th>MODE</th>
                                                    <th>EXPERIENCE</th>
                                                </tr>
                                            </thead>
                                           

                                            <?php
                                            
                                            $conn=mysqli_connect("localhost","root","","ospforms");
                                           if($conn-> connect_error){
                                               die("Connection failed :". $conn-> connect_error);
                                           }
                                           
                                           $sql="SELECT cname,salary,mode,experience from studentexp WHERE email = '".mysqli_real_escape_string($conn,$_SESSION['smail'])."'";
                                           $result=$conn-> query($sql);
                                           if($result-> num_rows>0)
                                           {
                                               while($row=$result-> fetch_assoc()){
                                                   echo "<tr><td>". $row["cname"]."</td><td>".$row["salary"]."</td><td>".$row["mode"]."</td><td>".$row["experience"]."</td></tr>";
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
            <h1>Interview Experience</h1>
          </div>
          <div class="panel-body">
            <form method="post">
              <div class="form-group">
              <label for="email">Email</label><br>
                <input id="email" name="email" class="details" type="email">
              </div>
                <div class="form-group">
                <label for="Name">Name of the Company</label>
                <input
                  type="text"
                  class="form-control"
                  id="cname"
                  name="cname"
                />
              </div>
              <div class="form-group">
                <label for="Name">Salary</label>
                <input
                  type="text"
                  class="form-control"
                  id="salary"
                  name="salary"
                />
              </div>
              <div class="form-group">
                <label for="Name">Mode of Interview</label>
                <input
                  type="text"
                  class="form-control"
                  id="mode"
                  name="mode"
                />
              </div>
              <div class="form-group">
                <label for="Name">Write Your Experience</label>
                <input
                  type="text"
                  class="form-control"
                  id="experience"
                  name="experience"
                />
              </div>
              <div class="form-group">
                <label for="Name">Any Suggestions You want to  give to us</label>
                <input
                  type="text"
                  class="form-control"
                  id="suggestion"
                  name="suggestion"
                />
              </div>
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
