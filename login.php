<?php
    /**
    * Author: Baavika Wijesundera 103520158
    * Target: ASSIGN3
    * Purpose: PHP
    * Created: 15/10/2021
    * Last updated: 23/10/2021
    * Credits: None
    */
  session_start();
  if(isset($_SESSION["UserID"])){
    header ("location: manage.php?view=All&orderby=EOInumber&submit=View");
    exit ();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Creating Web Applications" />
    <meta name="keywords" content="HTML, CSS, JavaScript" />
    <meta name="author" content="Baavika Wijesundera" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="styles/style.css" rel="stylesheet" />
    <script src="scripts/enhancements.js"></script>
    <title>Blue Genisys | Login</title>
    <link rel="icon" href="images/atom.svg" type="image/icon" />
  </head>
  <body>
    <?php
	    include_once ("header.inc");
    ?>
    <section class="login_page" id="login_page">
      <h1>Login</h1>
        <form name="form" id="form" method="post" action="processLOGIN.php" novalidate="novalidate">
        <fieldset>
          <p class="form">
            <input
              type="text"
              name="Username"
              placeholder=" "
              id="Username"
              maxlength="127"
              required="required"
              pattern=".{1,127}"
            />
            <label for="Username" class="label-name"><span class="content-name">Username - Berka</span></label>
          </p>
          <?php
            if(isset($_GET['Username']) && !empty ($_GET["Username"])){
              $Username = $_GET['Username'];
              //echo $Username;
              if ($Username == "empty"){
                echo "<span class='error' id = 'username_error'> The Username CANNOT be Empty</span>";
              }else if ($Username == "invalid"){
                echo "<span class='error' id = 'username_error'> The Username is Invalid</span>";
              }
            }else{
              echo "<span class='error' id = 'username_error'></span>";
            }
          ?>
          <p class="form">
            <input
              type="password"
              name="Password"
              placeholder=" "
              id="Password"
              maxlength="127"
              required="required"
              pattern=".{1,127}"
            />
            <label for="Password" class="label-name"><span class="content-name">Password - BB8</span></label>
          </p>
          <?php
            if(isset($_GET['Password']) && !empty ($_GET["Password"])){
              $Password = $_GET['Password'];
              //echo $Password;
              if ($Password == "empty"){
                echo "<span class='error' id = 'password_error'> The Password CANNOT be Empty</span>";
              }else if ($Password == "invalid"){
                echo "<span class='error' id = 'password_error'> The Password and Username entered Doesn’t match</span>";
              }
            }else{
              echo "<span class='error' id = 'password_error'></span>";
            }
          ?>
        </fieldset>
          <input class="submit_btn" type="submit" name="submit" value="Login" />
        </from>
    </section>
    <?php
      echo "<script> phperror(); </script>";
	    include_once ("footer.inc");
    ?>
  </body>
</html>