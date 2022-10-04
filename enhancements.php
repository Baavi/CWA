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
        <h2>Responsive Web Page</h2>
        <p>
          Use of <span>@media querys</span> to make changes dynamically
          according to the device viewport, This enhancement was created with the
          use of source code from
          <span
            ><a href="https://getbootstrap.com/" target="_blank"> Bootstrap</a>
            and following a guide by
            <a href="https://www.freecodecamp.org/learn" target="_blank">
              FreeCodeCamp</a
            ></span
          >
        </p>
        <a class="applybtn" href="jobs.php">Careers Page</a>
      </section>
      <section id="enhancement2">
        <h2>Flooting Social Media Buttons</h2>
        <p>
          Use of <span>transform and transition Property</span> with the help of
          <span>:hoover psudo class</span> to make a smooth animation when the
          user hoovers over the contact details buttons, this enhancement was
          created by
          <span>
            following a guide by
            <a href="https://www.w3schools.com" target="_blank">
              W3Schools</a
            ></span
          >
        </p>
        <a class="applybtn" href="index.php#contact-links">Media Buttons</a>
      </section>
      <section id="enhancement3">
        <h2>Drop down Nav Menu</h2>
        <p>
          Use of <span>:hoover psudo class</span> and with the help of
          <span>position: absolute</span> to make the Sub Menu appear when
          user hoovers over the button, this enhancement was created by
          <span>
            following a guide by
            <a href="https://www.youtube.com/c/DevEd" target="_blank">
              Dev Ed</a
            >
          </span>
        </p>
        <a class="applybtn" href="index.php">Home Page</a>
      </section>
      <section id="enhancement4">
        <h2>Custom Bachground with linear-gradient</h2>
        <p>
          Use of <span>linear-gradients</span> with the help of
          <span>background-size: cover</span> to make the background scale
          according to viewport, this enhancement was created by
          <span>
            following a guide by
            <a href="https://www.freecodecamp.org/learn" target="_blank">
              FreeCodeCamp</a
            ></span
          >
        </p>
        <a class="applybtn" href="apply.php">Appy Page</a>
      </section>
    </section>
    <?php
	    include_once ("footer.inc");
    ?>
  </body>
</html>
