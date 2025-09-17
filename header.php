<header class="header trans_300">

    <!-- Top Navigation -->

	<!-- <div class="top_nav" style="background-color: lightgreen;"> -->
    <div class="container" style="background-color: lightgreen;">
        <div class="row" style="background-color: lightgreen;">
            <div class="col-md-6" style="background-color: lightgreen;">
                <!-- <div class="top_nav_left">sjec</div> --> 
                <!-- <img src="sjec-logo.png" alt="SJEC Logo" class="logo" style="width: 60px; height: auto;"> -->
            </div>
            <!-- <div class="col-md-6 text-right">
                <div class="top_nav_right">
                    <ul class="top_nav_menu">
                        <?php if(isset($_SESSION['f_id'])){ ?>
                        <li class="account">
                            <a href="logout.php">Logout</a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div> -->
        </div>

</div>


    <!-- Main Navigation -->

	<div class="main_nav_container" style="background-color:white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-right">
                <div class="logo_container" >
                <img src="sjec-logo.png" alt="SJEC Logo" class="logo" style="width: 80px; height: auto; margin-left: -8em;">
                    <a href="#" style="color: black; font-size: 18px;">subject allotment<br><span style="color: black; font-size: 16px;"></span></a>
                </div>

                <nav class="navbar">
                    <ul class="navbar_menu">
                        <li><a href="inde.php" style="font-weight: bold;">Home</a></li>
                        
                        <li class="account" style="background-color: white; margin-top: -38px">
                            <a href="sem.php" style="font-weight: bold;">SEMESTER <i class="fa fa-angle-down"></i></a>
                            <ul class="account_selection" style="width:250px">
                            <?php 
                                $m=$admin->ret("SELECT * FROM `semester`");
                                while($r=$m->fetch(PDO::FETCH_ASSOC)){ ?>
                                   <li><a href="sem.php?id=<?php echo $r['ID']?>"><i class="fa fa-sign-in" aria-hidden="true"></i><?php echo $r['SemesterName']?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
						<li class="account" style="background-color: white; margin-top: -38px">
                            <a href="sub.php" style="font-weight: bold;">Subject Allotment <i class="fa fa-angle-down"></i></a>
                            <ul class="account_selection" style="width:250px">
                                <?php 
                                $m=$admin->ret("SELECT * FROM `semester`");
                                while($r=$m->fetch(PDO::FETCH_ASSOC)){ ?> 
                                    <li><a href="sub.php?id=<?php echo $r['ID']?>"><i class="fa fa-sign-in" aria-hidden="true"></i><?php echo $r['SemesterName']?></a></li>
                                <?php } ?>
                            </ul> 
                        </li>
                        <li><a href="account.php" style="font-weight: bold;">My Account</a></li>
                    
                            <li><a href="logout.php" style="font-weight: bold;">Logout</a></li>
                        
                    </ul>
                    <ul class="navbar_user">
                        <!-- Add any additional user-related items here if needed -->
                    </ul>
                    <div class="hamburger_container">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

</header>
