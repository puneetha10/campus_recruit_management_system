<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>View-Student</title>
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
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("dataTables");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>


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
            <a class="navbar-brand" href="admin_dashboard.php">RECRUITMENT</a>
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
                        <a href="admin_Dashboard.php" ><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="delete_student.php"><i class="fa fa-sitemap fa-fw" class="active"></i>Delete Student<span class="fa arrow"></span></a>
                    </li>
                    <li>
                        <a href="delete_company.php"><i class="fa fa-sitemap fa-fw"></i>Delete Company<span class="fa arrow"></span></a>
                    </li>
                    <li>
                        <a href="view_student_details.php"><i class="fa fa-sitemap fa-fw"></i>View Students<span class="fa arrow"></span></a>
                    </li>
                    <li>
                        <a href="view_company_details.php"><i class="fa fa-sitemap fa-fw"></i>View Company<span class="fa arrow"></span></a>
                    </li>
                    <li>
                        <a href="view_issues.php"><i class="fa fa-sitemap fa-fw"></i>View Issues<span class="fa arrow"></span></a>
                    </li>
                   
                </ul>

            </div>
        </div>
    </nav>
               

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- <h1 class="page-header">Tables</h1> -->
                        </div>
                        <br>
                        <br>
                        <br>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    ISSUES GIVEN BY USERS
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for email..">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables">
                                            <thead>
                                                <tr>
                                                    <th>CID</th>
                                                    <th>FIRST NAME</th>
                                                    <th>LAST NAME</th>
                                                    <th>EMAIL</th>
                                                    <th>MOBILE NUMBER</th>
                                                    <th>ISSUE</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            // session_start();
                                            $conn=mysqli_connect("localhost","root","","ospforms");
                                            if($conn-> connect_error){
                                                die("Connection failed :". $conn-> connect_error);
                                            }
                                            // $sql="SELECT users.NAME,users.EMAIL,users.PHONE,users.SKILLS,users.PROJECTS FROM users INNER JOIN applyjobs ON users.EMAIL=applyjobs.STMAIL WHERE applyjobs.APEMAIL='".mysqli_real_escape_string($conn,$_SESSION['cmail'])."'";
                                            // $sql="SELECT NAME,EMAIL,PHONE,SKILLS,PROJECTS from users as u join applyjobs as a on u.EMAIL=a.STMAIL where a.APEMAIL='".mysqli_real_escape_string($conn,$_SESSION['cmail'])."'";
                                            $sql="select * from contactform";
                                            $result=$conn-> query($sql);
                                            if($result-> num_rows>0)
                                            {
                                                while($row=$result-> fetch_assoc()){
                                                    echo "<tr><td>". $row["CID"]."</td><td>".$row["FNAME"]."</td><td>".$row["LNAME"]."</td><td>".$row["EID"]."</td><td>".$row["PHNO"]."</td><td>".$row["QUERY"]."</td><tr>";
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
        <!-- /#wrapper -->

        <!-- jQuery -->
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
