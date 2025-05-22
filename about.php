<!DOCTYPE html> <!-- Declares this as an HTML5 document to ensure compatibility with modern browsers -->
<html lang="en"> <!-- Sets the language of the document to English for accessibility and SEO purposes -->
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta name="description" content="About us page">
  <meta name="keywords" content="about us, members, contribution">
  <meta name="author" content="Arsum"> <!-- Sets character encoding to UTF-8 to support a wide range of characters -->
  <title>About Page</title> <!-- Title of the page, displayed in the browser tab -->
  <link rel="stylesheet" href="styles/styles.css"> <!-- Links an external stylesheet to style the page -->
</head>
<body id="about">
  
    <h1 id="h1">Ctrl+Alt+Defend</h1> <!-- Main heading of the webpage, representing the group name -->
    <?php
    include "nav.inc"
?>

  <section> <!-- Section to display general group information -->
    <p class="p">Group Name: Ctrl+Alt+Defend</p> <!-- Displays the name of the group -->
    <p class="p">Class Time and Day: Monday, 12:30 PM to 2:30 PM</p> <!-- Displays class time and day -->
    <div class="student-ids"> <!-- Div container for listing student IDs -->
      <h4 id="h4">Student IDs</h4> <!-- Subheading for the student IDs list -->
      <ol> <!-- Ordered list to display the student names and IDs -->
        <li>Salahudin - 105926774</li> <!-- Student 1 name and ID -->
        <li>Arsum - 104986382</li> <!-- Student 2 name and ID -->
        <li>Khanh Chi - 105104871</li> <!-- Student 3 name and ID -->
      </ol>
    </div>
    <p class="p">Tutor: Nick</p> <!-- Displays the tutor's name -->
  </section>

  <div class="contribution-photo-container"> <!-- Container to hold group contributions and photo -->
    <!-- Left side: Group Contributions -->
    <div class="group-contributions">
      <h2 class="h2">Group Contributions</h2> <!-- Heading for group contributions section -->
      <h3 class="h3">Salahudin</h3> <!-- Heading for Salahudin's contributions -->
      <ul> <!-- Unordered list for Salahudin's contributions -->
        <li>Designed the Homepage and contributed to the Application Page.</li>
        <li>Also created and designed the group logo with a focus on modern aesthetics and clear identity.</li>
        <li>Ensured responsive layout and visual consistency across devices.</li>
        <li>Collaborated closely with team members to align the homepage design with the overall theme and functionality of the site.</li>
        <li>Incorporated user-friendly navigation and interactive elements to enhance user experience.</li>
      </ul>
      <h3 class="h3">Khanh Chi</h3> <!-- Heading for Khanh Chi's contributions -->
      <ul> <!-- Unordered list for Khanh Chi's contributions -->
        <li>Designed the Job Page and contributed in the Application Page.</li>
        <li>Focused on creating a clean and intuitive layout to ensure users could easily browse and understand job listings.</li>
        <li>Implemented styling elements that matched the overall theme and color scheme of the website.</li>
        <li>Worked on enhancing accessibility and usability, making the page responsive across various screen sizes.</li>
        <li>Collaborated with the team to ensure seamless integration between the Job Page and the rest of the site.</li>
      </ul>
      <h3 class="h3">Arsum</h3> <!-- Heading for Arsum's contributions -->
      <ul> <!-- Unordered list for Arsum's contributions -->
        <li>Designed the About Page with a focus on clarity, structure, and team representation.</li>
        <li>Organized content to reflect the group’s background, demographics, and shared skills in a visually engaging format.</li>
        <li>Assisted in brainstorming and refining ideas for the group logo, contributing to its final design and meaning.</li>
        <li>Ensured consistency in tone and style throughout the About section to align with the overall site design.</li>
        <li>Worked collaboratively to maintain design coherence across all pages.</li>
      </ul>
    </div>
  
    <!-- Right side: Group photo -->
    <div class="group-photo">
      <h2 class="h2">Our Group Photo!</h2> <!-- Heading for the group photo -->
      <figure> <!-- Figure element to wrap the photo -->
        <img src="images/20250406_132100.jpg" alt="Group Photo" width="300"> <!-- Group photo with alt text and width -->
        <figcaption>Ctrl + Alt + Defend</figcaption> <!-- Caption describing the group photo -->
      </figure>
    </div>
  </div>

  <section> <!-- Section for displaying a table of member's interests -->
    <h2 class="h2">Member's Interests</h2> <!-- Heading for the interests section -->
    <table> <!-- Table to display the group members' interests -->
      <caption>Group Member's Interests</caption> <!-- Caption for the table -->
      <tr> <!-- Table row for headings -->
        <th>Name</th> <!-- Column for names -->
        <th>Hobby</th> <!-- Column for hobbies -->
        <th colspan="2">Favorite Genre</th> <!-- Two columns merged for favorite genres -->
      </tr>
      <tr> <!-- Table row for Salahudin's interests -->
        <td>Salahudin</td> <!-- Name of the member -->
        <td>Video Games and Reading Manga</td> <!-- Hobby -->
        <td>Hip-hop</td> <!-- First favorite genre -->
        <td>Mystery</td> <!-- Second favorite genre -->
      </tr>
      <tr> <!-- Table row for Arsum's interests -->
        <td>Arsum</td> <!-- Name of the member -->
        <td>Watching Anime</td> <!-- Hobby -->
        <td>Hip-hop</td> <!-- First favorite genre -->
        <td>Murder Mystery</td> <!-- Second favorite genre -->
      </tr>
      <tr> <!-- Table row for Khanh Chi's interests -->
        <td>Khanh Chi</td> <!-- Name of the member -->
        <td>Sleeping</td> <!-- Hobby -->
        <td>Pop</td> <!-- First favorite genre -->
        <td>Horror</td> <!-- Second favorite genre -->
      </tr>
    </table>
  </section>

  <section> <!-- Section for demographic and group skills information -->
    <h2 class="h2">Demographic Information</h2> <!-- Heading for demographic info -->
    
    <h3 class="h3">Salahudin</h3><!-- Subheading for Salahudin's demographic information -->
    <ul><!--Unordered list-->
      <li>I was born in Australia</p> <!-- Personal info: birth country -->
      <li>Both of my parents immigrated to here from Somalia</p> <!-- Personal info: parents' origin -->
      <li>I grew up in Ascot Vale/North Melbourne up to the age of 8 but moved to the South Morang after that</p> <!-- Personal info: childhood location -->
      <li>Fav animanga - HxH.</p> <!-- Favorite anime/manga -->
    </ul>
    <h3 class="h3">Arsum</h3> <!-- Subheading for Arsum's demographic information -->
    <ul><!--Unordered list-->
      <li>I was born in Pakistan</p> <!-- Personal info: birth country -->
      <li>I came here to Australia as an international student in November 2024.</p> <!-- Personal info: immigration -->
      <li>I'm currently living in St Albans.</p> <!-- Personal info: current location -->
      <li>Favorite manga/anime = One Piece</p> <!-- Favorite anime/manga -->
      <li>Music: hip-hop</p> <!-- Music preference -->
    </ul>
    <h3 class="h3">Khanh Chi</h3> <!-- Subheading for Khanh Chi's demographic information -->
    <ul><!--Unordered list-->
      <li>I was born in Vietnam</p> <!-- Personal info: birth country -->
      <li>I came here to Australia as an International Student in December.</p> <!-- Personal info: immigration -->
      <li>I'm currently living in a rented apartment in Riversdale Road.</p> <!-- Personal info: current location -->
    </ul>  
    <h2 class="h2">Group Skills & Experience</h2> <!-- Heading for group skills & experience -->
    <p class="p">As a group, Ctrl+Alt+Defend brings together a diverse set of skills and experiences across design, development, and problem-solving</p> <!-- Group description and summary of skills -->
  </section>

  <div class="logo-photo"> <!-- Div container for the group logo photo -->
    <figure> <!-- Figure element to wrap the logo -->
      <img src="images/Ctrl+alt+DeFEND_prev_ui.png" alt="logo_photo" width="100"> <!-- Group logo with alt text and width -->
    </figure>
  </div>

</body>
</html>