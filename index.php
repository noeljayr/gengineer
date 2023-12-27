<?php
require 'includes/loadPartners.php';
// require 'includes/loadProjects.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<title>Girl Engineer - Home</title>-->
    <title>Girl Engineer - Empowering Girls in STEM Education</title>
        <!-- Add your meta description -->
    <meta name="description" content="Girl Engineer is a Malawi-based non-profit organization dedicated to empowering young girls through STEM education. Join us in inspiring the next generation of female leaders in STEM.">

    <!-- Add your meta keywords -->
    <meta name="keywords" content="Girls in STEM Education, STEM Outreach Workshops, Empowering Young Girls in STEM, Hands-On STEM Learning, STEM Awareness Campaigns, STEM Role Models Program, STEM Tours and Applications, STEM Sponsorship for Girls, Inclusive STEM Education, Malawi STEM Initiatives, Gender Gap in STEM, Inspiring Girls in Science, STEM Impact on Society, Female Leaders in STEM, Innovative STEM Education, Malawi Non-Profit for STEM, Equality in STEM Opportunities, Building Confidence in STEM, Collaborative STEM Programs, Holistic Benefits of Early STEM Engagement">

   


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
            <a href="partners">Partner With Us</a>
            <a href="sponsors">Sponsor Us</a>
            <a href="be-volunteer">Volunteer</a>
          </span>
        </span>
        <a class="navlink" href="tutorials">tutorials</a>
        <a class="navlink" href="news">NEWS</a>
        <span class="navlink dropdown-link" href="">
          <span class="title">
            ABOUT US
            <i class="bi bi-chevron-down"></i>
          </span>

          <span class="dropdown-menu">
            <a href="team">Our Team</a>
            <a href="volunteers">Our Volunteers</a>
            <a href="about us">About Us</a>
          </span>
        </span>
        <a class="cta nav-cta" href="donate">Donate</a>

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
        <a class="" href="/">HOME</a>
        <span class="submenu-link" href="">
          <span class="title">
            Get involved
            <i class="bi bi-chevron-down"></i>
          </span>

          <span class="sub-menu">
            <a href="partners">Partner With Us</a>
            <a href="sponsors">Sponsor Us</a>
            <a href="be-volunteer">Volunteer</a>
          </span>
        </span>
        <a class="" href="tutorials">tutorials</a>
        <a class="" href="news">NEWS</a>

        <span class="submenu-link" href="">
          <span class="title">
            ABOUT US
            <i class="bi bi-chevron-down"></i>
          </span>

          <span class="sub-menu">
            <a href="team">Our Team</a>
            <a href="volunteers">Our Volunteers</a>
            <a href="about us">About Us</a>
          </span>
        </span>
      </span>
    </div>

    <div class="hero-section">
      <img id = "banner-image"
        loading="lazy"
        src="public/images/HomePage Banner Image.jpg"
        alt="girl"
        class="project-img"
      />
      <div class="hero-text">
        <h1>
          We are creating a world where every girl has the opportunity to reach
          her full potential in Science, Technology, Engineering, and
          Mathematics (STEM) fields  
        </h1>  

        <a href="donate" class="cta">DONATE</a>
      </div>

      <div class="social-proof">
        <div class="proof">
          <span class="counter">5</span>
          <span>Workshops Delivered </span>
        </div>
        <div class="proof">
          <span class="counter">1</span>
          <span>Schools Reached</span>
        </div>
        <div class="proof">
          <span class="counter">5</span>
          <span>Girls Impacted</span>
        </div>
        <div class="proof">
          <span class="counter">9</span>
          <span>Current Volunteers</span>
        </div>
      </div>
    </div>

    <div class="main-content section">
      <h1 id="first-heading" class="section-heading">
        <span class="outline"></span>
        <span>Our Programs</span>
        <span class="outline"></span>
      </h1>

      <div class="program-container">
        <a href="stem workshops" class="program">
          <img
            loading="lazy"
            src="public/images/programs/STEM Workshop.jpg"
            alt="STEM Workshops"
            class="program-img"
          />
          <div class="overlay">
            <span class="project-name">STEM Workshops</span>
            <span class="program-link read-more"
              >Read more</span
            >
          </div>
        </a>
        
        <a href="stem tours"  class="program">
          <img
            loading="lazy"
            src="public/images/programs/STEM Tour.jpg"
            alt="STEM Tour"
            class="program-img"
          />
          <div class="overlay">
            <span class="project-name">STEM Tours</span>
            <span class="program-link read-more"
              >Read more</span
            >
          </div>
        </a>
        
        <a href="stem role models" class="program">
          <img
            loading="lazy"
            src="public/images/programs/STEM Role Models.jpg"
            alt="STEM Role Models"
            class="program-img"
          />
          <div class="overlay">
            <span class="project-name">STEM Role Models</span>
            <span class="program-link read-more"
              >Read more</span
            >
          </div>
        </a>
        
        <a href="stem awareness" class="program">
          <img
            loading="lazy"
            src="public/images/programs/STEM Awareness.jpg"
            alt="STEM Awareness"
            class="program-img"
          />
          <div class="overlay">
            <span class="project-name">STEM Awareness</span>
            <span class="program-link read-more"
              >Read more</span
            >
          </div>
        </a>
        <a href="stem sponsorship" class="program">
          <img
            src="public/images/programs/STEM Sponsorship.jpg"
            alt="STEM Sponsorship"
            class="program-img"
          />
          <div class="overlay">
            <span class="project-name">STEM Sponsorship</span>
            <span  class="program-link read-more"
              >Read more</span
            >
          </div>
        </a>

        <div class="program">
          <img
            src="public/images/programs/All Our Programs.jpg"
            alt="All Our Programs"
            class="program-img"
          />
        </div>
      </div>

      <h1 class="section-heading">
        <span class="outline"></span>
        <span>Our STEM Workshops</span>
        <span class="outline"></span>
      </h1>

      <div class="swiper-container workshop-swipper">
        <div class="swiper-wrapper">
          <div class="swiper-slide workshop-container">
            <a href = "stop motion animation" class="workshop">
              <img
                loading="lazy"
                src="public/images/workshop/Stop Motion Animation.jpg"
                alt="Stop Motion Animation"
                class="workshop-img"
              />
              <div class="overlay">
                <span class="workshop-name"> Stop Motion Animation </span>
                <span
                  
                  class="workshop-link read-more"
                  >Read more</span
                >
              </div>
            </a>
            <a  href="renewable energy" class="workshop">
              <img
                loading="lazy"
                src="public/images/workshop/Renewable Energy.jpg"
                alt="Renewable Energy"
                class="workshop-img"
              />
              <div class="overlay">
                <span class="workshop-name">Renewable Energy</span>
                <span class="workshop-link read-more"
                  >Read more</span
                >
              </div>
            </a>
            <a href="structural engineering" class="workshop">
              <img
                loading="lazy"
                src="public/images/workshop/Structural Engineering.jpg"
                alt="Structural Engineering"
                class="workshop-img"
              />
              <div class="overlay">
                <span class="workshop-name">Structural Engineering</span>
                <span
                  
                  class="workshop-link read-more"
                  >Read more</span
                >
              </div>
            </a>
          </div>
          <div class="swiper-slide workshop-container">
            <a href="electricity" class="workshop">
              <img
                loading="lazy"
                src="public/images/workshop/Electricity and Magnetism.jpg"
                alt="Electricity and Magnetism"
                class="workshop-img"
              />
              <div class="overlay">
                <span class="workshop-name"> Electricity and Magnetism </span>
                <span class="workshop-link read-more"
                  >Read more</span
                >
              </div>
            </a>
            <a href="coding" class="workshop">
              <img
                loading="lazy"
                src="public/images/workshop/Introduction to Coding.jpg"
                alt="Introduction to Coding"
                class="workshop-img"
              />
              <div class="overlay">
                <span class="workshop-name">Introduction to Coding</span>
                <span  class="workshop-link read-more"
                  >Read more</span
                >
              </div>
            </a>
            <a href="electric propeller car" class="workshop">
              <img
                loading="lazy"
                src="public/images/workshop/Electric Propeller Car.jpg"
                alt="Electric Propeller Car"
                class="workshop-img"
              />
              <div class="overlay">
                <span class="workshop-name">Electric Propeller Car</span>
                <span
                  
                  class="workshop-link read-more"
                  >Read more</span
                >
              </div>
            </a>
          </div>
        </div>

        <div class="pagination">
          <span class="prev-btn control-btn workshop-prev">
            <i class="bi bi-chevron-left"></i>
          </span>

          <div class="swiper-pagination workshop-pagination"></div>

          <span class="next-btn control-btn workshop-next">
            <i class="bi bi-chevron-right"></i>
          </span>
        </div>
      </div>



          <div id="upcoming-projects"></div>





      <h1 class="section-heading">
        <span class="outline"></span>
        <span>Our Mobile STEM Lab</span>
        <span class="outline"></span>
      </h1>

      <a href="stem lab" class="stem-lab">
        <img
          loading="lazy"
          src="public/images/Our Mobile STEM Lab Image.jpg"
          alt="Mobile STEM Lab"
          class="stem-lab-img"
        />
        <div class="overlay">
          <span class="stem-lab-link read-more">Read more</span>
        </div>
      </a>



            <?php 

              if ( $partnersResult != null )
              {
                echo '
                <h1 style="margin-bottom: 0;" class="section-heading">
                <span class="outline"></span>
                <span>Our Partners and Sponsors</span>
                <span class="outline"></span>
              </h1>
                
                <div class="swiper-container sponsor-swipper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide sponsor-container">

                ';
                for ( $i = 0; $i < count( $partnersResult ); $i  ++ )
                {
                  echo '
                  <div class="sponsor">
                  <img
                    loading="lazy"
                    src="public/images/partners/'.$partnersResult[$i]['picture'].'"
                    alt="Become Our Sponsor"
                    class="sponsor-img"
                  />
                </div> 
                  
                  ';
                }

                echo '
                </div>
 
                </div>
        
                <div style="display: none" class="pagination">
                  <span class="prev-btn control-btn">
                    <i class="bi bi-chevron-left"></i>
                  </span>
        
                  <div class="swiper-pagination"></div>
        
                  <span class="next-btn control-btn">
                    <i class="bi bi-chevron-right"></i>
                  </span>
                </div>
                ';
                
              }
            ?>



      </div>
    </div>

    <div class="footer section">
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
          <form class="" action="admin/includes/createEmail.php" method =  "post">
            <div class="input-group">
              <input type="email" name =  "email_address" placeholder="Your Email" />
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
          <a href="donate" class="cta footer-cta">DONATE</a>
        </div>
      </div>
      <div class="bottom">
        <span>© 2023 Girl Engineer</span> |
        <a href="privacy policy">Privacy Policy</a>
        |
        <a href="terms and conditions"> Terms and Conditions </a>
      </div>
    </div>

    <script src="js/swiper-bundle.min.js"></script>

    <script>
     
        function projects(){
          var xhr = new XMLHttpRequest();
          xhr.open("POST", "includes/loadProjects.php", true); 
          xhr.onreadystatechange = function () {
              if (xhr.readyState === 4 && xhr.status === 200) {
                  // console.log(xhr.responseText);
                  var image  =  xhr.responseText;
                  console.log(image);

                  var obj2  = JSON.parse(image);
                  console.log(obj2);
                 

                if (image)
                {
                   
                    
                    
                  const upcoming =  document.getElementById('upcoming-projects');
          upcoming.innerHTML = `
          <h1 id="upcoming-heading" class="section-heading">
            <span class="outline"></span>
            <span>Upcoming Projects</span>
            <span class="outline"></span>
          </h1>
            


            <div class="upcoming">
                    <a href="upcoming">
                    
                    <img
                      loading="lazy"
                      src="public/images/${obj2.picture}"
                      alt="Upcoming Projects"
                      class="upcoming-img"
                    />
                <span class="overlay">
                  <h2 style = "text-transform: uppercase;">${obj2.title}</h2>
                  <p>
                    Through this project, we aim to provide girls in our community with
                    an opportunity to learn and create Stop motion animation videos
                    while developing skills in technology, creativity, and teamwork.
                  </p>
                  <span class="stem-lab-link read-more">Read more</span>
                </span>
                    
                    </a>
              </div>

            `;
                }

              } 
          };
          
          xhr.send();
        }
        projects();

    </script>

    <script>
        

          
 
     
       </script>


    <script>
      function initializeSwipper(container) {
        var pagination = container.querySelector(".swiper-pagination ");
        var next = container.querySelector(".next-btn");
        var prev = container.querySelector(".prev-btn");

        var swiper = new Swiper(container, {
          slidesPerView: 1,
          spaceBetween: 10,
          pagination: {
            el: pagination,
            clickable: true,
            renderBullet: function (index, className) {
              return (
                '<span class="' + className + '">' + (index + 1) + "</span>"
              );
            },
          },
          navigation: {
            nextEl: next,
            prevEl: prev,
          },
        });
      }

      const wcontainer = document.querySelector(".workshop-swipper");
      const scontainer = document.querySelector(".sponsor-swipper");

      initializeSwipper(wcontainer);
     

      if(scontainer){
        initializeSwipper(scontainer);
      }
    </script>
  </body>
</html>
