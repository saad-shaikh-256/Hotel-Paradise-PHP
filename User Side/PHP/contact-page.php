<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Page - Hotel Paradise - by shaikhsaad256@gmail.com</title>

   <link rel="shortcut icon" href="../../Assets/Common/Vectors/Logo.svg" type="image/x-icon">
   <link rel="stylesheet" href="../CSS/contact-page.css">

</head>

<body>

   <section id="header">
      <section id="nav">
         <nav>

            <div id="navLogo">
               <img src="../../Assets/Common/Vectors/Logo.svg" alt="">
            </div>

            <div id="navPages">
               <a href="landing-page.php">Home</a>
               <a href="rooms-page.php">Rooms</a>
               <a href="event-page.php">Events</a>
               <a href="about-page.php">About</a>
               <a href="#Contact">Contact</a>
            </div>

            <div id="navAuth">
               <a href="../../Login Signup/PHP/login-page.php">Login</a>
               <a href="../../Login Signup/PHP/signup-page.php">Sign-up</a>
               <a href="../../Login Signup/PHP/logout-page.php">Logout</a>
            </div>

            <div id="navBurger">
               <img src="../../Assets/User Side/Vectors/navBurger.svg" alt="">
            </div>

         </nav>
      </section>

      <section id="Home">
         <div id="homeBox"></div>
         <div id="homeContent">
            <div id="homeLorem">Chat With Us</div>
            <div id="homeTagline">Get In Touch</div>
         </div>
      </section>
   </section>

   <section id="Contact">

      <div id="contactRight">
         <form action="">
            <div>
               <label for="name">Full Name</label>
               <input type="text" id="name" name="name" required placeholder="Full Name" value="Saad Shaikh">
            </div>
            <div>
               <label for="email">Email</label>
               <input type="email" id="email" name="email" required placeholder="Email Address" value="shaikhsaad256@gmail.com">
            </div>
            <div>
               <label for="phone">Phone</label>
               <input type="tel" id="phone" name="phone" required placeholder="Phone Number" value="8200060000">
            </div>
            <div>
               <label for="message">Message</label>
               <textarea name="message" id="message" placeholder="Say hello to us">Hello Admin</textarea>
            </div>
            <button type="submit">Send Message</button>
         </form>
      </div>

      <div id="contactLeft">
         <div id="contactHeading">Contact Info</div>

         <div id="contactAddress">
            <div id="addressHeading">Address</div>
            <div id="addressLorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, amet?</div>
         </div>

         <div id="contactPhone">
            <div id="phoneHeading">Phone</div>
            <div id="phoneLorem">+91 82000 60000</div>
         </div>

         <div id="contactEmail">
            <div id="emailHeading">Email Address</div>
            <div id="emailLorem">shaikhsaad256@gmail.com</div>
         </div>

      </div>
   </section>

   <section id="Footer">
      <div class="footerContent">
         <div class="footerHeading">About</div>
         <div class="footerLorem">

            <div class="footerLinks">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quos rem ullam, placeat amet.</div>
         </div>
      </div>
      <div class="footerContent">
         <div class="footerHeading">Quick Menu</div>
         <div class="footerLorem">
            <div class="footerLinks"><a href="landing-page.php">Home</a></div>
            <div class="footerLinks"><a href="about-page.php">About</a></div>
            <div class="footerLinks"><a href="rooms-page.php">Rooms</a></div>
            <div class="footerLinks"><a href="event-page.php">Event</a></div>
            <div class="footerLinks"><a href="#Contact">Contact</a></div>
         </div>
      </div>
      <div class="footerContent">
         <div class="footerHeading">Lorem ipsum</div>
         <div class="footerLorem">
            <div class="footerLinks">lorem</div>
            <div class="footerLinks">lorem</div>
            <div class="footerLinks">lorem</div>
            <div class="footerLinks">lorem</div>
         </div>
      </div>
      <div class="footerContent">
         <div class="footerHeading">Lorem ipsum</div>
         <div class="footerLorem">
            <div class="footerLinks">lorem</div>
            <div class="footerLinks">lorem</div>
            <div class="footerLinks">lorem</div>
            <div class="footerLinks">lorem</div>
         </div>
      </div>
   </section>

   <section id="Copyright">
      <span class="center">
         Copyright &copy; <span id="year"></span> <a href="https://github.com/saad-shaikh-256" target="_blank"> &nbsp;@Saad Shaikh</a>
      </span>
   </section>

   <script>
      document.getElementById('year').textContent = new Date().getFullYear();
   </script>

   <script src="../JS/contact-page.js"></script>
</body>

</html>