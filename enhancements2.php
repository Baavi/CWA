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
        <h2>Responsive Navbar (Hamburger menu)</h2>
        <p>
          Use of <span>@media querys, EventListeners @keyframes</span> to make
          changes to the Nav dynamically according to the device viewport once
          it's below 768px, This enhancement was created with the use of source
          code
          <span>
            and by following a guide from
            <a href="https://www.youtube.com/c/DevEd" target="_blank">
              Dev Ed</a
            ></span
          >
        </p>
        <a class="applybtn" href="index.php">Home Page</a>
      </section>
      <section id="enhancement2">
        <h2>Apply Page Timer</h2>
        <p>
          Use of <span>getTime() and the Math library</span> and with the help
          of <span>few if statements and confirm() Method</span> to make changes
          according to the timer, after 8 minutes change color of timer and
          after 10 minutes pop-up a confirm() box, if response is yes resume
          else redirect to Home page and at 14 minutes redirect to Home Page,
          this enhancement was created by
          <span>
            following a guide by
            <a href="https://www.w3schools.com" target="_blank">
              W3Schools</a
            ></span
          >
        </p>
        <a class="applybtn" href="apply.php#submit_btn">Apply Page</a>
      </section>
      <section id="enhancement3">
        <h2>Dark Mode Light Mode Toggle</h2>
        <p>
          Use of a <span>additional class (dark-mode)</span>, which will be
          added to the body when the toggle is clicked and with the help of
          <span> localstorage</span> the users choice is store even if the page
          is refreshed, this enhancement was created by
          <span>
            following a guide by
            <a
              href="https://css-tricks.com/a-complete-guide-to-dark-mode-on-the-web/"
              target="_blank"
            >
              CSS-TRICKS</a
            ></span
          >
        </p>
        <a class="applybtn" href="index.php">Home Page</a>
      </section>
    </section>
    <?php
	    include_once ("footer.inc");
    ?>
  </body>
</html>
