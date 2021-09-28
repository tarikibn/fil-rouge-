
    <header >
      <a href="#" class="brand"><img src="logo.png" alt=""></a>
      <div class="menu-btn"></div>

      <h6 class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-align-center"></i> courses
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="courses.php">tout les cours</a>
   
        </div>
</h6>
     
      <form action="" class="search-bar">
        <input type="text" name="search">
        <button class="search-btn" type="submit">
            <span>Search</span>
        </button>
    </form>
      <div class="navigation">
        <div class="navigation-items">
          <a href="#">accueil</a>
          <a href="#about">About</a>
          <a href="#prof">les proffeseurs</a>
      
          <a href="loginst.php">Contact</a>
        </div>
      </div>
    </header>

    <section class="home">
      <video class="video-slide active" src="video.mp4" autoplay muted loop></video>
      <video class="video-slide" src="1.mp4" autoplay muted loop></video>
      <video class="video-slide" src="2.mp4" autoplay muted loop></video>
     
      <div class="content active">
        

        <h1>APPRENEZ.<br><span> SANS LIMITES</span></h1>
        <p>Développez vos compétences grâce à des cours, des formation en ligne proposés par les meilleures professeurs et etudients. <br> La formation continue est destinée aux professionnels, salariés et demandeurs d'emploi qui désirent se former, acquérir de nouvelles connaissances et développer leurs compétences afin de dynamiser leur carrière professionnelle.
        </p>
        <a href="register.php">inscrivez-vous gratuitement</a>
        <a href="loginst.php" >contact</a>
      </div>
      <div class="content">
        <h1>L'apprentissage<br><span>autonome</span></h1>
        <p>La formation continue est destinée aux professionnels, salariés et demandeurs d'emploi qui désirent se former, acquérir de nouvelles connaissances et développer leurs compétences afin de dynamiser leur carrière professionnelle.
        </p>
        <a href="register.php">inscrivez-vous gratuitement</a>
        <a href="loginst.php">contact</a>
      </div>
      <div class="content">
        <h1>sans .<br><span>obstacle</span></h1>
        <p>La formation continue est destinée aux professionnels, salariés et demandeurs d'emploi qui désirent se former, acquérir de nouvelles connaissances et développer leurs compétences afin de dynamiser leur carrière professionnelle.
        </p>
        <a href="register.php">inscrivez-vous gratuitement</a>
        <a href="loginst.php">contact</a>
      </div>
  
     
      <div class="media-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
      </div>
      <div class="slider-navigation">
        <div class="nav-btn active"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
       
      </div>
    </section>






 





    <script type="text/javascript">
    //Javacript for responsive navigation menu
    const menuBtn = document.querySelector(".menu-btn");
    const navigation = document.querySelector(".navigation");

    menuBtn.addEventListener("click", () => {
      menuBtn.classList.toggle("active");
      navigation.classList.toggle("active");
    });

    //Javacript for video slider navigation
    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".video-slide");
    const contents = document.querySelectorAll(".content");

    var sliderNav = function(manual){
      btns.forEach((btn) => {
        btn.classList.remove("active");
      });

      slides.forEach((slide) => {
        slide.classList.remove("active");
      });

      contents.forEach((content) => {
        content.classList.remove("active");
      });

      btns[manual].classList.add("active");
      slides[manual].classList.add("active");
      contents[manual].classList.add("active");
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        sliderNav(i);
      });
    });
    </script>

