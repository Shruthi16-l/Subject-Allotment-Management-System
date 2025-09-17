<?php
include 'config.php';
$admin=new Admin();
$id=$_SESSION['f_id'];
if(!isset($_SESSION['f_id'])){
// header('Location:login/login.php');

 }


$id=$_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">


<style type="text/css">
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

body {
    font-family: "Poppins", sans-serif;
    color: #444444;
}

a,
a:hover {
    text-decoration: none;
    color: inherit;
}

.section-products {
    padding: 80px 0 54px;
}

.section-products .header {
    margin-bottom: 50px;
}

.section-products .header h3 {
    font-size: 1rem;
    color: #fe302f;
    font-weight: 500;
}

.section-products .header h2 {
    font-size: 2.2rem;
    font-weight: 400;
    color: #444444; 
}

.section-products .single-product {
    margin-bottom: 26px;
}

.section-products .single-product .part-1 {
    position: relative;
    height: 290px;
    max-height: 290px;
    margin-bottom: 20px;
    overflow: hidden;
}

.section-products .single-product .part-1::before {
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    transition: all 0.3s;
}

.section-products .single-product:hover .part-1::before {
    transform: scale(1.2,1.2) rotate(5deg);
}

.section-products #product-1 .part-1::before {
    background: url("https://i.ibb.co/L8Nrb7p/1.jpg") no-repeat center;
    background-size: cover;
    transition: all 0.3s;
}

.section-products #product-2 .part-1::before {
    background: url("https://i.ibb.co/cLnZjnS/2.jpg") no-repeat center;
    background-size: cover;
}

.section-products #product-3 .part-1::before {
    background: url("https://i.ibb.co/L8Nrb7p/1.jpg") no-repeat center;
    background-size: cover;
}

.section-products #product-4 .part-1::before {
    background: url("https://i.ibb.co/cLnZjnS/2.jpg") no-repeat center;
    background-size: cover;
}

.section-products .single-product .part-1 .discount,
.section-products .single-product .part-1 .new {
    position: absolute;
    top: 15px;
    left: 20px;
    color: #ffffff;
    background-color: #fe302f;
    padding: 2px 8px;
    text-transform: uppercase;
    font-size: 0.85rem;
}

.section-products .single-product .part-1 .new {
    left: 0;
    background-color: #444444;
}

.section-products .single-product .part-1 ul {
    position: absolute;
    bottom: -41px;
    left: 20px;
    margin: 0;
    padding: 0;
    list-style: none;
    opacity: 0;
    transition: bottom 0.5s, opacity 0.5s;
}

.section-products .single-product:hover .part-1 ul {
    bottom: 30px;
    opacity: 1;
}

.section-products .single-product .part-1 ul li {
    display: inline-block;
    margin-right: 4px;
}

.section-products .single-product .part-1 ul li a {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    background-color: #ffffff;
    color: #444444;
    text-align: center;
    box-shadow: 0 2px 20px rgb(50 50 50 / 10%);
    transition: color 0.2s;
}

.section-products .single-product .part-1 ul li a:hover {
    color: #fe302f;
}

.section-products .single-product .part-2 .product-title {
    font-size: 1rem;
}

.section-products .single-product .part-2 h4 {
    display: inline-block;
    font-size: 1rem;
}

.section-products .single-product .part-2 .product-old-price {
    position: relative;
    padding: 0 7px;
    margin-right: 2px;
    opacity: 0.6;
}

.section-products .single-product .part-2 .product-old-price::after {
    position: absolute;
    content: "";
    top: 50%;
    left: 0;
    width: 100%;
    height: 1px;
    background-color: #444444;
    transform: translateY(-50%);
}

</style>
</head>

<body>

<div class="super_container">

  <!-- Header -->

  <?php include 'header.php'?>
  <body  style="background-image: url('front.avif'); background-size: cover; background-position: center; background-repeat: no-repeat;"> 



  <div class="fs_menu_overlay"></div>

  <!-- Hamburger Menu -->

  <div class="hamburger_menu">
    <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
    <div class="hamburger_menu_content text-right">
      <ul class="menu_top_nav">
        <li class="menu_item has-children">
          <a href="#">
            usd
            <i class="fa fa-angle-down"></i>
          </a>
          <ul class="menu_selection">
            <li><a href="#">cad</a></li>
            <li><a href="#">aud</a></li>
            <li><a href="#">eur</a></li>
            <li><a href="#">gbp</a></li>
          </ul>
        </li>
        <li class="menu_item has-children">
          <a href="#">
            English
            <i class="fa fa-angle-down"></i>
          </a>
          <ul class="menu_selection">
            <li><a href="#">French</a></li>
            <li><a href="#">Italian</a></li>
            <li><a href="#">German</a></li>
            <li><a href="#">Spanish</a></li>
          </ul>
        </li>
        <li class="menu_item has-children">
          <a href="#">
            My Account
            <i class="fa fa-angle-down"></i>
          </a>
          <ul class="menu_selection">
            <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
            <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
          </ul>
        </li>
        <li class="menu_item"><a href="#">home</a></li>
        <li class="menu_item"><a href="#">shop</a></li>
        <li class="menu_item"><a href="#">promotion</a></li>
        <li class="menu_item"><a href="#">pages</a></li>
        <li class="menu_item"><a href="#">blog</a></li>
        <li class="menu_item"><a href="#">contact</a></li>
      </ul>
    </div>
  </div>
<br>
<br>
<br>
<br>
<br>
    

    <!-- Map Container -->

    


<!-- code starts-->



<br>
<br>
<br>
<center>
<div class="blogs">
    <div class="col-md-8">
        <div class="card alert">
            <div class="card-header pr">
                <h4>View Subject Allotment</h4>
            </div>
            <div class="card-body">
                <div>
                    <table class="table student-data-table m-t-20">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Semester</th>
                                <th>Faculty Name</th>
                                <th>Subject Name</th>
                                <th>Subject Short Name</th>
                                <th>Subject Code</th>
                                <th>Credits</th>
                                <th>Total hours</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Assuming you have already connected to your database and initialized $admin

                            // Check if semester ID is provided in the URL
                            if(isset($_GET['id'])) {
                                $selectedSemesterID = $_GET['id'];

                                // Fetch semester name based on semester ID
                                $stmt_semester = $admin->ret("SELECT SemesterName FROM semester WHERE ID = $selectedSemesterID");

                                if ($stmt_semester) {
                                    $semester_row = $stmt_semester->fetch(PDO::FETCH_ASSOC);
                                    $selectedSemester = $semester_row['SemesterName'];

                                    // Fetch subjects related to the selected semester with faculty names
                                    $stmt = $admin->ret("SELECT s.*, sem.SemesterName, f.fullname FROM suballocation sa
                                                        INNER JOIN semester sem ON sa.CourseID = sem.ID 
                                                        INNER JOIN subject s ON sa.Subid = s.ID
                                                        INNER JOIN faculty f ON sa.f_id = f.f_id
                                                        WHERE sem.SemesterName = '$selectedSemester'");
                                    
                                    // Check if any subjects are found
                                    if ($stmt) {
                                        $cnt = 1; // Initialize counter
                                        // Output subjects
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            echo "<tr>";
                                            echo "<td>" . htmlentities($cnt) . "</td>";
                                            echo "<td>" . htmlentities($row['SemesterName']) . "</td>";
                                            echo "<td>" . htmlentities($row['fullname']) . "</td>";
                                            echo "<td>" . htmlentities($row['SubjectFullname']) . "</td>";
                                            echo "<td>" . htmlentities($row['SubjectShortname']) . "</td>";
                                            echo "<td>" . htmlentities($row['SubjectCode']) . "</td>";
                                            echo "<td>" . htmlentities($row['credits']) . "</td>";
                                            echo "<td>" . htmlentities($row['t_hours']) . "</td>";
                                            echo "</tr>";
                                            $cnt++; // Increment counter
                                        }
                                    } else {
                                        // No subjects found for the selected semester
                                        echo "<tr><td colspan='8'>No subjects found for the selected semester.</td></tr>";
                                    }
                                } else {
                                    // Semester ID not found in database
                                    echo "<tr><td colspan='8'>Semester ID not found.</td></tr>";
                                }
                            } else {
                                // Semester ID not provided in URL
                                echo "<tr><td colspan='8'>Semester ID not provided.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
                        </center>

    <!-- code ends -->

    <hr>
    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Footer -->
   

    <!-- <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/Isotope/isotope.pkgd.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=YOUR_API_KEY"></script>
    <script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <script src="js/contact_custom.js"></script> --> 
</body>

</html>