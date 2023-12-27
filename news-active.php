<?php
//   include 'includes/loadNews2.php';
require 'admin/classes/news/dbh.php';
require 'admin/classes/news/news.php';
require 'admin/classes/news/view.php';

    $newObj = new View();
    $newsResult = $newObj->showNewsById( $_GET['news']);

    if( $newsResult == 'query failed'  )
    {
        echo 'operation  failed';
        exit();
    }

    $swiperResults = $newObj->allActiveNews();
    if( $swiperResults == 'query failed'  )
    {
        echo 'operation  failed';
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Girl Engineer - News</title>

    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link
      rel="shortcut icon"
      href="public/logos/favicon.png"
      type="image/x-icon"
    />
    <script defer src="js/index.js"></script>
    <script defer src="js/menu.js"></script>
  </head>
  <body>
    <div class="navbar section">
      <a href="/" class="logo">
        <img src="public/logos/navbar-logo.png" alt="" />
      </a>
      <span class="links">
        <a class="navlink" href="/">Home</a>
        <span class="navlink dropdown-link" href="">
          <span class="title">
            Get involved
            <i class="bi bi-chevron-down"></i>
          </span>

          <span class="dropdown-menu">
            <a href="partners ">Partner With Us</a>
            <a href="sponsors ">Sponsor Us</a>
            <a href="be-volunteer ">Volunteer</a>
          </span>
        </span>
        <a class="navlink" href="tutorials ">tutorials</a>
        <a class="navlink" href="news ">NEWS</a>
        <span class="navlink dropdown-link" href="">
          <span class="title">
            ABOUT US
            <i class="bi bi-chevron-down"></i>
          </span>

          <span class="dropdown-menu">
            <a href="team ">Our Team</a>
            <a href="volunteers ">Our Volunteers</a>
            <a href="about us ">About Us</a>
          </span>
        </span>
        <a class="cta nav-cta" href="donate ">Donate</a>

        <span class="mobile-menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </span>
      </span>

      <span class="menu-list">
          <span class="close-btn">
          <i class="bi bi-x-lg"></i>
        </span>
        <a class="" href="index ">HOME</a>
        <span class="submenu-link" href="">
          <span class="title">
            Get involved
            <i class="bi bi-chevron-down"></i>
          </span>

          <span class="sub-menu">
            <a href="partners ">Partner With Us</a>
            <a href="sponsors ">Sponsor Us</a>
            <a href="be-volunteer ">Volunteer</a>
          </span>
        </span>
        <a class="" href="tutorials ">tutorials</a>
        <a class="" href="news ">NEWS</a>

        <span class="submenu-link" href="">
          <span class="title">
            ABOUT US
            <i class="bi bi-chevron-down"></i>
          </span>

          <span class="sub-menu">
            <a href="team ">Our Team</a>
            <a href="volunteers ">Our Volunteers</a>
            <a href="about us ">About Us</a>
          </span>
        </span>
      </span>
    </div>
    <div class="page-title">
      <h1>News</h1>
    </div>
    <div style="min-height: 100vh" class="main-content page-section">
      <div class="active-news">
        <img
          src="public/images/news/<?php echo $newsResult['picture']; ?>"
          alt=""
          class="news-active-img"
        />
        <h2 class="news-title">
          <?php echo $newsResult['title']; ?>
        </h2>
        <p class="news-content">
        <?php echo $newsResult['content']; ?>

        </p>
      </div>

      <h1 class="section-heading">
        <span class="outline"></span>
        <span>More News</span>
        <span class="outline"></span>
      </h1>

      <div class="more-news-wrapper">
        <div class="swiper-wrapper">
          
        </div>

        <div class="pagination">
          <span class="prev-btn control-btn">
            <i class="bi bi-chevron-left"></i>
          </span>
          <span class="next-btn control-btn">
            <i class="bi bi-chevron-right"></i>
          </span>
        </div>
      </div>
    </div>

    <div style="margin-top: auto" class="footer section">
      <div class="top">
        <img
          src="public/logos/footer-logo.png"
          alt="logo"
          class="footer-logo"
        />
        <div class="footer-section first-section">
          <h2>Contact</h2>
          <a
            href="mailto:info@gengineer.org"
            target="_blank"
            rel="noopener noreferrer"
          >
            <i class="bi bi-envelope"></i>
            <span>info@gengineer.org</span>
          </a>
          <a href="tel:+265995680135" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-telephone"></i>
            <span> +265 995 68 01 35</span>
          </a>
        </div>

        <div class="footer-section">
          <h2>SIGN UP FOR NEWSLETTER</h2>
          <form class="" action="">
            <div class="input-group">
              <input type="email" placeholder="Your Email" />
            </div>
            <button class="cta">Sign Up</button>
          </form>
        </div>

        <div class="footer-section">
          <span class="contact-links">
            <a
              href="https://www.facebook.com/girlengineer7"
              target="_blank"
              rel="noopener noreferrer"
            >
              <img loading="eager" src="public/icons/Facebook.png" alt="icon" />
            </a>
            <a
              href="https://www.linkedin.com/company/girl-engineer"
              target="_blank"
              rel="noopener noreferrer"
            >
              <img loading="eager" src="public/icons/LinkedIn.png" alt="icon" />
            </a>
            <a
              href="https://www.youtube.com/@girlengineer"
              target="_blank"
              rel="noopener noreferrer"
            >
              <img loading="eager" src="public/icons/YouTube.png" alt="icon" />
            </a>
            <a
              href="https://www.instagram.com/girlengineermw"
              target="_blank"
              rel="noopener noreferrer"
            >
              <img
                loading="eager"
                src="public/icons/Instagram.png"
                alt="icon"
              />
            </a>
          </span>
          <a href="donate " class="cta footer-cta">DONATE</a>
        </div>
      </div>
      <div class="bottom">
        <span>© 2023 Girl Engineer</span> |
        <a href="privacy policy ">Privacy Policy</a>
        |
        <a href="terms and conditions "> Terms and Conditions </a>
      </div>
    </div>

    <script src="js/swiper-bundle.min.js"></script>
    <?php
        echo "
          <script>
                var newsOjects = [];
                var obj ;
          </script>
        ";
        for ( $i  = 0 ; $i < count($swiperResults); $i ++ )
        { 
          if ( $swiperResults[$i]['news_id'] != $_GET['news']){
            echo   "
            <script>
            
            obj = {
              id:   '".$swiperResults[$i]['news_id']  ."',
              title:  '".$swiperResults[$i]['title']  ."'  ,
              img:  '".$swiperResults[$i]['picture']  ." ' ,
            };    
            
            newsOjects.push( obj );
            
            </script>
            ";
          }
        }
      ?>
    <script>


      // Function to create a div element for an object
      function createDivForObject(object) {
        const news = document.createElement("a");
        news.className = "news";
        news.id = object.id;
        news.href = `news-active?news=${object.id}`
        news.innerHTML = `

          <img
            loading="lazy"
            src="public/images/news/${object.img}"
            alt="${object.title}"
            class="news-img"
          />
          <span class="bottom">
            <h2 class="news-title">
              ${object.title}
            </h2>
            <span class="read-more">Read more</span>

          </span>
      
       
       `;
        return news;
      }

      // Function to create a container div for a group of three divs
      function createSlides(newsOjects) {
        const containerDiv = document.createElement("div");
        containerDiv.classList.add("swiper-slide");
        containerDiv.classList.add("more-news-container");

        newsOjects.forEach((object) => {
          const div = createDivForObject(object);
          containerDiv.appendChild(div);
        });

        return containerDiv;
      }

      // Function to group newsOjects into sets of three and create container divs
      function displayNews(newsOjects) {
        const container = document.querySelector(".swiper-wrapper");

        while (newsOjects.length > 0) {
          const group = newsOjects.splice(0, 3);
          const containerDiv = createSlides(group);
          container.appendChild(containerDiv);
        }
      }

     
      if(newsOjects.length > 0){
        displayNews(newsOjects);
        var swiper = new Swiper(".more-news-wrapper", {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
          nextEl: ".next-btn",
          prevEl: ".prev-btn",
        },
      });
      }

      
    </script>
  </body>
</html>
