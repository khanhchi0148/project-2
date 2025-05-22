<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta charset="utf-8">
    <meta name="description" content="jobs information">
    <meta name="keywords" content="jobs, information">
    <meta name="author" content="KCC">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Jobs Application</title>

    <link rel="stylesheet" href="styles.css"> <!--Links the external CSS file-->
</head>
<body>
<?php
require_once "settings.php";

include "header.inc";
include "nav.inc";
include "asidepg2.inc";

$dbconn = @mysqli_connect($host, $user, $pwd, $sql_db);
if ($dbconn){
$sql = "SELECT * FROM jobs";
$result = mysqli_query($dbconn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<main>";
    echo "<article>";
    echo "<img id='image2' src='images/cs4.png' alt='Ctrl+alt+DeFEND'>";
    echo "<h2 id='jp'>Jobs position</h2>";
    echo "<div class='grid-container2'>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div>";
        echo "<section class='section'>";

        echo "<h2 class='title'>" . $row['name'] . "</h2>";

        echo "<p>Reference number:" . $row['ref_num'] . "</p>";

        echo "<h3>Description</h3>";
        echo "<p>" . $row['des'] . "</p>";

        echo "<p>Salary range:" . $row['salary'] . "</p>";
        echo "<ol>";

        echo "<li>";
        echo "<p>Job titles:</p>";
        echo "<ul>";
        echo "<li>" . $row['titles'] . "</li>";
        echo "</ul>";
        echo "</li>";

        echo "<li>";
        echo "<p>Responsibilities:</p>";
        echo "<ul>";
        echo "<li>" . $row['res'] . "</li>";
        echo "</ul>";
        echo "</li>";

       
        echo "<li>";
        echo "<p>Responsibilities:</p>";
        echo "<ul>";
        echo "<li>" . $row['res'] . "</li>";
        echo "</ul>";
        echo "</li>";
        
        echo "</ol>";

        echo "<ol>";

        echo "<h3>Enquiries</h3>";

        echo "<li>";
        echo "<p>Skills:</p>";
        echo "<ul>";
        echo "<li>" . $row['skills'] . "</li>";
        echo "</ul>";
        echo "</li>";
        
        echo "<p>Qualitifications:</p>";
        echo "<li>";
        
        echo "<p>" . $row['quali'] . "</p>";
        echo "</li>";

        echo "</ol>";
        
        echo "</section>";

        echo "</div>";
}

echo "</div>";   
echo "</article>";

echo "<br>";
include "general.inc";

echo "</main>";


} 
 else {
    echo "<p>There are no job positions to display.</p>";}



mysqli_close($dbconn);
}

else {echo "<p>Unable to connect to the db.</p>";}

echo "<br>";
include "footer.inc";
?>
</body>
</html>
