<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./assets/img/h1.png" />
  <link rel="stylesheet" href="assets/css/styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- =====BOX ICONS===== -->
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <!--===== SCROLL REVEAL =====-->
  <script src="https://unpkg.com/scrollreveal"></script>
  <title>Lyanna Padillo</title>
</head>

<body>
  <!--===== HEADER =====-->
  <header class="l-header">
    <nav class="nav bd-grid">
      <div>
        <!-- &#60;&#62; -->
        <a href="#home" class="nav-logo"><img src="./assets/img/h.png" height="70px" alt="H" /></a>
      </div>

      <div class="nav-menu" id="nav-menu">
        <ul class="nav-list">
          <li class="nav-item">
            <a href="#home" class="nav-link home active">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link about">About</a>
          </li>
          <li class="nav-item">
            <a href="#skills" class="nav-link skills">Skills</a>
          </li>
          <li class="nav-item">
            <a href="#projects" class="nav-link projects">Projects</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link contact">Contact</a>
          </li>
          <li class="nav-item">
          <a href = "#" onclick="myFunction()"> <img src="./assets/img/sumoon.png" alt="" height="20px" width="20px" style="background-color: transparent;"> </a>
          </li>
        </ul>
      </div>

      <div class="nav-toggle" id="nav-toggle">
        <i class="bx bx-menu"></i>
      </div>
    </nav>
  </header>

  <main class="l-main">
    <!--===== HOME =====-->
    <section class="home bd-grid section" id="home">
      <div class="home-data">
        <h2 class="home-title">
          Hi!<br />I am <span class="home-title-color">Lyanna Padillo</span><br />
         <span id="jobTitle" >COMSCI Student</span> 
        </h2>

        <a href="validation_complete.php" target="_blank"
          class="button">Exercises</a>

      </div>

      <div class="home-social">
        <a href="https://www.linkedin.com/in/lyanna-padillo-8ba1b321a/" target="_blank" class="home-social-icon"><i
            class="bx bxl-linkedin"></i></a>
        <a href="https://github.com/yannapadillo" target="_blank" class="home-social-icon"><i
            class="bx bxl-github"></i></a>
      </div>

      <div class="home-img">
        <img src="assets/img/profile.gif" alt="" />
      </div>
    </section>

    <!--===== ABOUT =====-->
    <section class="about section" id="about">
      <h2 class="section-title">About</h2>

      <div class="about-container bd-grid">
        <div class="about-img">
          <img src="assets/img/profile_1.jpg" alt="" />
        </div>

        <div style="text-align: center">
          <h2 class="about-subtitle">Yanna</h2>
          <p class="about-text">
            Hi there, my name is Lyanna Marie Z. Padillo, but my friends and loved ones call me "Yanna". I am currently a 2nd year student studying Computer Science at Asia Pacific College. 
            In my free time, I enjoy watching Korean dramas and immersing myself in the world of video editing and graphic design. I have always had a passion for the arts, and I find that 
            these activities allow me to express myself creatively and connect with others through my work. In addition to my artistic pursuits, I am also skilled in the realm 
            of music and have been playing the violin for several years. I find that music helps me to relax and unwind after a long day of studying and coding. Speaking of 
            coding, I am proficient in several programming languages, including HTML, CSS, Python, and Java. I am always eager to learn more and improve my skills in this field.
          <br />
          <br />
          <p>
            Drop a mail lzpadillo@student.apc.edu.ph
            <i style="color: #4070f4; font-size: 1.2rem; cursor: pointer" class="bx bx-copy" id="copy"></i>
          </p>
        </div>
      </div>
    </section>


    <!---========Education ======--->
    <section class="education section" id="education">
      <h2 class="section-title">Education</h2>
      <div class="education-container bd-grid">
    
        <div class="education-data">
          <div class="education-names">
            <!-- <i class="bx bxl-html5 skills-icon"></i> -->
            <span class="education-name">Bachelor of Science in Computer Science with specialization in Cyber Security and
              Forensics</span> 
            <p class="education-platform ">Asia Pacific College</p>
            <p class="education-duration ">August 2021 - Present</p>

          </div>
        </div>
        </div>
      <div class="education-container bd-grid">
    
    <div class="education-data">
      <div class="education-names">
        <!-- <i class="bx bxl-html5 skills-icon"></i> -->
        <span class="education-name">Junior and Senior High School</span>
        <p class="education-platform ">Naga City Science High School</p>
        <p class="education-duration ">June 2015 - July 2021</p>

      </div>
    </div>
    </div>

    <!--===== SKILLS =====-->
    <section class="skills section" id="skills">
      <h2 class="section-title">Skills</h2>

      <div class="skills-container bd-grid">
        <div>
          <!-- <h2 class="skills-subtitle">Front-end Skills</h2> -->
          <div class="skills-data">
            <div class="skills-names">
              <i class="bx bxl-html5 skills-icon"></i>
              <span class="skills-name">HTML</span>
            </div>
            <!-- <div class="skills-bar skills-html"></div> 
             <div>
                <span class="skills-percentage">75%</span>
              </div>  -->
          </div>
          <div class="skills-data">
            <div class="skills-names">
              <i class="bx bxl-css3 skills-icon"></i>
              <span class="skills-name">CSS</span>
            </div>
             <!-- <div class="skills-bar skills-css"></div>  -->
            <!-- <div>
                <span class="skills-percentage">70%</span>
              </div>  -->
          </div>
          <div class="skills-data">
            <div class="skills-names">
              <img class="skills-icon" src="./assets/img/express.png" alt="" />
              <span class="skills-name">Java</span>
            </div>
            <!-- <div class="skills-bar skills-css"></div>  -->
            <div>
                <!-- <span class="skills-percentage">70%</span> -->
              </div> 
          </div>

           <div class="skills-data">
            <div class="skills-names">
              <img class="skills-icon" src="./assets/img/python.png" alt="" />
              <span class="skills-name">Python</span>
            </div>
            <!-- <div class="skills-bar skills-css"></div> -->
            <div>
                <!-- <span class="skills-percentage">70%</span> -->
              </div> 
          </div>
          <!--
          <div class="skills-data">
            <div class="skills-names">
              <i class="bx bxl-javascript skills-icon"></i>
              <span class="skills-name">Java</span>
            </div>
            <!-- <div class="skills-bar skills-css"></div>  -->
            <div>
                <!-- <span class="skills-percentage">70%</span> -->
              </div> 
<!--
          </div>
          <div class="skills-data">
            <div class="skills-names">
              <i class="bx bxl-react skills-icon"></i>
              <span class="skills-name">React</span>
            </div>
            <!-- <div class="skills-bar skills-react"></div> -->
            <div>
                <!-- <span class="skills-percentage">50%</span> -->
              </div>
              <!--
          </div>
          <div class="skills-data">
            <div class="skills-names">
              <i class="bx bxl-redux skills-icon"></i>
              <span class="skills-name">Redux</span>
            </div>
            <!-- <div class="skills-bar skills-redux"></div>  -->
            <!-- <div class="skills-bar skills-css"></div>  -->
            <div>
                <!-- <span class="skills-percentage">50%</span> -->
              </div> 

          </div>
<!--
          <div class="skills-data">
            <div class="skills-names">
              <img class="skills-icon" src="./assets/img/typescript.png" alt="" />
              <span class="skills-name">TypeScript</span>
            </div>
          </div>
        </div>
        <div>
          <!-- <h2 class="skills-subtitle">Back-end Skills</h2> -->
          
<!--
          <div class="skills-data">
            <div class="skills-names">
              <img class="skills-icon" src="./assets/img/mongodb.png" alt="" />
              <span class="skills-name">MongoDB</span>
            </div>
            <!-- <div class="skills-bar skills-css"></div>  -->
            <div>
                <!-- <span class="skills-percentage">70%</span> -->
              </div> 
          </div>
          <div>
             <!-- <h2 class="skills-subtitle">TOOLS</h2> --> 
             <!--
             <div class="skills-data">
              <div class="skills-names">
                <img class="skills-icon" src="./assets/img/github.svg" alt="" />
                <span class="skills-name">Github</span>
              </div>
            </div>
            <div class="skills-data">
              <div class="skills-names">
                <img class="skills-icon" src="./assets/img/git.png" alt="" />
                <span class="skills-name">Git</span>
              </div>

            </div>
            <div class="skills-data">
              <div class="skills-names">
                <img class="skills-icon" src="./assets/img/dsa.png" alt="" />
                <span class="skills-name">Data Structures and Algorithms</span>
              </div>

            </div> 

          </div>
        </div>
    </section>

    <!--===== Projects =====-->
    <section class="projects section" id="projects">
      <h2 class="section-title">Projects</h2>

      <div class="project-container">
        <div class="project-img">
          <img src="assets/img/01.png" alt="cult.fit" />
          <p class="project-title">Nightingale</p>
          <p class="project-subtitle">
            
            This java program will serve as a personal checker, recorder, and reminder for its user. 
            Using the program allows you to create a mini profile where users can provide their 
            name, sex, and birthdate. Then, it will ask you about your prescription details which 
            will help the program organize it better. This shall help you keep track of your 
            medications and follow your doctor’s prescription until a specific period.
            <br />
            <br /> An individual project.
            <br />
          </p>
          <div class="project-btns">
            <a href="https://github.com/yannapadillo/Nightingale" target="_blank" class="small-btn button">

              Code<i class="bx bxl-github"></i>
            </a>
            <a href="https://drive.google.com/file/d/1DMhKI7NLQFam0qf95UYWp4IObkaf7dQv/view?usp=share_link" target="_blank" class="small-btn button">
              Manual
              <!-- <i class="bx bx-link-external"></i> -->
            </a>
            <!-- <a href="https://medium.com/@hgauba4/how-did-our-team-build-the-mednear-clone-241227129f79" target="_blank"
              class="small-btn button">
              Blog
              <i class="bx bx-blog"></i> -->
            </a>
          </div>
        </div>


        <div class="project-img">
          <img src="assets/img/epic.png" alt="Reddit.com" />
          <p class="project-title">Rahay</p>
          <p class="project-subtitle">
            Rahay will be utilizing the applications of artificial intelligence on the phone’s 
            microphone—for recording audio, camera—to take visual samples which will be used to 
            gather as much data as needed for it to be analyzed by the system for a quick diagnosis. <br />
            <br />
            A collaborative project built by a team of 3.
            <br />
            <br /> 
          </p>
          <div class="project-btns">
            <a href="https://asiapacificcollege-my.sharepoint.com/:v:/g/personal/lzpadillo_student_apc_edu_ph/EQGgVTWkVWFCitENBhmKjxwBaGNjhXI2HNhXyI6DEGoTew?e=i9XCNU" target="_blank" class="small-btn button">
              PITCH
              <!-- <i class="bx bx-link-external"></i> -->
            </a>
          </div>
        </div>
        <div class="project-img">
          <img src="assets/img/mwpharmacheutical.png" alt="Tinde chat" />
          <p class="project-title">
            MWPharmaceutical
          </p>
          <p class="project-subtitle">
            An on-demand pharmacy and check-up scheduling app that is easy to use and 
            accessible to the masses, from kids to geriatrics.
            
            <br />
            <br />
            A collaborative project built by a team of 5.
            <br />
            <br />
           UI/UX DESIGN
          </p>
          <div class="project-btns">
            <a href="https://tinyurl.com/mwpharmacy"
              target="_blank" class="small-btn button">
              Figma<i class="bx bxl-figma"></i>
            </a>
            <a href="https://www.youtube.com/watch?v=oFnOYBjmh6U" target="_blank" class="small-btn button">
              Live<i class="bx bx-link-external"></i>
            </a>
          </div>
        </div>

        <div class="project-img">
          <img src="assets/img/SubRosa.png" alt="shop app" />
          <p class="project-title">
            SUBROSA
          </p>
          <p class="project-subtitle">
            SUBROSA is a top-down RPG set in an apocalyptic world where a virus from the 
            Glaciers of Arctic has caused mutations and radiation. The game has simple 
            mechanics and features items and vials that can give power-ups or upgrades to 
            your character. In order to survive, you must use your items wisely to mitigate 
            damage from enemies.
            <br />
            <br />
            The game was developed in just three days by a team of 12 talented developers and
            visual artists as a submission for GAME JAM 2022.
            <br />
          </p>
          <div class="project-btns">
            <a href="https://asiapacificcollege-my.sharepoint.com/:v:/g/personal/lzpadillo_student_apc_edu_ph/EXx9Cjj2BwxEmj2cxTZlOKcBvKKSlvNUPKbMkXytynn-Ng?e=tNIehg" target="_blank" class="small-btn button">
              PITCH<i class="bx bx-link-external"></i>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!--===== FOOTER + CONTACT=====-->
  
  <footer class="footer section" id="contact">
    <h2 class="section-title">Get in Touch</h2>
    <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webprogss211db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br><br>
    <div class="footer-social">
      <a href="https://www.linkedin.com/in/lyanna-padillo-8ba1b321a/" target="_blank" class="footer-icon"><i
          class="bx bxl-linkedin">
          <br />
          LinkedIn</i></a>
      <a href="https://twitter.com/Tushars2526" target="_blank" class="footer-icon"><i class="bx bxl-twitter">
          <br />
          Twitter</i></a>
      <a href="mailto:lzpadillo@student.apc.edu.ph" target="_blank" class="footer-icon"><i class="bx bx-mail-send">
          <br />
          E-mail</i></a>
      <a href="tel:+63 9771135400" target="_blank" class="footer-icon"><i class="bx bx-phone">
          <br />
          Phone</i></a>
      <a href="https://github.com/yannapadillo" target="_blank" class="footer-icon"><i
            class="bx bxl-github">
          <br />
          GitHub
          </i></a>
    </div>
    <p>&#169; 2022 copyright all right reserved</p>
  </footer>

  <!--===== MAIN JS =====-->
  <script src="assets/js/main.js"></script>
</body>

</html>