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
    <title>Blue Genisys | About</title>
    <link rel="icon" href="images/atom.svg" type="image/icon" />
  </head>
  <body>
    <?php
	    include_once ("header.inc");
    ?>
    <section class="about">
      <h1>About</h1>
      <div class="dl">
        <dl>
          <dt>Student Name</dt>
          <dd>Baavika Menath Wijesundera</dd>
          <dt>Student ID</dt>
          <dd>103520158</dd>
          <dt>Tutor's Name</dt>
          <dd>Guangming Cui</dd>
          <dt>Course</dt>
          <dd>Bachelor of Computer Science</dd>
        </dl>
      </div>
      <div class="figure">
        <figure>
          <img
            src="images/Me.jpg"
            alt="Picture of Baavika Wijesundera"
            width="100"
            height="150"
          />
          <figcaption> Baavika </figcaption>
        </figure>
      </div>
      <table>
        <thead>
          <tr>
            <th>Unit</th>
            <th>Study Type</th>
            <th>Date</th>
            <th>Time</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><span>COS10011</span> Creating Web Applications</td>
            <td>Live online</td>
            <td>Monday</td>
            <td>2.00 PM</td>
          </tr>
          <tr>
            <td><span>COS20015</span> Fundamentals of Data Management</td>
            <td>Tutorial</td>
            <td>Tuesday</td>
            <td>2.30 PM</td>
          </tr>
          <tr>
            <td><span>COS20011</span> Creating Web Applications</td>
            <td>Tutorial</td>
            <td>Wednesday</td>
            <td>5.30 PM</td>
          </tr>
        </tbody>
      </table>
      <p>
        Marked up by:<a href="mailto:103520158@student.swin.edu.au">
          Baavika Wijesundera</a
        >
      </p>
    </section>
    <?php
	    include_once ("footer.inc");
    ?>
  </body>
</html>
