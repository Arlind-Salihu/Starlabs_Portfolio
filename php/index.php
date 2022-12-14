<?php
include 'contactForm.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../images/as.png" type="image/x-icon" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Portfolio</title>
  </head>
  <body>
    
    <!-- START OF NAVBAR SECTION -->
    <div class="topnav" id="myTopnav">
      <a href="#landing">Home</a>
      <a href="#skills">Skills</a>
      <a href="#projects">Projects</a>
      <a href="#contact">Contact</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <img
          src="../images/hamburger.png"
          alt="hamburger"
          style="width: 35px; height: 35px"
        />
      </a>
    </div>
    <nav id="scroll">
      <ul>
        <li><a class="normal-a" href="#landing">Home</a></li>
        <li><a class="normal-a" href="#skills">Skills</a></li>
        <li><a class="normal-a" href="#projects">Projects</a></li>
        <li><a class="normal-a" href="#contact">Contact</a></li>
      </ul>
    </nav>
    <!-- END OF NAVBAR SECTION -->

    <!-- START OF FIRST SECTION -->
    <section id="landing">
      <div class="landingClass">
        <p class="intro">
          Hey there,<br />I am <span class="spanName">Arlind Salihu</span>
        </p>
        <p class="introText">
          I am a front-end web developer. I like creative and modern website
          design as an experienced front-end developer. I prefer high code
          quality in web development as an experienced web developer. I am
          experienced in HTML, CSS, Javascript, React JS, Vue JS, PHP, Laravel,
          MySQL, ASP .NET Core, Adobe XD, Adobe Photoshop, and Adobe
          Illustrator.
        </p>
      </div>
      <img class="logoImg" src="../images/lindi.png" />
    </section>
    <!-- END OF FIRST SECTION -->

    <!-- START OF SECOND SECTION -->
    <section id="skills">
      <div class="skillsClass">
        <p class="skillsHead">
          <span class="spanName">Skills</span>
        </p>
        <p class="skillText">HTML,CSS</p>
        <div class="container">
          <div class="skills firstSkill">95%</div>
        </div>
        <p class="skillText">Javascript, PHP, MySQL, .NET Core</p>
        <div class="container">
          <div class="skills secondSkill">90%</div>
        </div>
        <p class="skillText">React Js, Vue Js, Laravel</p>
        <div class="container">
          <div class="skills thirdSkill">80%</div>
        </div>
        <p class="skillText">Adobe XD, Adobe Ph, Adobe Ill</p>
        <div class="container">
          <div class="skills fourthSkill">60%</div>
        </div>
      </div>
    </section>
    <!-- END OF SECOND SECTION -->

    <!-- START OF THIRD SECTION -->
    <section id="projects">
      <div class="wrapper">
        <p class="skillsHead">My <span class="spanName">Projects</span></p>
        <div class="myProjects">
          <div class="flexContainer">
            <div class="card">
              <a
                href="https://github.com/Arlind-Salihu/ABY_Travel.git"
                target="_blank"
              >
                <img src="../images/aby.jpg" alt="img" />
                <p>ABY Travel</p>
                <p class="projectText">ABY Travel</p>
              </a>
            </div>

            <div class="card">
              <a href="https://savvysolution.tech/" target="_blank">
                <img src="../images/software.png" alt="img" />
                <p>Software Landing Page</p>
                <p class="projectText">Software Landing Page</p>
              </a>
            </div>

            <div class="card">
              <a
                href="https://dev.azure.com/as47047/_git/Tech%20E-Commerce2"
                target="_blank"
              >
                <img src="../images/admin.png" alt="img" />
                <p>Admin Dashboard</p>
                <p class="projectText">ABY Travel</p>
              </a>
            </div>
          </div>
        </div>

        <div class="myProjects">
          <div class="flexContainer">
            <div class="card">
              <a
                href="https://bitcoindropshipping.live/home.php"
                target="_blank"
              >
                <img src="../images/bitcoin.png" alt="img" />
                <p>Bitcoin Dropshipping</p>
                <p class="projectText">Bitcoin Dropshipping</p>
              </a>
            </div>

            <div class="card">
              <a
                href="https://github.com/Arlind-Salihu/AO_Hostels_Task.git"
                target="_blank"
              >
                <img src="../images/hostels.png" alt="img" />
                <p>A&O Hostels Website</p>
                <p class="projectText">A&O Hostels Website</p>
              </a>
            </div>

            <div class="card">
              <a
                href="https://github.com/Arlind-Salihu/Lab_Course_2_LARAVEL.git"
                target="_blank"
              >
                <img src="../images/smis.png" alt="img" />
                <p>SMIS Dashboard</p>
                <p class="projectText">SMIS Dashboard</p>
              </a>
            </div>
          </div>
        </div>

        <div class="myProjects">
          <div class="flexContainer">
            <div class="card">
              <a
                href="https://github.com/Arlind-Salihu/Tech-E-Commerce.git"
                target="_blank"
              >
                <img src="../images/tech.png" alt="img" />
                <p>Tech E-Commerce</p>
                <p class="projectText">Tech E-Commerce</p>
              </a>
            </div>
          </div>
        </div>
        <div style="text-align: center">
          <div class="carosuelButton round" onclick="currentSlide(1)">1</div>
          <div class="carosuelButton round" onclick="currentSlide(2)">2</div>
          <div class="carosuelButton round" onclick="currentSlide(3)">3</div>
        </div>
      </div>
    </section>
    <!-- END OF THIRD SECTION -->

    <!-- START OF FOURTH SECTION -->
    <section id="contact" class="middleContainer">
      <div class="contactForm">
        <p class="skillsHead">Contact <span class="spanName">Me</span></p>
        <?php if (isset($_SESSION['success']) && !empty($_SESSION['success'])) { ?>
                                <div class="success-message"><?php echo $_SESSION['success']; ?></div>
                                <?php
                                unset($_SESSION['success']);
                                }?>
        <form method="post" enctype="multipart/form-data">
          <div class="input-form">
            <div>
              <input type="text" class="name" placeholder="Name..." name="name" required/>
              <input type="text" class="lastName" placeholder="Last Name..." name="surname" required/>
            </div>

            <div>
              <input type="email" class="email" placeholder="E-Mail..." name="email"/>
            </div>

            <div>
            <textarea class="message" name="message" rows="50" placeholder="Message.." required></textarea>
            </div>

            <div>
              <input type="submit" class="button" name="submitMessage" style="cursor:pointer;" />
            </div>
            <br />
          </div>
        </form>
      </div>
    </section>
    <!-- END OF FOURTH SECTION -->

    <!-- START OF FIFTH (FOOTER) SECTION -->
    <div class="right-footer">
      <a href="https://github.com/Arlind-Salihu" target="_blank">
        <img src="../images/github.png" alt="github" class="link-footer" />
      </a>

      <a href="mailto:arlindsalihu@outlook.com" target="_blank">
        <img src="../images/outlook.png" alt="outlook" class="link-footer" />
      </a>

      <a
        href="https://www.linkedin.com/in/arlind-salihu-660648212/"
        target="_blank"
      >
        <img src="../images/linkedin.png" alt="linkedin" class="link-footer" />
      </a>
    </div>
    <!-- END OF FIFTH (FOOTER) SECTION -->
    <script src="../js/script.js"></script>
  </body>
</html>
