<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, intial-scale=1.0"/>
  <meta charset="utf-8" />
  <meta name="author" content="Salahudin Abdi, Arsum Ahmed"  />
  <title>Menu</title>
  <link rel="stylesheet" href="styles/styles.css">
</head>

<body>

<?php
// Prevent direct access
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php"); // Replace with your actual form page
    exit();
}

session_start();
require_once("settings.php");

function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

$conn = mysqli_connect($host, $user, $pwd, $sql_db);
if (!$conn) {
    die("<p>Database connection failed: " . mysqli_connect_error() . "</p>");
}

// Create EOI table if not exists
$createTableSQL = "
CREATE TABLE IF NOT EXISTS eoi (
    EOInumber INT AUTO_INCREMENT PRIMARY KEY,
    JobRefNumber VARCHAR(5),
    FirstName VARCHAR(20),
    LastName VARCHAR(20),
    StreetAddress VARCHAR(40),
    Suburb VARCHAR(40),
    Postcode VARCHAR(4),
    State VARCHAR(3),
    Email VARCHAR(50),
    Phone VARCHAR(12),
    Skills TEXT,
    OtherSkills TEXT,
    Status VARCHAR(20)
)";
mysqli_query($conn, $createTableSQL);

// Sanitize and collect input
$jobsrefnum = clean_input($_POST["jobsrefnum"] ?? "");
$firstname = clean_input($_POST["firstname"] ?? "");
$lastname = clean_input($_POST["lastname"] ?? "");
$gender = clean_input($_POST["gender"] ?? "");
$date = clean_input($_POST["date"] ?? "");
$streetaddress = clean_input($_POST["streetaddress"] ?? "");
$suburb = clean_input($_POST["suburb"] ?? "");
$state = clean_input($_POST["state"] ?? "");
$postcode = clean_input($_POST["postcode"] ?? "");
$email = clean_input($_POST["email"] ?? "");
$phone = clean_input($_POST["phone"] ?? "");
$othskills = clean_input($_POST["othskills"] ?? "");
$skills = isset($_POST["skills"]) ? implode(", ", array_map('clean_input', $_POST["skills"])) : "";

$errors = [];

// Required field checks
if (empty($jobsrefnum)) $errors[] = "Job reference number is required.";
if (!preg_match("/^[a-zA-Z]{1,20}$/", $firstname)) $errors[] = "First name must contain only letters (max 20).";
if (!preg_match("/^[a-zA-Z]{1,20}$/", $lastname)) $errors[] = "Last name must contain only letters (max 20).";
if (!preg_match("/^\d{2}\/\d{2}\/\d{4}$/", $date)) $errors[] = "Date of birth must be in dd/mm/yyyy format.";
if (empty($gender)) $errors[] = "Gender is required.";
if (strlen($streetaddress) > 40) $errors[] = "Street address must be no more than 40 characters.";
if (strlen($suburb) > 40) $errors[] = "Suburb must be no more than 40 characters.";
if (!in_array($state, ["VIC", "NSW", "QLD", "NT", "WA", "SA", "TAS", "ACT"])) $errors[] = "Invalid state.";
if (!preg_match("/^\d{4}$/", $postcode)) $errors[] = "Postcode must be exactly 4 digits.";
if (!preg_match("/^[\w\.-]+@[\w\.-]+\.[a-zA-Z]{2,6}$/", $email)) $errors[] = "Invalid email format.";
if (!preg_match("/^[\d ]{8,12}$/", $phone)) $errors[] = "Phone must be 8 to 12 digits or spaces.";
if (empty($skills)) $errors[] = "At least one skill must be selected.";

// Display errors
if (!empty($errors)) {
    echo "<h2>Submission Error</h2><ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
    exit();
}

// Insert into database
$sql = "INSERT INTO eoi 
    (JobRefNumber, FirstName, LastName, StreetAddress, Suburb, Postcode, State, Email, Phone, Skills, OtherSkills, Status)
    VALUES 
    ('$jobsrefnum', '$firstname', '$lastname', '$streetaddress', '$suburb', '$postcode', '$state', '$email', '$phone', '$skills', '$othskills', 'New')";

if (mysqli_query($conn, $sql)) {
    $eoiNumber = mysqli_insert_id($conn);
    echo "<h2>Application Submitted Successfully!</h2>";
    echo "<p>Your EOI number is: <strong>$eoiNumber</strong></p>";
} else {
    echo "<p>Error submitting application: " . mysqli_error($conn) . "</p>";
}

$sql = "SELECT * FROM eoi";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>All EOIs</h2>";
    echo "<table border='1'>";
    echo "<tr>
        <th>EOI Number</th>
        <th>Job Ref</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Suburb</th>
        <th>Postcode</th>
        <th>State</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Skills</th>
        <th>Other Skills</th>
        <th>Status</th>
    </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['EOInumber']}</td>
            <td>{$row['JobRefNumber']}</td>
            <td>{$row['FirstName']}</td>
            <td>{$row['LastName']}</td>
            <td>{$row['StreetAddress']}</td>
            <td>{$row['Suburb']}</td>
            <td>{$row['Postcode']}</td>
            <td>{$row['State']}</td>
            <td>{$row['Email']}</td>
            <td>{$row['Phone']}</td>
            <td>{$row['Skills']}</td>
            <td>{$row['OtherSkills']}</td>
            <td>{$row['Status']}</td>
        </tr>";
    }

    echo "</table>";
} else {
    echo "<p>No EOIs found.</p>";
}

mysqli_close($conn);
?>

</body>
</html>