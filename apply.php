<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="description" content="apply page">
  <meta name="keywords" content="jobs, application">
  <meta name="author" content="Salahudin Abdi">
  <link rel="stylesheet" href="styles/styles.css">
  <title>Application page</title>
</head>

<body>
  <h1>Job application form</h1>
  <?php
    include "nav.inc"
?>
      
 <!--Sends data to mercury server-->
  <form action="process_eoi.php" method="post">
    <div class="grid-container">
      <fieldset>
        <legend>Personal Details</legend>

        <p><label for="jobsrefnum">Job Reference Number</label></p>
        <select name="jobsrefnum" id="jobsrefnum" required="required">
          <option value="">Please Select</option>
          <option value="CA096">CA096</option>
          <option value="CA122">CA122</option>
          <option value="CA451">CA451</option>
          <option value="CA903">CA903</option>
        </select>
        <!-- pattern forces only to use charters from the alphabet and the limit of characters is at 20 -->
        <p>
          <label for="firstname">First Name</label>
          <input type="text" name="firstname" id="firstname" size="10" maxlength="20" pattern="[A-Za-z]+" required="required" placeholder="John">
        </p>
        <p>
          <label for="lastname">Last Name</label>
          <input type="text" name="lastname" id="lastname" size="10" maxlength="20" pattern="[A-Za-z]+" required="required" placeholder="Smith">
        </p>

        <p><label for="Male">Male</label>
          <input type="radio" id="Male" name="gender" value="Male" required="required">
        </p>
        <p><label for="Female">Female</label>
          <input type="radio" id="Female" name="gender" value="Female">
        </p>
        <p><label for="X">X</label>
          <input type="radio" id="X" name="gender" value="X">
        </p>

        <p>
          <label for="date">Date of Birth:</label>
          <input type="text" id="date" name="date" placeholder="dd/mm/yyyy" pattern="[0-9]{2,2}/[0-9]{2,2}/[0-9]{4,4}" required>
        </p>
      </fieldset>

      <fieldset>
        <legend>Location</legend>

        <p>
          <label for="streetaddress">Street Address</label>
          <input type="text" name="streetaddress" id="streetaddress" size="10" maxlength="40" pattern="[a-zA-Z0-9/ ]+" required="required">
        </p>
        <p>
          <label for="suburb">Suburb/Town</label>
          <input type="text" name="suburb" id="suburb" size="10" maxlength="40" pattern="[A-Za-z ]+" required="required">
        </p>
        <p><label for="state">State</label></p>
        <select name="state" id="state" required="required">
          <option value="">Please Select</option>
          <option value="VIC">VIC</option>
          <option value="NSW">NSW</option>
          <option value="QLD">QLD</option>
          <option value="NT">NT</option>
          <option value="WA">WA</option>
          <option value="SA">SA</option>
          <option value="TAS">TAS</option>
          <option value="ACT">ACT</option>
        </select>
        <br>
        <p>
  <label for="postcode">Postcode</label><br>
  <input type="text" name="postcode" id="postcode" size="10" pattern="0[2-9][0-9]{2}|[1-8][0-9]{3}|9[0-8][0-9]{2}|99[0-3][0-9]|994[0-4]"  placeholder="e.g. 3000">
</p>
<p>
  <strong>Postcode Ranges by State:</strong><br>
  VIC: 3000–3999<br>
  NSW: 1000–2619<br>
  QLD: 4000–4999<br>
  NT: 0800–0999<br>
  WA: 6000–6999<br>
  SA: 5000–5999<br>
  TAS: 7000–7999<br>
  ACT: 0200–0299
</p>
      </fieldset>

      <fieldset>
        <legend>Contact Details</legend>

        <p>
          <!-- Pattern makes it so that you have to type email like this example12@gmail.com -->
          <label for="email">Email</label>
          <input type="email" name="email" id="email" size="10" maxlength="40" pattern="[A-Za-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required="required">
        </p>
        <p>
          <label for="phone">Phone Number</label>
          <input type="tel" name="phone" id="phone" size="10" minlength="8" maxlength="12" pattern="[0-9]+" required="required">
        </p>
      </fieldset>

      <fieldset>
      
        <legend>Skills</legend>
        <input type="checkbox" id="python" name="skills[]" value="python" required="required" checked>
        <label for="python">Python</label>
        <input type="checkbox" id="javascript" name="skills[]" value="javascript">
        <label for="javascript">Javascript</label>
        <input type="checkbox" id="java" name="skills[]" value="java">
        <label for="java">Java</label>
        <input type="checkbox" id="sql" name="skills[]" value="sql">
        <label for="sql">SQL</label>
        <input type="checkbox" id="html" name="skills[]" value="html">
        <label for="html">HTML</label>
        <input type="checkbox" id="C" name="skills[]" value="C">
        <label for="C">C</label>
        <input type="checkbox" id="Cplusplus" name="skills[]" value="C++">
        <label for="Cplusplus">C++</label>
        <!--Gives users 4 rows and 40 collomns to type out there other skills  -->
        <p>
          <label for="skills">Other Skills</label><br>
          <textarea name="othskills" id="othskills" rows="4" cols="40" placeholder="Write your other skills that may contribute to your success in this job"></textarea>
        </p>
      </fieldset>
      <input type="submit" value="Submit">
      <input type="reset" value="Reset">
    </div>
  </form>
</body>
</html>