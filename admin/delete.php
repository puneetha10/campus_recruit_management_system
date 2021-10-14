<?php
$conn=mysqli_connect("localhost","root","","ospforms");
if(mysqli_connect_error()){
die("Database connection Error");
}
// $id=$_GET['ID'];
// $query="delete from users where ID='$id'";
$sql = "DELETE FROM users WHERE ID='" . $_GET["ID"] . "'";
$data=mysqli_query($conn,$sql);
if($data)
{
    echo "<script>Record Deleted from database</script>";
}
else
{
    echo "<script>failed to delete record from database</script>";
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

        <title>Delete Student</title>
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
    td = tr[i].getElementsByTagName("td")[1];
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
            <li><a href="#"><i class="fa fa-home fa-fw"></i>Admin Website</a></li>
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
                            <h1 class="page-header">Student Details</h1>
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
                                      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Names..">
                                      <?php
                                      $conn=mysqli_connect("localhost","root","","ospforms");
                                      $db=mysqli_select_db($conn,"ospforms");
                                      $query="select ID,NAME,EMAIL,PHONE from users";
                                      $query_run=mysqli_query($conn,$query);
                                      ?>
                                        <table class="table table-striped table-bordered table-hover" id="dataTables">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">NAME OF THE STUDENT</th>
                                                    <th scope="col">EMAIL</th>
                                                    <th scope="col">MOBILE NUMBER</th>
                                
                                                    <th scope="col">DELETE</th>
                                                </tr>
                                            </thead>
                                            <?php
                                                if($query_run)
                                                {
                                                    foreach($query_run as $row)
                                                    {
                                            ?>
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo $row['ID'];?></td>
                                                        <td><?php echo $row['NAME'];?></td>
                                                        <td><?php echo $row['EMAIL'];?></td>
                                                        <td><?php echo $row['PHONE'];?></td>
                                                        <td><a href="delete.php?ID=<?php echo $row["ID"]; ?>"><button class="btn btn-danger">Delete</button></a></td>
                                                           
            
                                                    </tr>
                                                </tbody>
                                            <?php
                                                    }
                                                }
                                            else{
                                                echo "no record found";
                                            }
                                            
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script>
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
            });
        
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
