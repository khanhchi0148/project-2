<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, intial-scale=1.0"/>
  <meta charset="utf-8" />
  <meta name="author" content="Salahudin Abdi"  />
  <title>Menu</title>
  <link rel="stylesheet" href="styles/styles.css">
</head>

<body>

<?php
session_start();
require_once("settings.php");


$conn = mysqli_connect($host, $user, $pwd, $sql_db);


if (!$conn){
    echo ("<p>Datebase connection failed: ".mysqli_connect_error() . "</p>");
}
else{



//Sanitizing the code
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $jobsrefnum = clean_input($_POST["jobsrefnum"]);
    $firstname = clean_input($_POST["firstname"]);
    $lastname = clean_input($_POST["lastname"]);
    $gender = clean_input($_POST["gender"]);
    $date = clean_input($_POST["date"]);
    $streetaddress = clean_input($_POST["streetaddress"]);
    $suburb = clean_input($_POST["suburb"]);
    $state = clean_input($_POST["state"]);
    $postcode = clean_input($_POST["postcode"]);
    $email = clean_input($_POST["email"]);
    $phone = clean_input($_POST["phone"]);
    $othskills = clean_input($_POST["othskills"]);

    $skills = isset($_POST["skills"]) ? implode(", ", array_map('clean_input', $_POST["skills"])) : "";

    

    // Existence check 
    $errors = [];
    if (empty($jobsrefnum)) $errors[] = "Job refrence number is required";
    if (empty($firstname)) $errors[] = "First name is required.";
    if (empty($lastname)) $errors[] = "Last name is required.";
    if (empty($gender)) $errors[] = "Gender is requried";
    if (empty($streetaddress)) $errors[] = "Street name is requried";
    if (empty($state)) $errors[] = "State is required";
    if (empty($date)) $errors[] = "Date is required.";
    if (empty($suburb)) $errors[] = "Suburb is required.";
    if (empty($postcode)) $errors[] = "Postcode is required.";
    if (empty($phone)) $errors[] = "Phone number is required.";
    if (empty($email)) $errors[] = "Email address is required.";
    //Pattern check 
    if (!preg_match("/^[\w\.-]+@[\w\.-]+\.[a-zA-Z]{2,6}$/", $email)) $errors[] = "Email must be typed in specfic format";

    
    echo implode(", <br>", $errors);

    $sql = "INSERT INTO eoi (JobRefNumber, FirstName, LastName, StreetAddress, Suburb, Postcode, State, Email, Phone, Skills, OtherSkills, Status) VALUES (
    '$jobsrefnum', '$firstname', '$lastname', '$streetaddress', '$suburb', '$postcode', '$state', '$email', '$phone', '$skills', '$othskills','New')";
    if (mysqli_query($conn, $sql)){
        echo "  ";
    };
    //my_sqli_close($conn);
}
}
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

</body>
</html>