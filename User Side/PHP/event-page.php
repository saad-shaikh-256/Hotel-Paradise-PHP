<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Events Page - Hotel Paradise - by shaikhsaad256@gmail.com</title>

   <link rel="shortcut icon" href="../../Assets/Common/Vectors/Logo.svg" type="image/x-icon">
   <link rel="stylesheet" href="../CSS/event-page.css">

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
               <a href="#Events">Events</a>
               <a href="about-page.php">About</a>
               <a href="contact-page.php">Contact</a>
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
            <div id="homeLorem">Read Our</div>
            <div id="homeTagline">Blogs & Events</div>
         </div>
      </section>
   </section>

   <section id="Events">
      <div id="eventsTitle">Upcoming Events
         <hr>
      </div>
      <div id="eventsGrid">
         <div class="eventsCard">
            <div class="eventsImg">
               <img src="../../Assets/User Side/Images/roomImg-1.jpg" alt="">
            </div>
            <div class="eventsContent">
               <div class="eventsHeading">Lorem ipsum dolor sit amet.</div>
               <span class="subHeading">Nov 03rd, 2024 • By Saad Shaikh
               </span>
            </div>
            <div class="eventsLorem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel eius ad ratione. Eum numquam quas consequuntur soluta ipsum nisi.</div>
         </div>

         <div class="eventsCard">
            <div class="eventsImg">
               <img src="../../Assets/User Side/Images/roomImg-2.jpg" alt="">
            </div>
            <div class="eventsContent">
               <div class="eventsHeading">Lorem ipsum dolor sit amet.</div>
               <span class="subHeading">Nov 03rd, 2024 • By Saad Shaikh
               </span>
            </div>
            <div class="eventsLorem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel eius ad ratione. Eum numquam quas consequuntur soluta ipsum nisi.</div>
         </div>

         <div class="eventsCard">
            <div class="eventsImg">
               <img src="../../Assets/User Side/Images/roomImg-3.jpg" alt="">
            </div>
            <div class="eventsContent">
               <div class="eventsHeading">Lorem ipsum dolor sit amet.</div>
               <span class="subHeading">Nov 03rd, 2024 • By Saad Shaikh
               </span>
            </div>
            <div class="eventsLorem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel eius ad ratione. Eum numquam quas consequuntur soluta ipsum nisi.</div>
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
            <div class="footerLinks"><a href="#Events">Event</a></div>
            <div class="footerLinks"><a href="contact-page.php">Contact</a></div>
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

   <script src="../JS/event-page.js"></script>
</body>

</html>