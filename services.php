<!doctype html>
<html lang="en">
    <head>
       <?php include('headder.php');?>
    </head>
    <body style="overflow-x: hidden;" >
       
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item "><a class="nav-link" href="index.php">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                    </div> 
                </nav>
            </div>
</header>


        <br><br><br><br><br><br>

        <center><h5>Salon</h5></center><br>
        <div class="row" align="center" style="margin-left: 120px; ">

        <?php repeat("Haircut","salon"); ?>
        <?php repeat("Facial and Hair Styling","salon"); ?>
        <?php repeat("Waxing and Threading","salon"); ?>
        <?php repeat("Manicure and pedicure","salon"); ?>

        </div><br><br>


        <center><h5>Carpentry</h5></center><br>
        <div class="row" align="center" style="margin-left: 120px;">
            
        <?php repeat("Framing","Carpentry"); ?>
        <?php repeat("Roofing","Carpentry"); ?>
        <?php repeat("Structural work","Carpentry"); ?>
        <?php repeat("Flooring","Carpentry"); ?>
                       
        </div><br><br>
        <center><h5>Cleaners</h5></center><br>
        <div class="row" align="center" style="margin-left: 120px;">
            
        <?php repeat("Couch","Cleaning"); ?>
        <?php repeat("Bed","Cleaning"); ?>
        <?php repeat("Floor","Cleaning"); ?>
        <?php repeat("Full-Package","Cleaning"); ?>
                      
        </div><br><br>
        <center><h5>Electrician</h5></center><br>
        <div class="row" align="center" style="margin-left: 120px;">
            
        <?php repeat("Repair and fixes","Electrician"); ?>
        <?php repeat("Electricity breakdown","Electrician"); ?>
        <?php repeat("Electrical wiring","Electrician"); ?>
        <?php repeat("Installation Services","Electrician"); ?>
                    
        </div>
        <br><br><br><br><br><br>
        
		
    </body>

</html>
      
<?php function repeat($service,$link){?>

<div class="col-md-2" style="margin-left: 50px;">
<div class="card bg-light" style="width: 300px">
<div class="card-header"><?php echo"$service"; ?>  </div>
<div class="card-body">
    <a href="<?php echo "$link";?>.php" class="btn btn-primary " role="button" aria-disabled="">Book</a>
</div> </div> </div>  

<?php } ?>