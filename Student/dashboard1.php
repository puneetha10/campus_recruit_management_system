<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
        table {
          /* border:sandybrown; */
          /* width: 90%; */
          margin-left: 2px;
          /* margin-right: 2000px; */
          /* text-align: center; */
         
          
        }
        /* th,tr,td{
          text-align: center;
        }
/*          */
        /* td {
          text-align:center;
          padding: 30px;
        } */ */
        
        /* tr:nth-child(even){background-color: #f2f2f2} */
        
        /* th {
          background-color: red;
          color: white;
          font-size: 25px;
          text-align: center;
        } */
        </style>
  </head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DASHBOARD</title>
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
font-size: 16px;"> &nbsp; <a href="index.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
<div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> &nbsp;  </div>
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
                        <a  href="profile.php"><i class="fa fa-desktop fa-3x"></i>PROFILE</a>
                    </li>
                    <li>
                        <a  href="jobs.php"><i class="fa fa-qrcode fa-3x"></i>JOBS</a>
                    </li>
			
                    <li  >
                         <a  href="experience.php"><i class="fa fa-edit fa-3x"></i>INTERVIEW EXPERIENCE</a> 
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
    </ul>                                                         
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                
                    </div>
                </div>
                
                 <hr />
               
       </div>
                <div id="page-wrapper">
                  <div class="container-fluid">
                  <div class="row">
                  </div>
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="panel panel-default">
                              <!-- <div class="panel-heading">
                              APPLY JOBS
                              </div> -->
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

          
    <!-- <div>
        <table >
            <tr>
              <th style="text-align: center;">S.no</th>
              <th style="text-align: center;">Company Type</th> 
              <th style="text-align: center;">Job Type</th>
            </tr>
            <tr >
              <td>1</td>
              <td>Qualcomm</td>
              <td>Super Dream Internship Software</td>
            </tr>
            <tr >
              <td>2</td>
              <td>Intel</td>
              <td>Super Dream Internship Software</td>
            </tr>
            <tr >
              <td>3</td>
              <td>VM Ware</td>
              <td>Super Dream Internship Software</td>
            </tr>
            <tr >
              <td>4</td>
              <td>Media Tek Pvt Ltd</td>
              <td>Super Dream Internship Software</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Infineon technologies</td>
              <td>Super Dream Internship Software</td>
            </tr>
            <tr>
              <td>6</td>
              <td>virtusa</td>
              <td>Dream Internship Software</td>
            </tr>
            <tr>
              <td>7</td>
              <td>Philips</td>
              <td>Super Dream Internship Software</td>
            </tr>
            <tr >
              <td>8</td>
              <td>Danfoss</td>
              <td>Dream Internship Software</td>
            </tr>
            <tr>
              <td>9</td>
              <td>Buddi</td>
              <td>Dream Internship Software</td>
            </tr>
            <tr>
              <td>10</td>
              <td>nutanix</td>
              <td>Super Dream Internship Software</td>
            </tr>
          </table>
    </div> -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
