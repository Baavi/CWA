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
    <title>Blue Genisys | Careers</title>
    <link rel="icon" href="images/atom.svg" type="image/icon" />
  </head>
  <body>
    <?php
	    include_once ("header.inc");
    ?>
    <section class="jobs" id= "jobs">
      <h1>Careers</h1>
      <aside>
        While we have taken necessary measures to ensure the safety of our
        workforce, as a result of Covid-19 there may be a delay in both the
        interview and hiring process.
      </aside>
      <section id="job1">
        <h2>Customer Support Specialist</h2>
        <br />
        <p id="job1_ref"><span>Job Reference: </span> CS302</p>
        <p>
          <br /><span>Job Summary: </span><br />We are looking for a Customer
          Service Specialist who will interact with the companys customers by
          addressing inquiries and resolving complaints, generally providing a
          higher level of customer support on a specific product or service.
        </p>
        <br />
        <span>Supervisory Responsibilities: </span>
        <ul>
          <li>None</li>
        </ul>
        <br />
        <span>Duties/Responsibilities: </span>
        <ul>
          <li>
            Interacts with customers via telephone, email, online chat, or in
            person to provide support and information on an assigned product or
            service.
          </li>
          <li>
            Ensures that appropriate actions are taken to resolve customers
            problems and concerns.
          </li>
          <li>
            Maintains customer accounts and records of customer interactions
            with details of inquiries, complaints, or comments.
          </li>
          <li>Performs other related duties as assigned.</li>
        </ul>
        <br />
        <span>Required Skills/Abilities: </span>
        <ul>
          <li>Excellent communication skills including active listening.</li>
          <li>Service-oriented and able to resolve customer grievances.</li>
          <li>
            Proficient computer skills with the ability to learn new software.
          </li>
          <li>
            Knowledge of, or ability to learn, product, service, or area of
            customer service specialization.
          </li>
        </ul>
        <a class="applybtn" id= "applybtn1" href="apply.php">Apply</a>
      </section>
      <section id="job2">
        <h2>Data Scientist</h2>
        <br />
        <p id="job2_ref"><span>Job Reference: </span> DS034</p>
        <p>
          <br /><span>Job Summary: </span><br />We are looking for a Data
          Scientist who will support our product, sales, leadership and
          marketing teams with insights gained from analyzing company data. The
          ideal candidate is adept at using large data sets to find
          opportunities for product and process optimization and using models to
          test the effectiveness of different courses of action.<br />
          They must have strong experience using a variety of data mining/data
          analysis methods, using a variety of data tools, building and
          implementing models, using/creating algorithms and creating/running
          simulations. They must have a proven ability to drive business results
          with their data-based insights.
        </p>
        <br />
        <span>Supervisory Responsibilities: </span>
        <ul>
          <li>None</li>
        </ul>
        <br />
        <span>Duties/Responsibilities: </span>
        <ul>
          <li>
            Work with stakeholders throughout the organization to identify
            opportunities for leveraging company data to drive business
            solutions.
          </li>
          <li>
            Mine and analyze data from company databases to drive optimization
            and improvement of product development, marketing techniques and
            business strategies.
          </li>
          <li>
            Assess the effectiveness and accuracy of new data sources and data
            gathering techniques.
          </li>
          <li>
            Develop custom data models and algorithms to apply to data sets.
          </li>
          <li>
            Use predictive modeling to increase and optimize customer
            experiences, revenue generation, ad targeting and other business
            outcomes.
          </li>
        </ul>
        <br />
        <span>Required Skills/Abilities: </span>
        <ul>
          <li>
            Strong problem solving skills with an emphasis on product
            development.
          </li>
          <li>
            Experience using statistical computer languages to manipulate data
            and draw insights from large data sets.
            <ol>
              <li>Python</li>
              <li>SQL</li>
              <li>R</li>
            </ol>
          </li>
          <li>Experience working with and creating data architectures.</li>
          <li>
            Knowledge of a variety of machine learning techniques (clustering,
            decision tree learning, artificial neural networks, etc.) and their
            real-world advantages/drawbacks.
          </li>
          <li>
            Knowledge of advanced statistical techniques and concepts
            (regression, properties of distributions etc.) and experience with
            applications.
          </li>
        </ul>
        <a class="applybtn" id= "applybtn2" href="apply.php">Apply</a>
      </section>
    </section>
    <?php
	    include_once ("footer.inc");
    ?>
  </body>
</html>
