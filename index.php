<?php 
include('admin/includes/dbconnection.php'); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <style>
        body {
            background-image: url("front.avif"); /* Replace 'path/to/background.jpg' with the actual path to your background image */
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the background image */
        }
    </style>
        <title>Faculty Subject Allocation System</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
        
        
    </head>
    <body>
        <!-- Responsive navbar-->
        <style>
    .navbar-brand {
        color: black;
        font-weight: bold;
        line-height: 1; /* Adjust line height to minimize space between lines */
    }
    .navbar-brand small {
        font-size: 0.8em; /* Reduce font size of the smaller text */
        color: black; /* Set color to black */
    }
    .logo {
        margin-left: auto; /* Move the logo to the right */
        margin-right: 10px; /* Keep some space between logo and text */
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-white">
    <div class="container">
        <img src="sjec-logo.png" alt="Your Logo" class="logo" style="width: 100px; height: auto;">

        <a class="navbar-brand" href="#!">ST JOSEPH ENGINEERING COLLEGE <br><small style="color: black;">Vamanjoor, Mangaluru<br>An Autonomous Institution</small></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="index.php" style="color: black; font-weight: bold;">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="admin/login.php" style="color: black; font-weight: bold;">Admin</a></li>
                <li class="nav-item"><a class="nav-link" href="login/login.php" style="color: black; font-weight: bold;">Faculty</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Page header with logo and tagline-->
<center>
<header class="py-3 mb-2" style="background-image: url('front.avif'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="text-center my-3">
            <h3 class="fw-bolder">Subject Allotment System</h3>
        </div>
    </div>
</header>


     <!-- Page content-->
<div class="container" style="height: 100%; margin: 0; display: flex; justify-content: center; align-items: center;margin-right: 50px;">
    <div class="row">
        <!-- Blog entries-->
        
        <!-- Side widgets-->
        <div class="col-lg-12">
            <!-- Search widget-->
            <div class="d-flex justify-content-center"> <!-- Center the search panel -->
                <div class="card mb-6" style="max-width: 300px; background-color: #d3f7d5;">
                    <div class="card-header">Search</div>
                    <form method="post">
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Faculty Name or Subject "Enter search term..." aria-describedby="button-search" name="searchdata" />
                            </div>
                            <div class="mt-2">
                                <div class="input-group-append d-block">
                                    <center><button class="btn btn-success btn-sm" id="button-search" name="search" type="submit">Go!</button></center>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</center>



                    <!-- Categories widget-->
                      <?php
if(isset($_POST['search']))
{ 
$sdata=$_POST['searchdata'];
  ?>
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">


  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4>

                                        <table  class="table table-striped table-bordered" border="1">
                                            <thead>
                                               <tr>
                                                    <th>S.No</th>
                                                    <th>Employee Name</th>
                                                    <th>Semester Name</th>
                                                    <th>Subject Name</th>
                                                    <th>Allocation Date</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
$sql="SELECT suballocation.ID as suballid,suballocation.CourseID,suballocation.f_id,suballocation.Subid,suballocation.AllocationDate,faculty.f_id,faculty.username,semester.SemesterName,subject.ID,subject.CourseID,subject.SubjectFullname,subject.SubjectShortname,subject.SubjectCode from suballocation join faculty on faculty.f_id=suballocation.f_id join semester on semester.ID=suballocation.CourseID join subject on subject.ID=suballocation.Subid where faculty.f_id like '$sdata%' || faculty.username like '$sdata%' || subject.SubjectFullname like '$sdata%'";

$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
   
                                                <tr>
                                                    <td><?php echo htmlentities($cnt);?></td>
                                                    <td>
                                                        <?php  echo htmlentities($row->username);?> (<?php  echo htmlentities($row->f_id);?>)
                                                    </td>
                                                    <td>
                                                        <?php  echo htmlentities($row->SemesterName);?>
                                                    </td>
                                                   <td>
                                                        <?php  echo htmlentities($row->SubjectFullname);?>(<?php  echo htmlentities($row->SubjectCode);?>)
                                                    </td>
                                                    <td>
                                                        <?php  echo htmlentities($row->AllocationDate);?>
                                                    </td>
                                                    
                                                </tr>
                                             <?php 
$cnt=$cnt+1;
} } else { ?>
  <tr>
    <td colspan="9"> No record found against this search</td>

  </tr>
                                            </tbody>
                                            
 
                                        </table>
                                        
              
                        </div>
                    </div>
                          <?php } }?>
                    <!-- Side widget-->
       
                </div>
            </div>
        </div>
        <!-- Footer-->

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
