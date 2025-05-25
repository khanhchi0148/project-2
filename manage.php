<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles/styles.css">
  <title>EOI Manager</title>
</head>
<body>
  <form method="get">
    <label for="all">List all EOIs</label><br>
    <input type="submit" id="all" name="list_all" value="List all"><br><br>

    <label for="refnum">List EOIs by position reference number</label><br>
    <input type="text" id="refnum" name="list_refnum"><br>
    <input type="submit" value="Search"><br>

    <p>List EOIs by applicant's name</p>
    <label for="fname">First name:</label>
    <input type="text" id="fname" name="list_fname"><br>
    <label for="lname">Last name:</label>
    <input type="text" id="lname" name="list_lname"><br>
    <input type="submit" value="Search">
  </form>
</body>

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
        echo "<h2>All EOIs</h2>";
    }

    if (!empty($_GET['list_refnum'])) {
        $refnum = mysqli_real_escape_string($dbconn, $_GET['list_refnum']);
        $sql = "SELECT * FROM eoi WHERE JobRefNumber LIKE '%$refnum%'";
        $result = mysqli_query($dbconn, $sql);
        echo "<h2>EOIs for Job Reference: $refnum</h2>";
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
            echo "<tr><th>ID</th><th>Job Reference</th><th>First Name</th><th>Last Name</th><th>Status</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . ($row['EOInumber']) . "</td>";
                echo "<td>" . ($row['JobRefNumber']) . "</td>";
                echo "<td>" . ($row['FirstName']) . "</td>";
                echo "<td>" . ($row['LastName']) . "</td>";
                echo "<td>" . ($row['Status']) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No results found.</p>";
        }
    }
}

mysqli_close($dbconn);
?>
</html>