<?php
// include ('includes/loadTeam.php');
require 'admin/classes/people/dbh.php';
require 'admin/classes/people/user.php';
require 'admin/classes/people/view.php';

    $userObj  = new View();

    $teamResults =  $userObj->showUserByRole( 'team member');

    if (  $teamResults == 'query failed' )
    {
        echo 'error retreiving data';
        exit;
    }  

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Girl Engineer - Our Team</title>

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
    
        <style>
        body{
            min-height: 100vh;
        }
        
        .main-content{
            padding-bottom: 6rem;
        }
        
        .footer{
            margin-top: auto;
        }
    </style>
    
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
        <a class="" href="/">HOME</a>
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
      <h1>Our Team</h1>
    </div>
    <div class="main-content page-section">
      <h2 style=" text-align: center; color: var(--black); font-size: var(--font-m);">
        Meet our Team
      </h2>

      <div class="team-container"></div>
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
          <a href="mailto:info@gengineer.org" target="_blank" rel="noopener noreferrer">
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
            <a href="https://www.facebook.com/girlengineer7" target="_blank" rel="noopener noreferrer">
              <img loading="eager" src="public/icons/Facebook.png" alt="icon" />
            </a>
            <a href="https://www.linkedin.com/company/girl-engineer" target="_blank" rel="noopener noreferrer">
              <img loading="eager" src="public/icons/LinkedIn.png" alt="icon" />
            </a>
            <a href="https://www.youtube.com/@girlengineer" target="_blank" rel="noopener noreferrer">
              <img loading="eager" src="public/icons/YouTube.png" alt="icon" />
            </a>
            <a href="https://www.instagram.com/girlengineermw" target="_blank" rel="noopener noreferrer">
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
        <a href="terms and conditions ">
          Terms and Conditions
        </a>
      </div> 
    </div>
    <?php
        echo "
          <script>
                var members = [];
                var obj ;
          </script>
        ";
        for ( $i  = 0 ; $i <  count( $teamResults ); $i ++ )
        {
          echo   "
          <script>
          
          obj = {
            name:  '".$teamResults[$i]['name']  ."'  ,
            position:  '".$teamResults[$i]['position']  ." ',
            image:  '".$teamResults[$i]['picture']  ." '
          };    
          
          members.push( obj );
          
          </script>
          ";
        }
      ?>
      <script>

        var teamContainer = document.querySelector(".team-container")
        function displayMembers (){
          
          members.forEach((m)=>{
            var member = document.createElement("div");
            member.className ="member";

          member.innerHTML = 
          `
          <div class="member-img">
            <img
              loading="lazy"
              src="public/images/team/`+m.image+`"
              alt="`+m.name+`"
            />
          </div>
          <div class="member-info">
            <h2 class="name">`+m.name+`</h2>
            <span class="position">`+m.position+`</span>
          </div>

          `
          teamContainer.appendChild(member);
          })
          
        }

        displayMembers ();
      </script>
  </body>
</html>
