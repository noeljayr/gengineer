<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Girl Engineer - Donation</title>

    <link rel="stylesheet" href="/css/index.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link
      rel="shortcut icon"
      href="/public/logos/favicon.png"
      type="image/x-icon"
    />
    <script defer src="/js/index.js"></script>
    <!-- <script defer src="/js/menu.js"></script> -->
  </head>
  <body>
    <div class="navbar section">
      <a href="/" class="logo">
        <img src="public/logos/navbar-logo.png" alt="" />
      </a>

      <!-- <span class="links">
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
      </span> -->
    </div>

    <div class="main-content page-section donation-section">
      <div class="banner">
        <!-- <img src="public/images/Donate Image.jpg" alt=""> -->

        <h1>
          Thank you for joining us in closing the gender gap in STEM fields of
          study and careers.
        </h1>
      </div>
    </div>

    <div class="donation-container">
      <div id="form-1" class="form donation-active">
        <div class="type-container">
          <span class="selected-type">One-time</span>
          <span>Monthly</span>
          <input
            id="type-input"
            value="One-time"
            hidden
            name="type"
            type="text"
          />
        </div>
        <label style="margin-bottom: 0.5rem" for=""
          >Choose a
          <span style="font-weight: bold" class="type-label">One-time</span>
          amount</label
        >
        <div id="monthly" class="amount-picker">
          <span class="amount">$10</span>
          <span class="amount">$25</span>
          <span class="amount">$50</span>
          <span class="amount">$100</span>
        </div>

        <div id="one-time" class="amount-picker active-amounts">
          <span class="amount">$50</span>
          <span class="amount">$100</span>
          <span class="amount">$150</span>
          <span class="amount">$500</span>
        </div>

        <div class="input-group amount-content">
          <span>$</span>
          <input
            required
            type="text"
            placeholder="Other"
            name="amount"
            id="donation-amount"
            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
          />
        </div>

        <input hidden id="selected-amount" type="text" />
        <span class="error-text">Please select an amount</span>
        <div onclick="nextForm()" class="cta">DONATE</div>

        <div class="card-icons">
          <p>Secure payments by</p>
          <div>
            <span>
              <img src="public/icons/visa.jpg" alt="" />
            </span>
            <span>
              <img src="public/icons/mastercard.jpg" alt="" />
            </span>
            <span>
              <img src="public/icons/dci.jpg" alt="" />
            </span>
            <span>
              <img src="public/icons/americanexpress.jpg" alt="" />
            </span>
          </div>
        </div>
      </div>

      <form id="form-2" action="" class="form">
        <div class="input-info">
          <p style="font-weight: bold">
            You are giving a <span id="d-type"></span> donation of
            <span>$<span id="d-amount"></span></span>
          </p>
        </div>
        <div class="input-group">
          <label for="">Full Name</label>
          <input
            oninput="this.value = this.value.replace(/[0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
            type="text"
            name="full name"
          />
        </div>

        <div class="input-group">
          <label for="">Email</label>
          <input name="email" type="email" />
        </div>
         <p>Your receipt will be emailed here.</p>
        <div class="input-group">
          <label for="">Phone Number</label>
          <input
            oninput="this.value = this.value.replace(/[^0-9+]/g, '').replace(/(\+.*)\+.*/g, '$1');"
            type="text"
            name="phone"
          />
        </div>

        <input hidden name="amount" type="text" id="final-amount" />
        <input hidden name="type" type="text" id="final-type" />

     

        <div class="btn-container">
          <span onclick="prevForm()" class="discard-btn btn">
            <i class="bi bi-chevron-left"></i> Back</span
          >
          <button class="cta btn">DONATE</button>
        </div>

        <div class="card-icons">
          <p>Secure payments by</p>
          <div>
            <span>
              <img src="public/icons/visa.jpg" alt="" />
            </span>
            <span>
              <img src="public/icons/mastercard.jpg" alt="" />
            </span>
            <span>
              <img src="public/icons/dci.jpg" alt="" />
            </span>
            <span>
              <img src="public/icons/americanexpress.jpg" alt="" />
            </span>
          </div>
        </div>
      </form>
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
    <script>
      const typeTabs = document.querySelectorAll(".type-container span");
      const typeInput = document.querySelector("#type-input");
      const typeLabel = document.querySelector(".type-label");
      const oneTime = document.querySelector("#one-time");
      const monthly = document.querySelector("#monthly");

      typeTabs.forEach((tab) => {
        tab.addEventListener("click", () => {
          typeTabs.forEach((t) => {
            t.classList.remove("selected-type");
          });
          tab.classList.add("selected-type");
          var typeValue = tab.textContent.trim();
          typeInput.value = typeValue;

          typeLabel.textContent = typeValue;
          if (typeValue == "Monthly") {
            oneTime.classList.remove("active-amounts");
            monthly.classList.add("active-amounts");
          } else {
            monthly.classList.remove("active-amounts");
            oneTime.classList.add("active-amounts");
          }
        });
      });

      const selectedAmount = document.getElementById("selected-amount");
      selectedAmount.value = "";
      const amounts = document.querySelectorAll(".amount");
      const amountInput = document.querySelector("#donation-amount");
      amounts.forEach((a) => {
        a.addEventListener("click", () => {
          amountInput.value = "";
          removeSelected();
          a.classList.add("amount-selected");
          var stringWithDollar = a.textContent.trim();

          var amount = parseFloat(stringWithDollar.replace(/[^\d.]/g, ""));

          selectedAmount.value = amount;
        });
      });

      function removeSelected() {
        amounts.forEach((a) => {
          a.classList.remove("amount-selected");
        });
      }

      function removeSelected() {
        amounts.forEach((a) => {
          a.classList.remove("amount-selected");
        });
      }

      amountInput.addEventListener("input", () => {
        removeSelected();
        selectedAmount.value = amountInput.value;
      });

      // const triggerForm = document.querySelector(".donation-container .cta");

      // triggerForm.addEventListener("click", () => {});

      const input = document.getElementById("donation-amount");

      const form1 = document.getElementById("form-1");
      const form2 = document.getElementById("form-2");

      const errorText = document.querySelector(".error-text");

      function nextForm() {
        const amount = document.getElementById("donation-amount").value;
        const type = document.querySelector("#type-input").value;

        const finalType = document.getElementById("final-type");
        const finalAmount = document.getElementById("final-amount");
        const infoType = document.getElementById("d-type");
        const infoAmount = document.getElementById("d-amount");

        finalAmount.value = selectedAmount.value;
        infoAmount.textContent = selectedAmount.value;

        finalType.value = type;
        infoType.textContent = type;

        if (finalAmount.value.length > 0) {
          errorText.style.display = "none";
          form1.classList.remove("donation-active");
          form2.classList.add("donation-active");
        } else {
          errorText.style.display = "flex";
        }
      }

      function prevForm() {
        form1.classList.add("donation-active");
        form2.classList.remove("donation-active");
      }
    </script>
  </body>
</html>
