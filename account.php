<?php
session_start(); // Start the session
include 'config.php';
$admin = new Admin();

// Check if session variable is not set or empty
if (!isset($_SESSION['f_id']) || empty($_SESSION['f_id'])) {
    header('Location:login/login.php');
    exit(); // Ensure that script stops after redirection
}

$fid = $_SESSION['f_id']; // Assuming c_id is the faculty ID stored in the session

// Fetch faculty data
$st = $admin->ret("SELECT * FROM `faculty` WHERE `f_id`='$fid'");
$ro = $st->fetch(PDO::FETCH_ASSOC);

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

    

    <!-- Map Container -->

    


<!-- code starts-->





<div class="blogs">
    <br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h2>Account</h2>
					</div>
				</div>
			</div>
    <br>
    <br>
    <br>


			<div class="row blogs_container">


<div class="col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                      <!-- <img src="images/<?php echo $ro['image']?>" alt="Admin" class="rounded-circle p-1 bg-danger" width="110"> -->
                      <div class="mt-3">
                        <h4><?php echo $ro['fullname']?></h4>
                        <p class="mb-1"><?php echo $ro['email']?></p>
                        <p class="font-size mb-1"><?php echo $ro['address']?></p>
                        <p class="font-size-sm mb-1"><?php echo $ro['contact']?></p>
                        <p class="font-size-sm mb-1"><?php echo $ro['qualification']?></p>
                        <p class="font-size-sm mb-1"><?php echo $ro['experience']?></p>
                        
                        
                      </div>
                    </div>
                    <hr class="" />
                    
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card">
                  <div class="card-body">
                    <form method="POST" action="controller/updateprofile.php">
                    <div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Full Name</h6>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php echo $ro['fullname']?>" name="fullname" />
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php echo $ro['email']?>" name="email"/>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Address</h6>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php echo $ro['address']?>" name="address"/>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Phone</h6>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php echo $ro['contact']?>" name="contact"/>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Qualification</h6>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php echo $ro['qualification']?>" name="qualification"/>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Experience</h6>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php echo $ro['experience']?>" name="experience"/>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-sm-3"></div>
                      <div class="col-sm-9">
                        <input type="submit" name="edit" class="btn btn-danger px-4" value="Save Changes" onclick="return confirm('Are you sure??????');">
                      </div>
                    </div>
                  </form>
                  </div>
                </div>
                
              </div>





			</div>
		</div>
	</div>

<!-- code ends-->


<hr>

  <!-- Footer -->

  <?php include 'footer.php'?>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/contact_custom.js"></script>
</body>

</html>
