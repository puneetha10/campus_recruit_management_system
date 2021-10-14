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
    if(!$_POST['name'])
    {
        $error .="Name is required<br>";
    }
    if(!$_POST['email'])
    {
        
        $error .= "An email address is required<br>";
    }
    if(!$_POST['phone'])
    {
        
        $error .= "Mobile number is required<br>";
    }
    if(!$_POST['headquarters'])
    {
        
        $error .= "Headquarters is required<br>";
    }
    if(!$_POST['companysize'])
    {
      $error .= "Company Size is required";
    }
    if(!$_POST['companyinfo'])
    {
        
        $error .= "Company Info is required<br>";
    }
    if(!$_POST['industry'])
    {
        
        $error .= "Industry is required<br>";
    }
    if(!$_POST['foundedby'])
    {
        
        $error .= "Provide the founder of the company <br>";
    }
    if(!$_POST['companytype'])
    {
        
        $error .= "Mention the type of the company<br>";
    }
    if(!$_POST['website'])
    {
        
        $error .= "Website Link is required<br>";
    }
    if(!$_POST['intro'])
    {
        
        $error .= "Write About your Company<br>";
    }
    if(!$_POST['specialities'])
    {
        
        $error .= "Write about specialities provided by the Comapny<br>";
    }

    if($error!="")
    {
        
        $error = "<p>There is an error in your form</p>".$error;
    }
    else
    {
            $query = "UPDATE cusers SET CNAME ='".mysqli_real_escape_string($link,$_POST['name'])."',
            CEID = '".mysqli_real_escape_string($link,$_POST['email'])."',
            CPH = '".mysqli_real_escape_string($link,$_POST['phone'])."',
            CHEAD = '".mysqli_real_escape_string($link,$_POST['headquarters'])."',
            CSIZE = '".mysqli_real_escape_string($link,$_POST['companysize'])."',
            CINFO = '".mysqli_real_escape_string($link,$_POST['companyinfo'])."',
            CIND = '".mysqli_real_escape_string($link,$_POST['industry'])."',
            CFDB = '".mysqli_real_escape_string($link,$_POST['foundedby'])."',
            CTYP = '".mysqli_real_escape_string($link,$_POST['companytype'])."',
            CWEB = '".mysqli_real_escape_string($link,$_POST['website'])."',
            CINT = '".mysqli_real_escape_string($link,$_POST['intro'])."',
            CSPE = '".mysqli_real_escape_string($link,$_POST['specialities'])."'
            WHERE CEID = '".mysqli_real_escape_string($link,$_SESSION['cmail'])."'";
            
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
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Update Profile</title>
<style>
#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}
</style>
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="datatables.js"></script>

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
            <a class="navbar-brand" href="company_dashboard.html">RECRUITMENT</a>
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
    

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">My Profile</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                               
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                      <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Names.."> -->
                                      <?php
                                      $conn=mysqli_connect("localhost","root","","ospforms");
                                      $db=mysqli_select_db($conn,"ospforms");
                                      $query="select CNAME,CEID,CPH,CHEAD,CSIZE,CINFO,CIND,CFDB,CTYP,CWEB,CINT,CSPE from cusers";
                                      $query_run=mysqli_query($conn,$query);
                                      ?>
                                        <table class="table table-striped table-bordered table-hover" id="dataTables">
                                            <thead>
                                                <tr>
                                                    <th >NAME OF THE COMPANY</th>
                                                    <th >EMAIL</th>
                                                    <th >PHONE NUMBER</th>
                                                    <th >HEADQUARTERS</th>
                                                    <th >COMPANY SIZE</th>
                                                    <th >COMPANY INFO</th>
                                                    <th >INDUSTRY</th>
                                                    <th >FOUNDED BY</th>
                                                    <th >TYPE</th>
                                                    <th >WEBSITE</th>
                                                    <th >INTRODUCTION</th>
                                                    <th >SPECIALITIES</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            
                                            $conn=mysqli_connect("localhost","root","","ospforms");
                                            if($conn-> connect_error){
                                                die("Connection failed :". $conn-> connect_error);
                                            }
                                            
                                            $sql="SELECT CNAME,CEID,CPH from cusers WHERE CEID = '".mysqli_real_escape_string($conn,$_SESSION['cmail'])."'";
                                            $sql1="SELECT CHEAD,CSIZE,CINFO,CIND,CFDB,CTYP,CWEB,CINT,CSPE from cusers WHERE CEID = '".mysqli_real_escape_string($conn,$_SESSION['cmail'])."'";
                                            $result1 = $conn->query($sql1);
                                            $result=$conn-> query($sql);
                                            if($result-> num_rows>0)
                                            {
                                                while($row=$result-> fetch_assoc() and $row1=$result1->fetch_assoc()){
                                                    echo "<tr><td>". $row["CNAME"]."</td><td>".$row["CEID"]."</td><td>".$row["CPH"]."</td><td>".$row1["CHEAD"]."</td><td>".$row1["CSIZE"]."</td><td>".$row1["CINFO"]."</td><td>".$row1["CIND"]."</td><td>".$row1["CFDB"]."</td><td>".$row1["CTYP"]."</td><td>".$row1["CWEB"]."</td><td>".$row1["CINT"]."</td><td>".$row1["CSPE"]."</td></tr>";
                                                }
                                                echo "</table>";
                                            }
                                            else{
                                                echo "0 result";
                                            }
                                            $sql="SELECT CNAME,CEID,CPH,CHEAD,CSIZE,CINFO,CIND,CFDB,CTYP,CWEB,CINT,CSPE from cusers WHERE CEID = '".mysqli_real_escape_string($conn,$_SESSION['cmail'])."'";
                                            
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


                                           
                                               
                                                        
                                                        
                                          

<!---PROFILE FORM-->
            <div class="container">
                <div class="row col-md-6 col-md-offset-3">
                    <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <h1>UPDATE DETAILS</h1>
                    </div>
                    <div class="panel-body">
                        <form method="post">
                        
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input
                            type="text"
                            class="form-control"
                            id="name"
                            name="name"
                            />
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input
                            type="text"
                            class="form-control"
                            id="email"
                            name="email" />
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input
                            type="number"
                            class="form-control"
                            id="phone"
                            name="phone"/>
                        </div>
                        <div class="form-group">
                            <label for="headquarters">Head Quarters</label>
                            <input
                            type="text"
                            class="form-control"
                            id="headquarters"
                            name="headquarters" />
                        </div>
                        <div class="form-group">
                            <label for="companysize">Company Size</label>
                            <input
                            type="text"
                            class="form-control"
                            id="companysize"
                            name="companysize" />
                        </div>
                        <div class="form-group">
                            <label for="companyinfo">Company Info</label>
                            <input
                            type="text"
                            class="form-control"
                            id="companyinfo"
                            name="companyinfo" />
                        </div>
                        <div class="form-group">
                            <label for="industry">Industry</label>
                            <input
                            type="text"
                            class="form-control"
                            id="industry"
                            name="industry" />
                        </div>
                        <div class="form-group">
                            <label for="foundedby">Founded By</label>
                            <input
                            type="text"
                            class="form-control"
                            id="foundedby"
                            name="foundedby" />
                        </div>
                        <div class="form-group">
                            <label for="companytype">Type</label>
                            <input
                            type="text"
                            class="form-control"
                            id="companytype"
                            name="companytype" />
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input
                            type="text"
                            class="form-control"
                            id="website"
                            name="website" />
                        </div>
                        <div class="form-group">
                            <label for="intro">Introduction</label>
                            <input
                            type="textarea"
                            class="form-control"
                            id="intro"
                            name="intro" />
                        </div>
                        <div class="form-group">
                            <label for="specialities">Specialities</label>
                            <input
                            type="textarea"
                            class="form-control"
                            id="specialities"
                            name="specialities" />
                        </div>
                        <input type="submit" name="submit" value="SUBMIT" id="submit" class="btn btn-primary" />
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































































        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

        <!---Profile Form -->
































        <!-- <script>
            $(document).ready(function(){
                $('.deletebtn').on('click',function(){
                    $('#deletemodal').modal('show');
                    // $tr=$(this).closest('tr');
                    // var data=$tr.children("td").map(function(){
                    //     return $(this).text();
                    // }).get();
                    // console.log(data);
                    // $('#update_id').val(date[0]);
                });
            }); -->
        
        </script>
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="startmin-master\Company\js\dataTables\jquery.dataTables.min.js"></script>
        <script src="startmin-master\Company\js\dataTables\dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>
