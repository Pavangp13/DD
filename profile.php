<!DOCTYPE html>
<html lang="en">
<head> 
<link rel="stylesheet" href="css\profile.css"type="text/css"><?php include('headder.php'); ?> </head>


<?php

session_start();
$c_name = $_SESSION['user'];

?>


<body>
  <div class="row">
    <!-- <a href="index.php" style="padding-left: 300px; padding-top: 120px;"><img alt="Web Studio" class="img" src="image/arrow.png" height=50px border-radius: 50px; /> -->

    </a>
  </div>

  <div class="box">
    <?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "dd");
    $c_name = $_SESSION['user'];
    $query = "select * from customers where username = '$c_name'";
    $query_run = mysqli_query($connection, $query);
    if ($row =  mysqli_fetch_assoc($query_run)) {
    ?>

      <h2 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif"><?php echo $row["username"] ?>'s Profile</h3>

        <div class="row" style="padding-bottom: 20px;">
          <div class="col-md-2" style="padding-left: 30px; width: 50%;float: left;">
            <img alt="Web Studio" class="img" src="image/default.png" height=200px" style="  border-radius: 50px; margin-left:50px; margin-top:20px" />
          </div>
          <div class="table" style="width: 50%; float: left;font-size:large; font-weight:500; color:aliceblue; padding-left:250px">
            <table style="font-family:'Times New Roman', Times, serif;">
              <tr align="center">
                <td align="right" style="padding-top: 18px; ">Name:</td>
                <td><input class="inp" type="text" value="<?php echo $row["username"]; ?>"></td>
              </tr>
              <tr>
                <td align="right" style="padding-top: 18px;">Address:</td>
                <td><input class="inp" type="text" value="<?php echo $row["address"]; ?>"></td>
              </tr>
              <tr>
                <td align="right" style="padding-top: 18px;">Phone:</td>
                <td><input class="inp" type="text" value="<?php echo $row["phone"]; ?>"></td>
              </tr>
              <tr>
                <td align="right" style="padding-top: 18px;">E-mail:</td>
                <td><input class="inp" type="text" value="<?php echo $row["email"]; ?>"></td>
              </tr>
              <tr>
                <td align="right" style="padding-top: 18px;">Gender:</td>
                <td><input class="inp" type="text" value="<?php echo $row["gender"]; ?>"></td>
              </tr>
              <tr>
                <td align="right" style="padding-top: 18px;margin-left: 200px;">Age:</td>
                <td><input class="inp" type="number" align="center" value="<?php echo $row["age"]; ?>"></td>
              </tr>
            </table>
          </div>
        </div>
      <?php } ?>
  </div>
</body>

</html>
