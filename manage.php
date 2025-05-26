<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="description" content="eoi management form">
<meta name="keywords" content="eoi manager form">
<meta name="author" content="KCC">
=======
  <link rel="stylesheet" href="styles/styles.css">

  <title>EOI Manager</title>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<form method="get">
    <label for="all">List all EOIs</label><br>
        <input type="submit" id="all" name="list_all" value="List all"><br><br>

    <label for="refnum">List EOIs by position reference number</label>
        <input type="text" id="refnum" name="list_refnum"><br>
        <input type="submit" value="Search"><br>

    <p>List EOIs by applicant's name</p>
    <label for="fname">First name:</label>
        <input type="text" id="fname" name="list_fname"><br>
    <label for="lname">Last name:</label>
        <input type="text" id="lname" name="list_lname"><br>
        <input type="submit" value="Search">
</form>

<form method = "post">
    <p>Delete EOIs with Job Reference Number</p>
    <label>Job Reference Number</label>
        <input type="text" name="del_refnum"><br>
        <input type="submit" value="Delete">

    <p>Change EOI Status</p>
    <label for="eoi_num">EOI Number:</label>
        <input type="text" id="eoi_num" name="eoi_num"><br>
    <label for="new_status">New Status:</label>
        <input type="text" id="new_status" name="new_status"><br>
        <input type="submit" value="Update">
</form>

</body>
</html>
<?php
require_once "settings.php";
$dbconn = @mysqli_connect($host, $user, $pwd, $sql_db);
if (!$dbconn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['list_all'])) {
        $sql = "SELECT * FROM eoi";
        $result = mysqli_query($dbconn, $sql);
        echo "<h3>EOIs list</h3>";
    }

    if (!empty($_GET['list_refnum'])) {
        $refnum = mysqli_real_escape_string($dbconn, $_GET['list_refnum']);
        $sql = "SELECT * FROM eoi WHERE JobRefNumber LIKE '%$refnum%'";
        $result = mysqli_query($dbconn, $sql);
        echo "<h3>EOIs for Job Reference: $refnum</h3>";
    }

    if (!empty($_GET['list_fname']) || !empty($_GET['list_lname'])) {
        $conditions = [];
        if (!empty($_GET['list_fname'])) {
            $fname = mysqli_real_escape_string($dbconn, $_GET['list_fname']);
            $conditions[] = "FirstName LIKE '%$fname%'";
        }
        if (!empty($_GET['list_lname'])) {
            $lname = mysqli_real_escape_string($dbconn, $_GET['list_lname']);
            $conditions[] = "LastName LIKE '%$lname%'";
        }
        $sql = "SELECT * FROM eoi WHERE " . implode(" AND ", $conditions);
        $result = mysqli_query($dbconn, $sql);
        echo "<h2>EOIs for Applicant Name</h2>";
    }
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
                echo "<td>" . ($row['EOInumber']) . "</td>";
                echo "<td>" . ($row['JobRefNumber']) . "</td>";
                echo "<td>" . ($row['FirstName']) . "</td>";
                echo "<td>" . ($row['LastName']) . "</td>";
                echo "<td>" . ($row['StreetAddress']) . "</td>";
                echo "<td>" . ($row['Suburb']) . "</td>";
                echo "<td>" . ($row['State']) . "</td>";
                echo "<td>" . ($row['Postcode']) . "</td>";
                echo "<td>" . ($row['Email']) . "</td>";
                echo "<td>" . ($row['Phone']) . "</td>";
                echo "<td>" . ($row['Skills']) . "</td>";
                echo "<td>" . ($row['OtherSkills']) . "</td>";
                echo "<td>" . ($row['Status']) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No records found.</p>";
        }
    }      
} else {echo "<p>There is no EOI data information</p>";}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (!empty($_POST['del_refnum'])) {
    $refnum = mysqli_real_escape_string($dbconn, $_POST['del_refnum']);
    $sql = "DELETE FROM eoi WHERE JobRefNumber = '$refnum'";
    if (mysqli_query($dbconn, $sql)) {
        echo "<p>EOIs with Job Reference Number '$refnum' have been deleted.</p>";
    } 
    
} 

    if (!empty($_POST['eoi_num']) && !empty($_POST['new_status'])) {
        $eoi_number = mysqli_real_escape_string($dbconn, $_POST['eoi_num']);
        $new_status = mysqli_real_escape_string($dbconn, $_POST['new_status']);
        $sql = "UPDATE eoi SET Status = '$new_status' WHERE EOInumber = '$eoi_number'";
    if (mysqli_query($dbconn, $sql)) {
        echo "<p>Status for EOI number $eoi_number has been updated to '$new_status'.</p>";
    } 
}
    

}

mysqli_close($dbconn);
?>
</html>