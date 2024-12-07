<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>iLanding Clone</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
  <header>
    <div class="container">
      <div class="logo">
        <h1>iLanding</h1>
      </div>
      <nav>
        <ul class="nav">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      <a href="logout.php" class="logout">Log-Out</a>
      <!-- <button class="login">Login</button> -->
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </header>
  <!-- section Hero -->
  <section id="home" class="hero">
    <div class="container">
      <div class="text">
        <p class="setting">
          <span><i class="fa-solid fa-gear"></i></span>
          Working for your success
        </p>
        <div class="info-text">
          <h2>
            Maecenas Vitae<br />
            Consectetur Led<br />
            <span>Vestibulum Ante</span>
          </h2>
          <p>
            Nullam quis ante. Etiam sit amet orci eget eros faucibus
            tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec
            sodales sagittis magna.
          </p>
          <div class="btns">
            <button class="primary">Get Started</button>
            <button class="video">
              <i class="fa-solid fa-play"></i>
              Play Video
            </button>
          </div>
        </div>
      </div>
      <div class="image">
        <img src="./assets/img/hero.png" alt="Hero illustration" />
        <div class="testimonial">
          <div class="avatars">
            <img src="./assets/img/avatar-1.webp" alt="User avatar" />
            <img src="./assets/img/avatar-2.webp" alt="User avatar" />
            <img src="./assets/img/avatar-3.webp" alt="User avatar" />
            <img src="./assets/img/avatar-4.webp" alt="User avatar" />
            <img src="./assets/img/avatar-5.webp" alt="User avatar" />
          </div>
          <p>
            12,000+ lorem ipsum dolor sit amet consectetur adipiscing elit
          </p>
        </div>
      </div>
    </div>
    <div class="FeaturesBunners">
      <div class="box">
        <div class="icon">
          <i class="fa-solid fa-trophy"></i>
        </div>
        <div class="text">
          <h3>3x Won Awards</h3>
          <p>Vestibulum ante ipsum</p>
        </div>
      </div>
      <div class="box">
        <div class="icon"><i class="fa-solid fa-briefcase"></i></div>
        <div class="text">
          <h3>6.5k Faucibus</h3>
          <p>Nullam quis ante</p>
        </div>
      </div>
      <div class="box">
        <div class="icon">
          <i class="fa-solid fa-chart-line"></i>
        </div>
        <div class="text">
          <h3>80k Mauris</h3>
          <p>Etiam sit amet orci</p>
        </div>
      </div>
      <div class="box">
        <div class="icon">
          <i class="fa-solid fa-certificate"></i>
        </div>
        <div class="text">
          <h3>6x Phasellus</h3>
          <p>Vestibulum ante ipsum</p>
        </div>
      </div>
    </div>
  </section>
  <!-- About Scetion -->
  <section id="about" class="about">
    <div class="container">
      <div class="content">
        <span class="subtitle">MORE ABOUT US</span>
        <h2>Voluptas enim suscipit temporibus</h2>
        <p class="description">
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
          quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
          explicabo.
        </p>
        <div id="features" class="features">
          <ul class="left-features">
            <li><i class="fas fa-check-circle"></i>Lorem ipsum dolor sit amet</li>
            <li><i class="fas fa-check-circle"></i>Consectetur adipiscing elit</li>
            <li><i class="fas fa-check-circle"></i>Sed do eiusmod tempor</li>
          </ul>
          <ul class="right-features">
            <li><i class="fas fa-check-circle"></i>Incididunt ut labore et</li>
            <li><i class="fas fa-check-circle"></i>Dolore magna aliqua</li>
            <li><i class="fas fa-check-circle"></i>Ut enim ad minim veniam</li>
          </ul>
        </div>
        <div class="contact-info">
          <div class="ceo">
            <img src="./assets/img/about-5.webp" alt="Mario Smith - CEO">
            <div class="ceo-details">
              <h3>Mario Smith</h3>
              <span>CEO & Founder</span>
            </div>
          </div>
          <div class="phone">
            <div class="icon">
              <i class="fa-solid fa-phone"></i>
            </div>
            <div class="text">
              <p>Call us anytime</p>
              <a href="tel:+123456789">+123 456-789</a>
            </div>

          </div>
        </div>
      </div>
      <div class="image-wrapper">
        <div class="main-image">
          <img src="./assets/img/about-5.webp" alt="Office workspace">
        </div>
        <div class="inImage">
          <img width="300" src="./assets/img/about-2.webp" alt="Mario Smith - CEO">
        </div>
        <div class="experience-badge">
          <h3>15+</h3>
          <p>Years</p>
          <span>Of experience in business service</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Featers -->


  <section class="Features">
    <div class="features-section">
      <h2>Features</h2>
      <div class="underline"></div>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem reiciendis nihil ex!</p>

      <div class="tabs-container">
        <ul>
          <li class="tab active" data-content="modisit">Modisit</li>
          <li class="tab" data-content="praesenti">Praesenti</li>
          <li class="tab" data-content="explica">Explica</li>
        </ul>
      </div>

      <div class="content modisit active">
        <div class="text-section">
          <h1>Voluptatem dignissimos provident</h1>
          <div class="underline"></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
          <ul>
            <li><span class="checkmark">✔</span> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><span class="checkmark">✔</span> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><span class="checkmark">✔</span> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
              irure dolor in reprehenderit in voluptate tridenta storacalaperda mastiro dolore eu fugiat nulla pariatur.
            </li>
          </ul>
        </div>


        <div class="illustration-section">
          <img src="./assets/img/features-img-2.png" alt="Illustration">
        </div>
      </div>
      <div class="content praesenti">
        <div class="text-section">
          <h1>Neque exercitationem debitis</h1>
          <div class="underline"></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
          <ul>
            <li><span class="checkmark">✔</span> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><span class="checkmark">✔</span> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><span class="checkmark">✔</span> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
              irure dolor in reprehenderit in voluptate tridenta storacalaperda mastiro dolore eu fugiat nulla pariatur.
            </li>
          </ul>
        </div>

        <div class="illustration-section">
          <img src="./assets/img/features-img-1.png" alt="Illustration">
        </div>
      </div>
      <div class="content explica">
        <div class="text-section">
          <h1>Voluptatibus commodi accusamu</h1>
          <div class="underline"></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
          <ul>
            <li><span class="checkmark">✔</span> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><span class="checkmark">✔</span> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><span class="checkmark">✔</span> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
              irure dolor in reprehenderit in voluptate tridenta storacalaperda mastiro dolore eu fugiat nulla pariatur.
            </li>
          </ul>
        </div>


        <div class="illustration-section">
          <img src="./assets/img/features-img-2.png" alt="Illustration">
        </div>
      </div>
    </div>

    <!-- ========Cards========= -->
    <div class="card-container">
      <div class="card" style="background-color: #FFF5E8;">
        <div class="icon" style="color: #F4A261;"><i class="fas fa-award"></i></div>
        <h3>Corporis voluptates</h3>
        <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
      </div>

      <div class="card" style="background-color: #E8F4FF;">
        <div class="icon" style="color: #007BFF;"><i class="fas fa-check-circle"></i></div>
        <h3>Explicabo consectetur</h3>
        <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
      </div>


      <div class="card" style="background-color: #E8FFF1;">
        <div class="icon" style="color: #2ECC71;"><i class="fas fa-seedling"></i></div>
        <h3>Ullamco laboris</h3>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
      </div>

      <div class="card" style="background-color: #FFE8E8;">
        <div class="icon" style="color: #FF6B6B;"><i class="fas fa-shield-alt"></i></div>
        <h3>Labore consequatur</h3>
        <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
      </div>
    </div>

  </section>







  <!-- Featers -->

  <!-- phoneMockup -->
  <section class="phoneMockup">
    <div class="container">
      <div class="text-left">
        <div class="box">
          <div class="icon">
            <i class="fa-solid fa-desktop"></i>
          </div>
          <div class="text">
            <h3>Use On Any Device</h3>
            <p>Vestibulum
              ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac
              dui quis mi consectetuer lacinia.</p>
          </div>
        </div>
        <div class="box">
          <div class="icon">
            <i class="fa-solid fa-feather"></i>
          </div>
          <div class="text">
            <h3>Feather Icons</h3>
            <p>Vestibulum
              ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac
              dui quis mi consectetuer lacinia.</p>
          </div>
        </div>
        <div class="box">
          <div class="icon">
            <i class="fa-solid fa-eye"></i>
          </div>
          <div class="text">
            <h3>Retina Ready
            </h3>
            <p>Vestibulum
              ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac
              dui quis mi consectetuer lacinia.</p>
          </div>
        </div>



      </div>
      <div class="mockup">
        <img src="./assets/img/phone-app-screen.webp" alt="">
      </div>
      <div class="text-right">
        <div class="box">
          <div class="icon">
            <i class="fa-solid fa-desktop"></i>
          </div>
          <div class="text">
            <h3>Use On Any Device</h3>
            <p>Vestibulum
              ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac
              dui quis mi consectetuer lacinia.</p>
          </div>
        </div>
        <div class="box">
          <div class="icon">
            <i class="fa-solid fa-feather"></i>
          </div>
          <div class="text">
            <h3>Feather Icons</h3>
            <p>Vestibulum
              ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac
              dui quis mi consectetuer lacinia.</p>
          </div>
        </div>
        <div class="box">
          <div class="icon">
            <i class="fa-solid fa-eye"></i>
          </div>
          <div class="text">
            <h3>Retina Ready
            </h3>
            <p>Vestibulum
              ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac
              dui quis mi consectetuer lacinia.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Massage -->
  <section class="massage">
    <h2>Maecenas tempus tellus eget <br> condimentum</h2>
    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
      sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <button>Call To Action</button>
  </section>

  <!-- Slider -->
  <div class="slider">


    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="./assets/img/c1.png" alt="Logo 1"></div>
        <div class="swiper-slide"><img src="./assets/img/c2.png" alt="Logo 2"></div>
        <div class="swiper-slide"><img src="./assets/img/c3.png" alt="Logo 3"></div>
        <div class="swiper-slide"><img src="./assets/img/c4.png" alt="Logo 4"></div>
        <div class="swiper-slide"><img src="./assets/img/c8.png" alt="Logo 5"></div>
        <div class="swiper-slide"><img src="./assets/img/c6.png" alt="Logo 6"></div>
        <div class="swiper-slide"><img src="./assets/img/c7.png" alt="Logo 7"></div>
        <div class="swiper-slide"><img src="./assets/img/c8.png" alt="Logo 7"></div>
      </div>

    </div>
  </div>

  <!-- Test -->




  <section class="Testimonials-section">
    <div class="Testimonials-title">
      <h2>Testimonials</h2>
      <div class="underline"></div>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem reiciendis nihil ex!</p>
    </div>

    <div class="testimonials-cards">
      <div class="testimonial-card">
        <div class="card-header">
          <img src="assets/img/testimonials-1.png" alt="Saul Goodman" class="profile-img">
          <div>
            <h3>Saul Goodman</h3>
            <p>Ceo & Founder</p>
            <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div>
          </div>
        </div>
        <p class="testimonial-text">
          <i class="fa-solid fa-quote-left"></i>
          Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam,
          ultricies eget id, aliquam eget nibh et. Maecen aliquam.
          <i class="fa-solid fa-quote-right"></i>
        </p>
      </div>

      <div class="testimonial-card">
        <div class="card-header">
          <img src="assets/img/testimonials-1.png" alt="Saul Goodman" class="profile-img">
          <div>
            <h3>Saul Goodman</h3>
            <p>Ceo & Founder</p>
            <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div>
          </div>
        </div>
        <p class="testimonial-text">
          <i class="fa-solid fa-quote-left"></i>
          Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam,
          ultricies eget id, aliquam eget nibh et. Maecen aliquam.
          <i class="fa-solid fa-quote-right"></i>
        </p>
      </div>

      <div class="testimonial-card">
        <div class="card-header">
          <img src="assets/img/testimonials-1.png" alt="Saul Goodman" class="profile-img">
          <div>
            <h3>Saul Goodman</h3>
            <p>Ceo & Founder</p>
            <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div>
          </div>
        </div>
        <p class="testimonial-text">
          <i class="fa-solid fa-quote-left"></i>
          Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam,
          ultricies eget id, aliquam eget nibh et. Maecen aliquam.
          <i class="fa-solid fa-quote-right"></i>
        </p>
      </div>


      <div class="testimonial-card">
        <div class="card-header">
          <img src="assets/img/testimonials-1.png" alt="Saul Goodman" class="profile-img">
          <div>
            <h3>Saul Goodman</h3>
            <p>Ceo & Founder</p>
            <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div>
          </div>
        </div>
        <p class="testimonial-text">
          <i class="fa-solid fa-quote-left"></i>
          Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam,
          ultricies eget id, aliquam eget nibh et. Maecen aliquam.
          <i class="fa-solid fa-quote-right"></i>
        </p>
      </div>



    </div>

  </section>




  <!-- Stauts -->
  <section class="stats">
    <div class="stat-item">
      <h3 class="stat-number">232</h3>
      <hr class="stat-line">
      <p class="stat-label">Clients</p>
    </div>
    <div class="stat-item">
      <h3 class="stat-number">521</h3>
      <hr class="stat-line">
      <p class="stat-label">Projects</p>
    </div>
    <div class="stat-item">
      <h3 class="stat-number">1453</h3>
      <hr class="stat-line">
      <p class="stat-label">Hours Of Support</p>
    </div>
    <div class="stat-item">
      <h3 class="stat-number">32</h3>
      <hr class="stat-line">
      <p class="stat-label">Workers</p>
    </div>
  </section>

  <!-- Services -->

  <section id="services" class="services">
    <h2 class="services-title">Services</h2>
    <div class="underline"></div>
    <p class="services-description">
      Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit
    </p>
    <div class="services-grid">
      <div class="service-card">
        <div class="icon-wrapper">
          <i class="fa-solid fa-chart-line"></i>
        </div>
        <div class="servers-text">
          <h3 class="service-title">
            Nesciunt Mete</h3>
          <p class="service-description">
            Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos
            earum corrupti.
          </p>
          <a href="#" class="read-more">Read More →</a>
        </div>

      </div>
      <div class="service-card">
        <div class="icon-wrapper">
          <i class="fa-solid fa-desktop"></i>
        </div>
        <div class="servers-text">
          <h3 class="service-title">
            Eosle Commodi</h3>
          <p class="service-description">
            Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos
            earum corrupti.
          </p>
          <a href="#" class="read-more">Read More →</a>
        </div>

      </div>
      <div class="service-card">
        <div class="icon-wrapper">
          <i class="fa-solid fa-hexagon-nodes"></i>
        </div>
        <div class="servers-text">
          <h3 class="service-title">
            Ledo Markt</h3>
          <p class="service-description">
            Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos
            earum corrupti.
          </p>
          <a href="#" class="read-more">Read More →</a>
        </div>

      </div>
      <div class="service-card">
        <div class="icon-wrapper">
          <i class="fa-regular fa-calendar-days"></i>
        </div>
        <div class="servers-text">
          <h3 class="service-title">
            Asperiores Commodit</h3>
          <p class="service-description">
            Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos
            earum corrupti.
          </p>
          <a href="#" class="read-more">Read More →</a>
        </div>

      </div>
    </div>
  </section>

  <!-- Pricing -->

  <section id="pricing" class="pricing">

    <div class="section-title">
      <h2>Pricing</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>


    <div class="pricing-card-container">


      <div class="pricing-card">
        <h3>Basic Plan</h3>
        <div class="price">
          <span class="currency">$</span>
          <span class="amount">9.9</span>
          <span class="period">/ month</span>
        </div>
        <p class="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
          laudantium totam.</p>

        <h4>Featured Included:</h4>
        <ul class="features-list">
          <li>
            <i class="fa-regular fa-circle-check"></i>
            Duis aute irure dolor
          </li>
          <li>
            <i class="fa-regular fa-circle-check"></i>
            Excepteur sint occaecat
          </li>
          <li>
            <i class="fa-regular fa-circle-check"></i>
            Nemo enim ipsam voluptatem
          </li>
        </ul>

        <a href="#" class="btn btn-primary">
          Buy Now
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>

      <!-- Standard Plan -->
      <div class="pricing-card popular">
        <div class="popular-badge">Most Popular</div>
        <h3>Standard Plan</h3>
        <div class="price">
          <span class="currency">$</span>
          <span class="amount">19.9</span>
          <span class="period">/ month</span>
        </div>
        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
          voluptatum.</p>

        <h4>Featured Included:</h4>
        <ul class="features-list">
          <li>
            <i class="fa-solid fa-circle-check" style="color: #ffffff;"></i>
            Lorem ipsum dolor sit amet
          </li>
          <li>
            <i class="fa-solid fa-circle-check" style="color: #ffffff;"></i>
            Consectetur adipiscing elit
          </li>
          <li>
            <i class="fa-solid fa-circle-check" style="color: #ffffff;"></i>
            Sed do eiusmod tempor
          </li>
          <li>
            <i class="fa-solid fa-circle-check" style="color: #ffffff;"></i>
            Ut labore et dolore magna
          </li>
        </ul>

        <a href="#" class="btn btn-light">
          Buy Now
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>

      <!-- Premium Plan -->
      <div class="pricing-card">
        <h3>Premium Plan</h3>
        <div class="price">
          <span class="currency">$</span>
          <span class="amount">39.9</span>
          <span class="period">/ month</span>
        </div>
        <p class="description">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
          molestiae.</p>

        <h4>Featured Included:</h4>
        <ul class="features-list">
          <li>
            <i class="fa-regular fa-circle-check"></i>
            Temporibus autem quibusdam
          </li>
          <li>
            <i class="fa-regular fa-circle-check"></i>
            Saepe eveniet ut et voluptates
          </li>
          <li>
            <i class="fa-regular fa-circle-check"></i>
            Nam libero tempore soluta
          </li>
          <li>
            <i class="fa-regular fa-circle-check"></i>
            Cumque nihil impedit quo
          </li>
          <li>
            <i class="fa-regular fa-circle-check"></i>
            Maxime placeat facere possimus
          </li>
        </ul>

        <a href="#" class="btn btn-primary">
          Buy Now
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>

    </div>


  </section>

  <!-- Massage -->
  <section class="massage2">
    <h2>Call To Action</h2>
    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
      sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <button>Call To Action</button>
  </section>

  <!-- Contact -->
  <section id="contact" class="contact-section">
    <h2 class="contact-title">Contact Us</h2>
    <div class="underline"></div>
    <p class="contact-description">
      Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit
    </p>
    <div class="container">
      <div class="contact-info">
        <h2>Contact Info</h2>
        <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.</p>
        <div class="info-item">
          <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
          <div>
            <h4>Our Location</h4>
            <p>A108 Adam Street<br>New York, NY 535022</p>
          </div>
        </div>
        <div class="info-item">
          <span class="icon"><i class="fa-solid fa-phone"></i></span>
          <div>
            <h4>Phone Number</h4>
            <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
          </div>
        </div>
        <div class="info-item">
          <span class="icon"><i class="fa-solid fa-message"></i></span>
          <div>
            <h4>Email Address</h4>
            <p>info@example.com<br>contact@example.com</p>
          </div>
        </div>
      </div>
      <div class="contact-form">
        <h2>Get In Touch</h2>
        <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.</p>
        <form>
          <div class="form-group">
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
          </div>
          <input type="text" placeholder="Subject" required>
          <textarea placeholder="Message" required></textarea>
          <button type="submit">Send Message</button>
        </form>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-top">
        <div class="footer-item">
          <strong><a href="">iLanding</a></strong>
          <div class="footer con">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p>New York, NY 535022</p>
            <p>New York, NY 535022</p>
          </div>
          <div class="footer-soc">
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="footer-item">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Terms of service</a></li>
            <li><a href="">Privacy policy</a></li>
          </ul>
        </div>
        <div class="footer-item">
          <h4>Our Services</h4>
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Terms of service</a></li>
            <li><a href="">Privacy policy</a></li>
          </ul>
        </div>
        <div class="footer-item">
          <h4>Hic solutasetp</h4>
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Terms of service</a></li>
            <li><a href="">Privacy policy</a></li>
          </ul>
        </div>
        <div class="footer-item">
          <h4>Nobis illum</h4>
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Terms of service</a></li>
            <li><a href="">Privacy policy</a></li>
          </ul>
        </div>
      </div>
      <hr>
      <div class="copyri">
        <div class="copy-card">
          <span>© Copyright</span>
          <strong>iLanding</strong>
          <span>All Rights Reserved</span>
        </div>
        <div class="copy-card">
          <span>Designed By</span>
          <a href="">Xrow</a>
          <span>Distributed By</span>
          <a href="">ThemeWagon</a>
        </div>
      </div>
    </div>
  </footer>



  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="./js/main.js"></script>

  </script>
</body>

</html>