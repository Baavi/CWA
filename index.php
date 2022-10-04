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
    <title>Blue Genisys | Home</title>
    <link rel="icon" href="images/atom.svg" type="image/icon" />
  </head>
  <body>
    <?php
	    include_once ("header.inc");
    ?>
    <section id="welcome-section" class="welcome-section">
      <!-- All the icons are taken from https://www.flaticon.com/-->
      <div>
        <img src="images/atom.svg " width="100" height="100" alt="Logo" />
        <h1>Blue Genisys</h1>
        <p>
          We can help your company achieve transformational change at scale and
          speed.
        </p>
      </div>
      <div id="title-bg">
        <!-- All the icons are taken from https://undraw.co/illustrations -->
        <img src="images/undraw.svg " width="250" height="250" alt="title-bg" />
      </div>
    </section>
    <section id="contact" class="contact-section">
      <div class="contact-section-header">
        <h2 class="projects-section-header">Opportunity is everywhere</h2>
        <p>
          Unlock new opportunities faster and reveal hidden resources with the
          right solutions in place. Whether modernizing legacy systems or
          launching industry-changing offerings, <br />
          Blue Genisys has the services and expertise to help you achieve your
          goals at a speed and scale.
        </p>
        <br />
        <p>
          Today, thousands of the world’s largest corporations, leading
          universities, and governments rely on our open-source, cloud-native,
          and uniquely extensible products and industry solutions.<br />
          Together, we execute in excess of 18 trillion transactions, expose
          more than 200,000 APIs, and manage over 100 million identities every
          single year.
        </p>
        <br />
        <p>
          We believe that reliability and faster time to market are the key
          success factors. Blue Genisys develop lightweight, highly
          configurable, and stable products <br />which are incidentally also
          easy to learn - have made a major contribution to the project’s
          success. Finally, the team at Blue was quick to respond to any queries
          and support issues.
        </p>
      </div>
      <div class="contact-links" id="contact-links">
        <!-- All the icons are taken from https://www.flaticon.com/-->
        <!-- Icons made by "https://www.freepik.com" Freepik from "https://www.flaticon.com/" Flaticon www.flaticon.com -->
        <a
          href="https://facebook.com"
          target="_blank"
          class="btn contact-details"
          ><img
            src="images/facebook.svg "
            width="50"
            height="50"
            alt="Facebook"
            title="Facebook"
        /></a>
        <a href="https://github.com" target="_blank" class="btn contact-details"
          ><img
            src="images/github-sign.svg "
            width="50"
            height="50"
            alt="GitHub"
            title="Github"
        /></a>
        <a
          href="https://twitter.com"
          target="_blank"
          class="btn contact-details"
          ><img
            src="images/twitter.svg "
            width="50"
            height="50"
            alt="Twitter"
            title="Twitter"
        /></a>
        <a
          href="mailto:103520158@student.swin.edu.au"
          class="btn contact-details"
          ><img
            src="images/email.svg "
            width="50"
            height="50"
            alt="Send a mail"
        /></a>
      </div>
    </section>
    <?php
	    include_once ("footer.inc");
    ?>
  </body>
</html>
