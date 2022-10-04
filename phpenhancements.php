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
    <title>Blue Genisys | Enhancements</title>
    <link rel="icon" href="images/atom.svg" type="image/icon" />
  </head>
  <body>
    <?php
	    include_once ("header.inc");
    ?>
    <section class="enhancements">
      <h1>Enhancements</h1>
      <section id="enhancement1">
        <h2>Login Page and Logout Functions</h2>
        <p>
          Use of <span>Sessions, MD5 encryption and a users DB</span> to make
          the login system secure with server-side validation and limit the login attempts to 3 before redirecting,
           if user is loged in then the user can browse the website as Admin until logged out,
           password_hash() cannot be used becouse the current Mercury server doesn't support it, this enhancement was created by
          <span>
             by following a guide by
            <a href="https://www.youtube.com/channel/UCzyuZJ8zZ-Lhfnz41DG5qLw" target="_blank">
            Dani Krossing</a
            ></span
          >
        </p>
        <a class="applybtn" href="login.php">Login Page</a>
      </section>
      <section id="enhancement2">
        <h2>EOI records Sort Function</h2>
        <p>
          Use of <span>ORDER BY Syntax</span> to make changes
          to the order the EOI records are displayed in the manage.php page according to users choice from the drop down list to minimise user error,
          this enhancement was created by
          <span>
            following a guide by
            <a href="https://www.w3schools.com" target="_blank">
              W3Schools</a
            ></span
          >
        </p>
        <a class="applybtn" href="manage.php">Manage Page</a>
      </section>
    </section>
    <?php
	    include_once ("footer.inc");
    ?>
  </body>
</html>