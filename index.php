<?php

require 'php-scripts/functions/dbConnection.php';
require 'php-scripts/functions/viewFromDB.php';

$db = getDBConn();

$resultQueryView = getAboutMeContent($db);
$printAboutMeText = viewContent($resultQueryView);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Aldo Fiore's Portfolio</title>
    <link rel="stylesheet" type="text/css" href="styles/normalize.css">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
  </head>
  <body>
  <!-- Navbar -->
    <nav class="fixed-navbar">
      <img class="profile-picture" src="img/profile-picture2.jpg" alt="my-picture" />
      <ul>
        <li><a href="#home">HOME</a></li>
        <li><a href="#about-me">ABOUT ME</a></li>
        <li><a href="#projects">PORTFOLIO</a></li>
        <li><a href="#contact" class="menu-option-hidden">CONTACT</a></li>
      </ul>
      <div class="icons">
        <a href="https://github.com/aldofiore28" target="_blank"><img src="img/github-icon.png" alt="github icon"></a>
        <a href="https://www.linkedin.com/in/aldo-fiore-880346178/" target="_blank"><img src="img/linkedin-logo.png" alt="linkedin icon"></a>
        <a href="mailto: aldo.fiore95@gmail.com" target="_top"><img src="img/email-icon3.png" alt="email icon"></a>
        <a href="tel: +447453151955" target="_top"><img src="img/telephone-icon.png" alt="telephone icon"></a>
      </div>
      <a class="cms-button" href="php-scripts/adminPage.php" target="_blank">CMS Page</a>
    </nav>

    <!-- container for the right part of the website -->
    <main class="container">
      <!-- title of the page -->
      <section id="home" class="title">
        <h1>ALDO FIORE</h1>
        <h3>full stack web developer</h3>
      </section>
      <!-- main img -->
      <section class="main-img">
        <img src="img/ai-close-up-code-160107.jpg" alt="laptop with code">
      </section>

      <section id="about-me" class="about-me internal-container">
        <h1>About me...</h1>
        <?php echo $printAboutMeText; ?>
      </section>

      <section id ="projects" class="projects internal-container">
        <h1>Projects</h1>
        <article>
            <img src="img/coming-soon2.png" alt="coming-soon">
          <p>
            <a href="#">< Work in progress ></a>
          </p>
        </article>
        <article>
          <img src="img/coming-soon2.png" alt="coming-soon">
          <p>
            <a href="#">< Work in progress ></a>
          </p>
        </article>
        <article>
            <img src="img/coming-soon2.png" alt="coming-soon">
          <p>
            <a href="#">< Work in progress ></a>
          </p>
        </article>
        <article>
          <img src="img/coming-soon2.png" alt="coming-soon">
          <p>
            <a href="#">< Work in progress ></a>
          </p>
        </article>
        <article>
            <img src="img/coming-soon2.png" alt="coming-soon">
          <p>
            <a href="#">< Work in progress ></a>
          </p>
        </article>
        <article>
            <img src="img/coming-soon2.png" alt="coming-soon">
          <p>
            <a href="#">< Work in progress ></a>
          </p>
        </article>
      </section>

      <section class="hidden-contact internal-container">
        <h3>Contact Details</h3>
        <div class="icons">
          <a href="https://github.com/aldofiore28" target="_blank" class="icon-links"><img src="img/github-icon.png" alt="github icon"></a>
          <a href="https://www.linkedin.com/in/aldo-fiore-880346178/" target="_blank" class="icon-links"><img src="img/linkedin-logo.png" alt="linkedin icon"></a>
          <a href="mailto: aldo.fiore95@gmail.com" target="_top" class="icon-links"><img src="img/email-icon3.png" alt="email icon"></a>
          <a href="tel: +447453151955" target="_top" class="icon-links" id="contact"><img src="img/telephone-icon.png" alt="telephone icon"></a>
        </div>
      </section>
    </main>

  </body>
</html>