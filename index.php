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
        <p>Hello! My name is Aldo and I`m a 23 year old Italian fella from a small town near Rome. I am currently studying at the renowned Mayden Academy in Bath to become a Full Stack web developer. I enjoy the highs and lows of coding, especially the time spent in front of the laptop with a good problem to solve. I particularly love the feeling of creating something, wether a product or a service that people can use. I currently feel confident in HTML and CSS and I look forward to learning the other languages the course has in store for us to expand my knowledge: PHP, Javascript and MySQL.</p>
        <p>I migrated in the UK for a scenery change and worked in casinos for about 3 years before I moved to Bath. Whilst considering other opportunities I remembered how much I had enjoyed the software development I experienced at high school, so decided to apply for the Mayden Academy to help change my career and life! In my free time I like to cook, as a proud Italian, for my friends and girlfriend. I also love relaxing at home watching movies.</p>
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