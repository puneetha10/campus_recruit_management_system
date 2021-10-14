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
        
        $error .= "Email is required<br>";
    }
    if(!$_POST['venue'])
    {
        
        $error .= "Venue is required<br>";
    }
   
    if(!$_POST['jobtype'])
    {
        
        $error .= "Job Type is required<br>";
    }
    if(!$_POST['salary'])
    {
        
        $error .= "Salary is required<br>";
    }
    

    if($error!="")
    {
        
        $error = "<p>There is an error in your form</p>".$error;
    }
    else
    {
        
            $query = "INSERT INTO postjobs(companyname,email,venue,jobtype,salary) 
            VALUES('".mysqli_real_escape_string($link,$_POST['companyname'])."',
            '".mysqli_real_escape_string($link,$_POST['email'])."',
            '".mysqli_real_escape_string($link,$_POST['venue'])."',
            '".mysqli_real_escape_string($link,$_POST['jobtype'])."',
            '".mysqli_real_escape_string($link,$_POST['salary'])."')";
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
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Company-Dasboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">RECRUITMENT</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i>Company Website</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>Setting<b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="../home_login_pages/index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="Company_Dashboard.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="view_student.php"><i class="fa fa-sitemap fa-fw"></i>View Students<span class="fa arrow"></span></a>
                    </li>
                    <!-- <li>
                        <a href="Interview_Status.html"><i class="fa fa-sitemap fa-fw"></i>Update Interview Status<span class="fa arrow"></span></a>
                    </li> -->
                    <li>
                        <a href="update_profile.php"><i class="fa fa-sitemap fa-fw"></i>Profile<span class="fa arrow"></span></a>
                    </li>
                    <li>
                        <a href="postjobs.php"><i class="fa fa-sitemap fa-fw"></i>Post Jobs<span class="fa arrow"></span></a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
  

    <br>
    <br>
    <br>

    <div class="container">
                    <div class="row col-md-6 col-md-offset-3">
                      <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                          <h1>POST JOBS</h1>
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
                              <label for="email">EMAIL</label>
                              <input
                                type="text"
                                class="form-control"
                                id="email"
                                name="email"
                              />
                            </div>
                            
                            <div class="form-group">
                              <label for="venue">VENUE</label>
                              <input
                                type="text"
                                class="form-control"
                                id="venue"
                                name="venue"
                              />
                            </div>
                            <div class="form-group">
                              <label for="jobtype">JOB TYPE</label>
                              <input
                                type="text"
                                class="form-control"
                                id="jobtype"
                                name="jobtype"
                              />
                            </div>
                            <div class="form-group">
                              <label for="salary">SALARY</label>
                              <input
                                type="text"
                                class="form-control"
                                id="salary"
                                name="salary"
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function()
    {
        $(".err").val("");
        $(".succ").val("");

    });
</script>
<!-- jQuery -->
<!-- <script src="js/jquery.min.js"></script> -->

<!-- Bootstrap Core JavaScript -->
<!-- <script src="js/bootstrap.min.js"></script> -->

<!-- Metis Menu Plugin JavaScript -->
<!-- <script src="js/metisMenu.min.js"></script> -->

<!-- Custom Theme JavaScript -->
<!-- <script src="js/startmin.js"></script> -->

</body>
</html>
