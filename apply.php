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
    <script src="scripts/apply.js"></script>
    <title>Blue Genisys | Apply</title>
    <link rel="icon" href="images/atom.svg" type="image/icon" />
  </head>
  <body>
    <?php
	    include_once ("header.inc");
    ?>
    <section class="apply" id="apply">
      <h1>Application Form</h1>
      <?php
        if(isset($_GET['form']) && !empty ($_GET["form"])){
          $form = $_GET['form'];
          //echo $form;
          echo "<span id = 'form_valid'> Application Successfully Submitted \n Reference No: $form</span>";
        }else{
          echo "<span id = 'form_valid'></span>";
        }
      ?>
      <form name="form" id="form"
        method="post"
        action="processEOI.php" novalidate="novalidate"
      >
        <fieldset>
          <legend>Applicant Details</legend>
          <p class="form">
            <input
              type="text"
              name="job_reference"
              placeholder=" "
              id="jobref"
              maxlength="5"
              required="required"
              pattern="[A-Za-z0-9]{5}"
            />
            <label for="jobref" class="label-name"
              ><span class="content-name">Job Reference</span></label
            >
          </p>
          <?php
            if(isset($_GET['jobref']) && !empty ($_GET["jobref"])){
              $jobref = $_GET['jobref'];
              //echo $jobref;
              if ($jobref == "empty"){
                echo "<span class='error' id = 'jobref_error'> The Job Reference CANNOT be Empty</span>";
              }else if ($jobref == "invalid"){
                echo "<span class='error' id = 'jobref_error'> The Job Reference must only contain alpha characters or digits</span>";
              }
            }else{
              echo "<span class='error' id = 'jobref_error'></span>";
            }
          ?>
          <p class="form">
            <input
              type="text"
              name="given_name"
              id="gname"
              placeholder=" "
              required="required"
              maxlength="20"
              pattern="[A-Za-z]{1,20}"
            />
            <label for="gname" class="label-name"
              ><span class="content-name">First Name</span></label
            >
          </p>
          <?php
            if(isset($_GET['gname']) && !empty ($_GET["gname"])){
              $gname = $_GET['gname'];
              //echo $gname;
              if ($gname == "empty"){
                echo "<span class='error' id = 'gname_error'> The Applicant's First name CANNOT be Empty</span>";
              }else if ($gname == "invalid"){
                echo "<span class='error' id = 'gname_error'> Applicant's First name must only contain alpha characters</span>";
              }
            }else{
              echo "<span class='error' id = 'gname_error'></span>";
            }
          ?>
          <p class="form">
            <input
              type="text"
              name="family_name"
              id="fname"
              placeholder=" "
              required="required"
              maxlength="20"
              pattern="[A-Za-z]{1,20}"
            />
            <label for="fname" class="label-name"
              ><span class="content-name">Family Name</span></label
            >
          </p>
          <?php
            if(isset($_GET['fname']) && !empty ($_GET["fname"])){
              $fname = $_GET['fname'];
              //echo $fname;
              if ($fname == "empty"){
                echo "<span class='error' id = 'fname_error'> The Applicant's Family name CANNOT be Empty</span>";
              }else if ($fname == "invalid"){
                echo "<span class='error' id = 'fname_error'> Applicant's Family name must only contain alpha characters or hyphens</span>";
              }
            }else{
              echo "<span class='error' id = 'fname_error'></span>";
            }
          ?>
          <p class="form">
            <input
              type="text"
              name="dob"
              id="dob"
              required="required"
              pattern="\d{1,2}/\d{1,2}/\d{4}"
              placeholder=" "
            />
            <label for="dob" class="label-name"
              ><span class="content-name">Date of birth</span></label
            >
          </p>
          <?php
            if(isset($_GET['dob']) && !empty ($_GET["dob"])){
              $dob = $_GET['dob'];
              //echo $fname;
              if ($dob == "empty"){
                echo "<span class='error' id = 'dob_error'> The Applicant's Date OF Birth CANNOT be Empty</span>";
              }else if ($dob == "invalid"){
                echo "<span class='error' id = 'dob_error'> Applicant's Date OF Birth must be a number and should be in DD/MM/YYYY format</span>";
              }else if ($dob == "range"){
                echo "<span class='error' id = 'dob_error'> Invalid Date OF Birth, Applicant should be between the age of 15 and 80</span>";
              }
            }else{
              echo "<span class='error' id = 'dob_error'></span>";
            }
          ?>
        </fieldset>
        <fieldset>
          <legend>Gender</legend>
          <p id="gender">
            <label for="male">Male</label>
            <input type="radio" id="male" name="gender" value="male" required="required"/>
            <label for="female">Female</label>
            <input type="radio" id="female" name="gender" value="female" />
            <label for="other">Other</label>
            <input type="radio" id="other" name="gender" value="other" />
          </p>
          <?php
            if(isset($_GET['gender']) && !empty ($_GET["gender"])){
              $gender = $_GET['gender'];
              //echo $gender;
              if ($gender == "empty"){
                echo "<span class='error' id = 'gender_error'> Applicant must select your Gender</span>";
              }
            }else{
              echo "<span class='error' id = 'gender_error'></span>";
            }
          ?>
        </fieldset>
        <fieldset>
          <legend>Applicant Location Details</legend>
          <p class="form">
            <input
              type="text"
              name="address"
              id="address"
              placeholder=" "
              required="required"
              maxlength="40"
              pattern="[A-Za-z1-9]{1,40}"
            />
            <label for="address" class="label-name"
              ><span class="content-name">Street Address</span></label
            >
          </p>
          <?php
            if(isset($_GET['address']) && !empty ($_GET["address"])){
              $address = $_GET['address'];
              //echo $address;
              if ($address == "empty"){
                echo "<span class='error' id = 'address_error'> The Street Address name CANNOT be Empty</span>";
              }else if ($address == "invalid"){
                echo "<span class='error' id = 'address_error'> The Street Address must only contain alpha characters or digits</span>";
              }
            }else{
              echo "<span class='error' id = 'address_error'></span>";
            }
          ?>
          <p class="form">
            <input
              type="text"
              name="town"
              id="town"
              placeholder=" "
              required="required"
              maxlength="40"
              pattern="[A-Za-z1-9]{1,40}"
            />
            <label for="town" class="label-name"
              ><span class="content-name">Suburb/town</span></label
            >
          </p>
          <?php
            if(isset($_GET['town']) && !empty ($_GET["town"])){
              $town = $_GET['town'];
              //echo $town;
              if ($town == "empty"){
                echo "<span class='error' id = 'town_error'> The Suburb/Town name CANNOT be Empty</span>";
              }else if ($town == "invalid"){
                echo "<span class='error' id = 'town_error'> The Suburb/Town must only contain alpha characters or digits</span>";
              }
            }else{
              echo "<span class='error' id = 'town_error'></span>";
            }
          ?>
          <p class="form">
            <select name="state" id="state">
              <option value="placeholder" hidden>Please Select</option>
              <option value="VIC">VIC</option>
              <option value="NSW">NSW</option>
              <option value="QLD">QLD</option>
              <option value="NT">NT</option>
              <option value="WA">WA</option>
              <option value="SA">SA</option>
              <option value="TAS">TAS</option>
              <option value="ACT">ACT</option>
            </select>
            <label for="state" class="label-name"
              ><span class="content-name">State</span></label
            >
          </p>
          <?php
            if(isset($_GET['state']) && !empty ($_GET["state"])){
              $state = $_GET['state'];
              //echo $state;
              if ($state == "empty"){
                echo "<span class='error' id = 'state_error'> Applicant must select a State</span>";
              }
            }else{
              echo "<span class='error' id = 'state_error'></span>";
            }
          ?>
          <p class="form">
            <input
              type="text"
              name="postcode"
              id="postcode"
              placeholder=" "
              required="required"
              maxlength="4"
              pattern="\d{4}"
            />
            <label for="postcode" class="label-name"
              ><span class="content-name">Post Code</span></label
            >
          </p>
          <?php
            if(isset($_GET['postcode']) && !empty ($_GET["postcode"])){
              $postcode = $_GET['postcode'];
              //echo $postcode;
              if ($postcode == "empty"){
                echo "<span class='error' id = 'postcode_error'> The Postcode CANNOT be Empty</span>";
              }else if ($postcode == "invalid"){
                echo "<span class='error' id = 'postcode_error'> The Postcode must only contain digits</span>";
              }else if ($postcode == "match"){
                echo "<span class='error' id = 'postcode_error'> The State entered Postcode entered Doesn’t match</span>";
              }
            }else{
              echo "<span class='error' id = 'postcode_error'></span>";
            }
          ?>
          <p class="form">
            <input
              type="email"
              name="email"
              id="email"
              required="required"
              placeholder=" "
            />
            <label for="email" class="label-name"
              ><span class="content-name">Email Address</span></label
            >
          </p>
          <?php
            if(isset($_GET['email']) && !empty ($_GET["email"])){
              $email = $_GET['email'];
              //echo $email;
              if ($email == "empty"){
                echo "<span class='error' id = 'email_error'> The Email CANNOT be Empty</span>";
              }else if ($email == "invalid"){
                echo "<span class='error' id = 'email_error'> The Email is NOT valid</span>";
              }
            }else{
              echo "<span class='error' id = 'email_error'></span>";
            }
          ?>
          <p class="form">
            <input
              type="text"
              placeholder=" "
              name="phone"
              id="phone"
              required="required"
              maxlength="12"
              pattern="[\d\s]{8,12}"
            />
            <label for="phone" class="label-name"
              ><span class="content-name">Phone Number</span></label
            >
          </p>
          <?php
            if(isset($_GET['phone']) && !empty ($_GET["phone"])){
              $phone = $_GET['phone'];
              //echo $phone;
              if ($phone == "empty"){
                echo "<span class='error' id = 'phone_error'> The Phone Number CANNOT be Empty</span>";
              }else if ($phone == "invalid"){
                echo "<span class='error' id = 'phone_error'> The Phone Number must only contain digits</span>";
              }
            }else{
              echo "<span class='error' id = 'phone_error'></span>";
            }
          ?>
        </fieldset>

        <fieldset>
          <legend>Skill List</legend>
          <div class="skills">
            <p>
              <label for="html">HTML</label>
              <input
                type="checkbox"
                id="html"
                name="skill_type[]"
                value="HTML"
              />
              <label for="css">CSS</label>
              <input type="checkbox" id="css" name="skill_type[]" value="CSS" />
              <label for="javascript">JavaScript</label>
              <input
                type="checkbox"
                id="javascript"
                name="skill_type[]"
                value="JavaScript"
              />
              <label for="php">PHP</label>
              <input type="checkbox" id="php" name="skill_type[]" value="PHP" />
              <label for="c">C</label>
              <input type="checkbox" id="c" name="skill_type[]" value="C" />
            </p>
            <p>
              <label for="mysql">MySQL</label>
              <input
                type="checkbox"
                id="mysql"
                name="skill_type[]"
                value="MySQL"
              />
              <label for="python">Python</label>
              <input
                type="checkbox"
                id="python"
                name="skill_type[]"
                value="Python"
              />
              <label for="cpp">C++</label>
              <input type="checkbox" id="cpp" name="skill_type[]" value="C++" />
              <label for="java">Java</label>
              <input
                type="checkbox"
                id="java"
                name="skill_type[]"
                value="Java"
              />
              <label for="otherskills">Other Skills</label>
              <input
                type="checkbox"
                id="otherskills"
                name="skill_type[]"
                value="otherskills"
              />
            </p>
            <?php
              if(isset($_GET['comments']) && !empty ($_GET["comments"]) && ($_GET['comments'] == "empty" )){
                $comments = $_GET['comments'];
                //echo $comments;
                echo "<span class='error' id = 'skills_error'> Applicant must select at least one Skill</span>";
              }else{
                echo "<span class='error' id = 'skills_error'></span>";
              }
            ?>
            <p class="comments">
              <label for="comments">Other Skills<br /></label>
              <textarea
                id="comments"
                name="comments"
                placeholder="Write the skills you what to mentention that were not on the above list, here..."
              ></textarea>
            </p>
            <?php
              if(isset($_GET['comments']) && !empty ($_GET["comments"])){
                $comments = $_GET['comments'];
                //echo $comments;
                if ($comments == "invalid"){
                  echo "<span class='error' id = 'comments_error'> Other Skills CANNOT be Empty</span>";
                }
              }else{
                echo "<span class='error' id = 'comments_error'></span>";
              }
            ?>
          </div>
        </fieldset>
        <div class= "apply-btns">
          <div>
            <input class="submit_btn" type="submit" name="submit" value="Apply" />
            <input id="reset_btn" type="reset" value="Reset Form" />
          </div>
          <p id="timer"> 0m 0s</p>
        </div>
      </form>
    </section>
    <?php
      echo "<script> phperror(); </script>";
	    include_once ("footer.inc");
    ?>
  </body>
</html>
