<!DOCTYPE html>
<html lang="en">
  <head>

    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8" />

  </head>
  <body>
      <h1>Faculty Submission Form</h1>
      <form action="test.php">
          <label for="fname">First name:</label><br>
          <input type="text" id="fname" name="fname"><br>
          <label for="lname">Last name:</label><br>
          <input type="text" id="lname" name="lname"><br>
          <label for="phone">Hours Served:</label><br>
          <input type="text" id="hours" name="hours"><br>
          <label for="email">Organiztion:</label><br>
          <input type="text" id="organization" name="org"><br>
          <label for="class">School:</label><br>
          <select name="cars" id="cars">
              <option value="natsci">Natural Sciences</option>
              <option value="socsci">Social Sciences</option>
              <option value="ed">Education</option>
              <option value="christstud">Christian Studies</option>
              <option value="human">Humanities</option>
              <option value="fina">Fine Arts</option>
              <option value="bus">Business</option>
          </select><br>
          <label for="date">Semester and Year you're registering for:</label><br>
          <input type="text" id="date" name="date">
          <input type="submit" value="Submit">
        </form>
      <?php
$txt = "PHP";
echo "I love $txt!";
?>

  </body>
</html>