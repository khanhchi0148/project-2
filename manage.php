<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="EOI management form">
  <meta name="keywords" content="eoi manager form">
  <meta name="author" content="KCC">
  <link rel="stylesheet" href="styles/styles.css">
  <title>EOI Manager</title>
</head>
<body>

<?php
    include "header.inc";
    include "nav.inc"
?>

<br>
<br>
<fieldset>
<form method="get">

  <label for="all">List all EOIs</label><br><br>
  <input type="submit" id="all" name="list_all" value="List all"><br><br>
  <label for="refnum">List EOIs by position reference number</label>
  <input type="text" id="refnum" name="list_refnum"><br><br>
  <input type="submit" value="Search"><br><br>

  <p>List EOIs by applicant's name</p>
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="list_fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="list_lname"><br><br>
  <input type="submit" value="Search">

</form>
</fieldset>

<br>
<br>

<fieldset>
<form method="post">

  <p>Delete EOIs with Job Reference Number</p>
  <label>Job Reference Number:</label>
  <input type="text" name="del_refnum"><br><br>
  <input type="submit" value="Delete"><br><br>

  <p>Change EOI Status</p>
  <label for="eoi_num">EOI Number:</label>
  <input type="text" id="eoi_num" name="eoi_num"><br><br>
  <label for="new_status">New Status:</label>
  <input type="text" id="new_status" name="new_status"><br>
  <input type="submit" value="Update">

</form>
</fieldset>

<br>
<br>

<?php
require_once "settings.php";

$dbconn = @mysqli_connect($host, $user, $pwd, $sql_db);
if (!$dbconn) {
    die("<p>Database connection failed: " . htmlspecialchars(mysqli_connect_error()) . "</p>");
}
// Sanitize the input from database table
function clean_input($conn, $data) {
    return mysqli_real_escape_string($conn, trim($data));
}


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['list_all'])) {
        $sql = "SELECT * FROM eoi"; // Make sql command to fetch all existed data from the database table
        $result = mysqli_query($dbconn, $sql);
        echo "<h3>All EOIs list </h3>";
    }
// From this specific option, make seperated queries to fetch data following different filters
    if (!empty($_GET['list_refnum'])) {
        $refnum = clean_input($dbconn, $_GET['list_refnum']);
        $sql = "SELECT * FROM eoi WHERE JobRefNumber LIKE '%$refnum%'";
        $result = mysqli_query($dbconn, $sql);
        echo "<h3>EOIs by Job Reference: " . htmlspecialchars($refnum) . "</h3>";
    }

    if (!empty($_GET['list_fname']) || !empty($_GET['list_lname'])) { // Using Boolean logic so that it is true to fetch data in required table headings
        $conditions = []; // Set an array to store 2 queries
        if (!empty($_GET['list_fname'])) {
            $fname = clean_input($dbconn, $_GET['list_fname']);
            $conditions[] = "FirstName LIKE '%$fname%'";
        }
        if (!empty($_GET['list_lname'])) {
            $lname = clean_input($dbconn, $_GET['list_lname']);
            $conditions[] = "LastName LIKE '%$lname%'";
        }
        $sql = "SELECT * FROM eoi WHERE " . implode(" AND ", $conditions);
        $result = mysqli_query($dbconn, $sql);
        echo "<h3>EOIs by Applicants's name</h3>";
    }
// Display the data fetched from the table in HTML form
    if (isset($result)) {
        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1' cellpadding='5'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Job Reference number</th>";
            echo "<th>First Name</th>";
            echo "<th>Last Name</th>";
            echo "<th>Street Address</th>";
            echo "<th>Suburb</th>";
            echo "<th>State</th>";
            echo "<th>Postcode</th>";
            echo "<th>Email</th>";
            echo "<th>Phone</th>";
            echo "<th>Skills</th>";
            echo "<th>Other Skills</th>";
            echo "<th>Status</th>";
            echo "</tr>";
           while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['EOInumber']) . "</td>";
                echo "<td>" . htmlspecialchars($row['JobRefNumber']) . "</td>";
                echo "<td>" . htmlspecialchars($row['FirstName']) . "</td>";
                echo "<td>" . htmlspecialchars($row['LastName']) . "</td>";
                echo "<td>" . htmlspecialchars($row['StreetAddress']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Suburb']) . "</td>";
                echo "<td>" . htmlspecialchars($row['State']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Postcode']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Email']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Phone']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Skills']) . "</td>";
                echo "<td>" . htmlspecialchars($row['OtherSkills']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Status']) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No records found.</p>";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['del_refnum'])) {
        $refnum = clean_input($dbconn, $_POST['del_refnum']);
        $sql = "DELETE FROM eoi WHERE JobRefNumber = '$refnum'"; // sql statement to delete exist data in certain condition 
        if (mysqli_query($dbconn, $sql)) {
            echo "<p>EOIs with Job Reference Number '" . htmlspecialchars($refnum) . "' have been deleted.</p>";
        } else {
            echo "<p>Can not deleting EOIs.</p>";
        }
    }

    if (!empty($_POST['eoi_num']) && !empty($_POST['new_status'])) {
        $eoi_number = clean_input($dbconn, $_POST['eoi_num']);
        $new_status = clean_input($dbconn, $_POST['new_status']);
        $sql = "UPDATE eoi SET Status = '$new_status' WHERE EOInumber = '$eoi_number'"; // sql statement to change the information inserted in the database table
        if (mysqli_query($dbconn, $sql)) {
            echo "<p>Status for EOI number" . htmlspecialchars($eoi_number) . "updated to" . htmlspecialchars($new_status) . "'.</p>";
        } else {
            echo "<p>Can not updating status.</p>";
        }
    }
}

mysqli_close($dbconn);
?>

</body>
</html>