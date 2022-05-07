<?php 
    session_start(); 
    include('headder.php' );
     
?>
<!doctype html>
<html lang="en">
  
<?php ?>
    <body>
        
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <!-- <img src="image/.png" > -->
                    <h4 class="nav-link" style="font-size: medium; padding-top:15px; color:#4592B6;text-transform: uppercase;">Welcome, <?php 
                    if(!empty($_SESSION['user'])){
                        echo $_SESSION['user'];
                    }
                    else if(!empty($_SESSION['adminusername'])){
                        echo $_SESSION['adminusername'];
                    }
                    else if(!empty($_SESSION['empusername'])){
                        echo $_SESSION['empusername'];
                    }

                    else { echo "NOOBIE"; }?></h4> 
                    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                         
                            
                            <?php  if(!empty($_SESSION['user'])){ ?>
                                <li class="nav-item " ><a class="nav-link" href="profile.php">Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="admin/booked.php">Booked services</a></li>
                            <li class="nav-item " ><a class="nav-link" href="logout.php">Logout</a></li>

                            <?php  } else if(!empty($_SESSION['adminusername'])){ ?>
                             
                            <li class="nav-item"><a class="nav-link" href="admin/admin_dashboard.php">Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link" href="admin/list.php">Employee list</a></li>
                            <li class="nav-item"><a class="nav-link" href="admin/hire.php">hire</a></li>
                            <li class="nav-item"><a class="nav-link" href="admin/list.php">Fire</a></li>
                            <li class="nav-item " ><a class="nav-link" href="logout.php">Logout</a></li>


                            <?php } else if(!empty($_SESSION['empusername'])){ ?>
                                <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li> 
                                <li class="nav-item " ><a class="nav-link" href="admin/employee.php">Bookings</a></li>
                            <li class="nav-item " ><a class="nav-link" href="logout.php">Logout</a></li>


                            <?php } else {?>
                                <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="admin/admin_login.php">Admin</a></li>
                            <li class="nav-item"><a class="nav-link" href="admin/emp_login.php">Employee</a></li>
                            <?php } ?>
                            
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
        
        
        <!--================Banner Area =================-->
        
        <section class="banner_area"> 
            <div class="booking_table d_flex align-items-center" style="width: 100%; height:100%; background-color:#12124f">
            	<!-- <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div> -->
				<img src="https://media-public.canva.com/MADGv8Tcsnc/6/screen.jpg" class="pl-4 hover-overlay ripple shadow-1-strong rounded" alt="">
                <div class="container" >
					<div class="banner_content text-center">
						
						<h2>EASY HOME</h2>
                        <p>The services You are looking for right at your doorstep</p>
                        
                        <?php  if(!empty($_SESSION['user'])){ ?>
                        <a href="services.php" class="btn theme_btn button_hover rounded">Book Now</a>
                        <?php 
                            }
                            else{
                        ?>
                            <a href="login.php" class="btn theme_btn button_hover">Sign in</a>
                            <a href="register.php" class="btn theme_btn button_hover">Sign up</a>
                        <?php 
                            }
                        ?>
					</div>
				</div>
            </div>
        </section>
               
        <!--================Banner Area =================-->
        
   
            
            <div style="width: auto;padding: 5%;">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Services Offered</h2>
                    <p>You can select any services that we offer from below, make sure you stay home and stay safe   </p>
                </div>
                
                <div class="row mb_30">
                    <div class="col-lg-3 col-sm-6">
                        <div class="text-center">
                            <div class="hotel_img">
                                <img src="image/salon.png" alt="">
                                
                            </div>
                            <h4 class="sec_h4">Salon</h4>
                            
                        <a href="<?php  if(!empty($_SESSION['user'])){ ?>salon.php<?php } else { ?> # <?php } ?>" class="btn theme_btn button_hover">Book Now</a>
                        
                                
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="text-center">
                            <div class="hotel_img">
                                <img src="image/carpentry.png" alt="">
                               
                            </div>
                            <h4 class="sec_h4">Carpentry</h4>
                            <a href="<?php  if(!empty($_SESSION['user'])){ ?>carpentry.php<?php } else { ?> # <?php } ?>" class="btn theme_btn button_hover">Book Now</a>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="text-center">
                            <div class="hotel_img">
                                <img src="image/cleaning.png" alt="">
                               
                            </div>
                            <h4 class="sec_h4">Cleaning </h4>
                            <a href="<?php  if(!empty($_SESSION['user'])){ ?>cleaning.php<?php } else { ?> # <?php } ?>" class="btn theme_btn button_hover">Book Now</a>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/electrician.jpeg" alt="">
                               
                            </div>
                            <h4 class="sec_h4">Electrician</h4>
                            <a href="<?php  if(!empty($_SESSION['user'])){ ?>electrician.php<?php } else { ?> # <?php } ?>" class="btn theme_btn button_hover">Book Now</a>
                            
                        </div>
                    </div>
                </div>
            </div></div>
      
        
         <!-- ================ start footer Area  =================	 -->
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Us</h6>
                            <p>We are the students of Sambhram Institute of Technology, We are very ambitious and very good in programming, We can handle any challenges that we face  </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Address</h6>
                            <p><address>
                                Sambhram Institute of Technology,<br>
                                CSE department,<br>
                                M.S. Palya, <br>
                                Via, Jalahalli East, <br>
                                Bengaluru, <br>
                                Karnataka-560097.
                            </address> </p>		

                        </div>
                    </div>

				<div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Contact Us</h6>
                            <p><address>
                                Desmond Valentine Fernandes: <br>
                                1ST19CS030 <br>
                                <a href="https://mail.google.com/mail/u/0/#inbox" style="color: inherit;">desmondfernandes2001@gmail.com</a><br>
                               
                                7483566904 <br><br>
                                G P Pavan:<br>
                                1ST19CS036 <br>
                                <a href="https://mail.google.com/mail/u/0/#inbox" style="color: inherit;">pavangp563@gmail.com</a><br>
                                9008805141 
                            </address> </p>		

                        </div>
                    </div>		

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">Follow us on:</h6>
                            <p>
                            Instagram:<br>@desmond.__.fernandes.<br>@pavan._.kalyan7.
                            </p>
                        </div>
                    </div>						
                </div>
            </div>
        </footer>
    </body>
</html>
<!-- <style>::-webkit-scrollbar {
  width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: red; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}</style> -->