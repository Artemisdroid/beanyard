<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Website | CodingNepal</title>
    <!-- Linking CSS File -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Fontawesome link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <style>
        /* Color variables */
:root {
  --white-color: #fff;
  --bg-color: #fff;
  --gray-color: #ccc;
}

/* Changing background color */
body {
  background: var(--white-color) !important;
}

/* Changing link color */
.nav-item .nav-link {
  color: var(--white-color);
}

/* Hero section background image */
.hero {
  height: 100vh;
  background-image: url('images/byg.jpg');
  background-repeat: no-repeat;
  background-position: 60% 0%;
  background-size: cover;
  background-attachment: fixed;
}

#skills i {
  height: 100px;
  width: 100px;
}

#portfolio img {
  height: 300px;
  object-fit: cover;
}

#about .img,
#about img,
.hire-text h2 {
  position: relative;
}

/* Timeline background line */
#about .img::before {
  content: "";
  left: 50%;
  width: 4px;
  position: absolute;
  height: calc(100% + 140px);
  background: var(--white-color);
}

#about img,
#about .hire-text h2 {
  width: 140px;
}

#about .hire-text h2 {
  height: 140px;
}

.social-icons a {
  width: 40px;
  height: 40px;
}

footer .social-icons a {
  width: 30px;
  height: 30px;
}

#cv img {
  width: 230px;
}

/* feedback section background image */
#feedback {
  background-size: cover;
  background-attachment: fixed;
  background-position: center;
  background-image: url('images/bybean.jpg');
}

@media screen and (max-width: 990px) {
  #skills .card {
    width: calc(100% / 2 - 10px) !important;
  }
}

@media screen and (max-width: 668px) {
  #skills .card,
  #portfolio .card-wrapper {
    width: 100% !important;
  }
 #about .hire-text h2 {
   height: 70px;
   width: 70px;
 }
}
    </style>
  </head>
  <body>
     <!-- Hero or Showcase Section -->
     <section class="hero d-flex flex-column align-items-center justify-content-center">
      <div class="text-center">
        <h1 class="h1 text-white fw-medium fst-italic">BEANYARD</h1>
        <h2 class="display-3 text-white fst-italic">FIND YOUR FLAVOUR!<br /> GET ROASTED!</h2>
        <a href="signup.php" class="btn btn-lg fs-6 fw-medium mt-5 btn-primary p-3">KNOW MORE</a>
      </div>
    </section>
     <!-- Header & Navbar -->
     <header class="bg-dark fixed-top">
      <nav class="container-xxl navbar navbar-expand-lg py-3 bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold fs-3" href="#">BEANYARD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item mx-2">
                <a class="nav-link" href="#ABOUT">ABOUT</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#MENU">MENU</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#PROCEDURE">PROCEDURE</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#PROFILE">PROFILE</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#FEEDBACK">FEEDBACK</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="Adminlogin.php">ADMIN</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="HomeProducts.php">PRODUCT</a>
              </li>
              
          </div>
        </div>
      </nav>
    </header>

    
    <!-- ABOUT Section -->
    <section class="container py-5" id="ABOUT">
      <div class="row mt-4 py-3">
        <div class="col-12 d-flex flex-column text-center justify-content-center">
          <h2>ABOUT</h2>
          <h5 class="text-secondary fw-normal py-2 fst-italic">WE ARE COMMITTED TO SERVING YOU FRESH, DELICIOUS COFFEE THAT HAS BEEN SOURCED ETHICALLY AND SUSTAINABLY <br/>PERFECTING BREWS JOINS OUR EYE FOR DETAIL TO CREATE AN ABSOLUTELY DELIGHTFUL CUP OF COFFEE EVERY TIME.</h5>
        </div>
      </div>
      <div class="row d-flex justify-content-between mx-0">
        <div class="card mt-5 d-flex flex-column align-items-center text-center bg-white p-4" style="width: 25rem">
          <i class="text-white bg-primary d-flex align-items-center justify-content-center fs-2 rounded-circle fa-solid fa-coffee-beans"></i>
          <h3 class="mt-4 h4">HAPPINESS & DELIGHT</h3>
          <p class="text-center">Every cup of coffee is uniquely delightful and personal. We love bringing that moment of delight to our customers.</p>
        </div>
        <div class="card mt-5 d-flex flex-column align-items-center text-center bg-white p-4" style="width: 25rem">
          <i class="text-white bg-primary d-flex align-items-center justify-content-center fs-2 rounded-circle fa-solid fa-coffee-bean"></i>
          <h3 class="mt-4 h4">COMMUNITY</h3>
          <p class="text-center">Our community of customers is our family. and we strive to serve our family with passion and care everyday.</p>
        </div>
        <div class="card mt-5 d-flex flex-column align-items-center text-center bg-white p-4" style="width: 25rem">
          <i class="text-white bg-primary d-flex align-items-center justify-content-center fs-2 rounded-circle fa-solid fa-coffee-bean"></i>
          <h3 class="mt-4 h4">INNOVATION</h3>
          <p class="text-center">We belive in constant innovation to design coffees for both the experienced and novice palate.</p>
        </div>
        <div class="card mt-5 d-flex flex-column align-items-center text-center bg-white p-4" style="width: 25rem">
          <i class="text-white bg-primary d-flex align-items-center justify-content-center fs-2 rounded-circle fa-solid fa-coffee-bean"></i>
          <h3 class="mt-4 h4">INCLUSIVITY</h3>
          <p class="text-center">We belive our coffees are for everyone, regardless of whether someone is a hard-core enthusiast or a casual explorer.</p>
        </div>

    <!-- Menu Section -->
    <section class="container py-5" id="MENU">
      <div class="row mt-4 py-3">
        <div class="col-12 d-flex flex-column text-center justify-content-center">
          <h2>MENU</h2>
          <h5 class="text-secondary fw-normal py-2 fst-italic">COFFEE FOR EVERYONE ! THERE'S SOMETHING FOR EVERYONE TO SIP ON!</h5>
        </div>
        <div class="row mt-5 mx-0 justify-content-center align-items-center">
          <div class="col-lg-3 px-md-3 px-0 col-md-4 col-12 card-wrapper">
            <div class="card mt-4">
              <img src="images/arabica.jpg" class="img-fluid" alt="portfolio-img">
              <div class="card-body text-center">
                <h6 class="card-title">Coffee Arabica</h6>
                <p class="card-text text-secondary">Arabica is both full of flavour and aroma , makes an brisk cup of quality! delight in every cup! </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-md-3 px-0 col-md-4 card-wrapper">
            <div class="card mt-4">
              <img src="images/robusta.jpg" class="img-fluid" alt="portfolio-img">
              <div class="card-body text-center">
                <h6 class="card-title">Robusta</h6>
                <p class="card-text text-secondary">Robusts have a slight chocolate hint to them,which makees them ideal to have with milk and sugar.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-md-3 px-0 col-md-4 card-wrapper">
            <div class="card mt-4">
              <img src="images/heirloom.jpg" class="img-fluid" alt="portfolio-img">
              <div class="card-body text-center">
                <h6 class="card-title">Liberica</h6>
                <p class="card-text text-secondary">Liberica is unique in their aroma and they are not only smoky,but they are fruity and floral too!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-md-3 px-0 col-md-4 card-wrapper">
            <div class="card mt-4">
              <img src="images/geisha.jpg" class="img-fluid" alt="portfolio-img">
              <div class="card-body text-center">
                <h6 class="card-title">Geisha</h6>
                <p class="card-text text-secondary"> Geisha Ethiopian origin beans have extremly unique flavour profile,they brew the perfect cup of coffee!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-md-3 px-0 col-md-4 card-wrapper">
            <div class="card mt-4">
              <img src="images/heirloom.jpg" class="img-fluid" alt="portfolio-img">
              <div class="card-body text-center">
                <h6 class="card-title">Heirloom</h6>
                <p class="card-text text-secondary">Heirloom are varities that have been cross-bred and produce a huge range of exciting cup qualities!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-md-3 px-0 col-md-4 card-wrapper">
            <div class="card mt-4">
              <img src="images/bourbon.jpg" class="img-fluid" alt="portfolio-img">
              <div class="card-body text-center">
                <h6 class="card-title">Bourbon</h6>
                <p class="card-text text-secondary">Colombian Bourbon beans tend to yield high scoring cup quality and a very flavoured aroma!</p>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <!-- Procedure Section -->
    <section class="container py-5" id="PROCEDURE">
      <div class="row mt-4 py-3">
        <div class="col-12 d-flex flex-column text-center">
          <h2>PROCEDURE</h2>
          <h5 class="text-secondary fw-normal py-2 fst-italic">LEARN MORE ABOUT HOW BEANYARD WORKS TO BRING SLICE OF LIFE AT YOUR DOORSTEP!</h5>
        </div>
      </div>
      <div class="row flex-row-reverse flex-md-row mt-5 pt-5">
        <div class="col-9 col-md-5 text-md-end">
          <h5>ATTENTION TO DETAIL</h5>
          <p>We pay close attention to every detail of the consumption of coffee to understand how to amke it a delightful part of our customer's everyday experiences.</p>
         </div>
        <div class="col-3 col-md-2 img text-center">
          <img class="rounded-circle border border-5 border-dark-subtle img-fluid" src="images/beanjelly.jpg" alt="img">
        </div>
      <div class="row justify-content-md-end mt-5 pt-5">
        <div class="col-3 col-md-2 img text-center">
          <img class="rounded-circle border border-5 border-dark-subtle img-fluid" src="images/pro1.jpg" alt="img">
        </div>
        <div class="col-9 col-md-5">
          <h5>QUALITY ROASTING</h5>
          <p>All our coffee is carefully roasted in our in-house,state-of-the-art coffee roaster with specific profiles to ensure optimal flavour notes.</p>
        </div>
      <div class="row flex-row-reverse flex-md-row mt-5 pt-5">
        <div class="col-9 col-md-5 text-md-end">
          <h5>FAIR TRADE</h5>
          <p>All our coffee beans are sourced directly,grown sustainably and traded responsibly from farms in Chikmangalur and the Niligiris.</p>
        </div>
        <div class="col-3 col-md-2 img text-center">
          <img class="rounded-circle border border-5 border-dark-subtle img-fluid" src="images/pro3.jpg" alt="img">
        </div>
</div>
      <div class="row justify-content-md-end mt-5 pt-5">
        <div class="col-3 col-md-2 img text-center">
          <img class="rounded-circle border border-5 border-dark-subtle img-fluid" src="images/jellybean.jpg" alt="img">
        </div>
        <div class="col-9 col-md-5">
          <h5>ETHICAL PRICING</h5>
          <p>We want all our patrons to enjoy the perfect coffee experience. that's why our coffee beans are resonably priced.</p>
        </div>
      </div>
      </div>      
    </section>

    <!-- Profile Section -->
    <section class="container py-5" id="PROFILE">
      <div class="row mt-4 py-3">
        <div class="col-12 d-flex flex-column text-center">
          <h2>PROFILE</h2>
          <h5 class="text-secondary fw-normal py-2 fst-italic">FIND US ON OTHER SOCIAL MEDIA PLATFORMS !</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 mt-5 order-lg-0 order-1 text-center">
          <h2 class="mt-3">BEANYARD</h2>
          <ul class="list-unstyled contact-info">
            <li><i class="fas fa-envelope me-2"></i>beanyard78@gmail.com</li>
            <li><i class="fas fa-phone me-2"></i> +91108817230</li>
            <li><i class="fas fa-map-marker-alt me-2"></i> 18,Ground Floor,Executive Chambers,5,Cunningham Road,Bengaluru,Karnataka 560052</li>
          </ul>
          <ul class="social-icons my-5 d-flex justify-content-center">
            <a href="#" class="bg-primary mx-2 text-white d-flex align-items-center justify-content-center text-decoration-none rounded-circle"><i class="fa-brands fa-twitter"></i></a>
            <a href="#" class="bg-primary mx-2 text-white d-flex align-items-center justify-content-center text-decoration-none rounded-circle"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="bg-primary mx-2 text-white d-flex align-items-center justify-content-center text-decoration-none rounded-circle"><i class="fa-brands fa-linkedin-in"></i></a>
          </ul>
        </div>
        <div class="col-lg-7 order-lg-1 order-0 mt-5 text-start">
          <h3>Our story , team and branches.</h3>
          <hr>
          <p>We work in harmony to bring the most delicious, fresh and high-quality coffee to your cup. Our team is always excited to ensure that you have the most wonderful experience shoping from BEANYARD.We have 90+ Branches in 6 cities across India. That means there’s always a great cup of coffee brewing in your neighborhood.</p>
        </div>
      </div>      
    </section>

     <!-- Feedback Section -->
     <section class="py-5" id="FEEDBACK">
      <div class="container-xxl py-5">
        <div class="col-12 d-flex flex-column text-center justify-content-center">
          <h2 class="text-white">FEEDBACK</h2>
          <h5 class="text-white fw-normal py-2 fst-italic">Share your experiences and feedback to us!</h5>
        </div>
        <div class="row pt-4 mt-5">
          <div class="col-12">
            <form action="#" method="POST">
              <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Enter Name*" required>
                    <label for="floatingInput">Enter Name*</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingEmail" placeholder="Enter Email*" required>
                    <label for="floatingEmail">Enter Email*</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingPassword" placeholder="Enter Phone*" required>
                    <label for="floatingPassword">Enter Phone*</label>
                  </div>
                </div>
                <div class="form-floating col-lg-6">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingMessage" style="height: 205px" required></textarea>
                  <label for="floatingMessage" class="px-4">Enter Feedback*</label>
                </div>
                <div class="col-12 mt-5 d-flex justify-content-center">
                  <button class="btn btn-lg btn-outline-light">SEND</button>
                </div>
              </div>
  
            </form>
          </div>
        </div>
       </div>
     </section>

     <!-- Footer -->
     <footer>
      <div class="container-xxl flex-wrap pt-3 d-flex align-items-center justify-content-center justify-content-md-between">
        <p>Copyright © 2023 BEANYARD</p>
        <ul class="social-icons d-flex">
          <a href="#" class="bg-primary mx-2 text-white d-flex align-items-center justify-content-center text-decoration-none rounded-circle"><small><i class="fa-brands fa-twitter"></i></small></a>
          <a href="#" class="bg-primary mx-2 text-white d-flex align-items-center justify-content-center text-decoration-none rounded-circle"><small><i class="fa-brands fa-facebook-f"></i></small></a>
          <a href="#" class="bg-primary mx-2 text-white d-flex align-items-center justify-content-center text-decoration-none rounded-circle"><small><i class="fa-brands fa-linkedin-in"></i></small></a>
        </ul>
      </div>
     </footer>
    
     <!-- Bootstrap script link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
      </div>
    </section>