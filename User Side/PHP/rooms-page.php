<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Rooms Page - Hotel Paradise - by shaikhsaad256@gmail.com</title>

   <link rel="shortcut icon" href="../../Assets/Common/Vectors/Logo.svg" type="image/x-icon">
   <link rel="stylesheet" href="../CSS/rooms-page.css">

</head>

<body>

   <section id="header">
      <section id="nav">
         <nav>

            <div id="navLogo">
               <img src="../../Assets/Common/Vectors/Logo.svg" alt="">
            </div>

            <div id="navPages">
               <a href="#Home">Home</a>
               <a href="rooms-page.php">Rooms</a>
               <a href="event-page.php">Events</a>
               <a href="about-page.php">About</a>
               <a href="contact-page.php">Contact</a>
            </div>

            <div id="navAuth">
               <a href="../../login-page.php">Login</a>
               <a href="../../signup-page.php">Sign-up</a>
               <a href="../../logout-page.php">Logout</a>
            </div>

            <div id="navBurger">
               <img src="../../Assets/User Side/Vectors/navBurger.svg" alt="">
            </div>

         </nav>
      </section>

      <section id="Home">
         <div id="homeBox"></div>
         <div id="homeContent">
            <div id="homeLorem">Luxurious Rooms</div>
            <div id="homeTagline">Hotel Rooms</div>
         </div>
      </section>
   </section>

   <section id="Rooms">
      <div id="roomTitle">Our Rooms
         <hr>
      </div>

      <div id="roomGrid">

         <a href="reservation-page.php" class="roomCard">
            <div class="roomImage"> <img src="../../Assets/User Side/Images/roomImg-1.jpg" alt="Room Image"> </div>
            <div class="cardContent">
               <div class="cardTitle">Standard Room</div>
               <div class="cardPrice">$350.00 / per night</div>
            </div>
         </a>

         <a href="reservation-page.php" class="roomCard">
            <div class="roomImage"> <img src="../../Assets/User Side/Images/roomImg-2.jpg" alt="Room Image"> </div>
            <div class="cardContent">
               <div class="cardTitle">Family Room</div>
               <div class="cardPrice">$400.00 / per night</div>
            </div>
         </a>

         <a href="reservation-page.php" class="roomCard">
            <div class="roomImage"> <img src="../../Assets/User Side/Images/roomImg-3.jpg" alt="Room Image"> </div>
            <div class="cardContent">
               <div class="cardTitle">Single Room</div>
               <div class="cardPrice">$255.00 / per night</div>
            </div>
         </a>

         <a href="reservation-page.php" class="roomCard">
            <div class="roomImage"> <img src="../../Assets/User Side/Images/roomImg-1.jpg" alt="Room Image"> </div>
            <div class="cardContent">
               <div class="cardTitle">Deluxe Room</div>
               <div class="cardPrice">$150.00 / per night</div>
            </div>
         </a>

         <a href="reservation-page.php" class="roomCard">
            <div class="roomImage">
               <img src="../../Assets/User Side/Images/roomImg-2.jpg" alt="Room Image">
            </div>
            <div class="cardContent">
               <div class="cardTitle">Luxury Room</div>
               <div class="cardPrice">$200.00 / per night</div>
            </div>
         </a>

         <a href="reservation-page.php" class="roomCard">
            <div class="roomImage"> <img src="../../Assets/User Side/Images/roomImg-3.jpg" alt="Room Image"> </div>
            <div class="cardContent">
               <div class="cardTitle">Single Room</div>
               <div class="cardPrice">$155.00 / per night</div>
            </div>
         </a>

      </div>

   </section>

   <section id="Pages">
      <div class="pageNumber">&lt;</div>
      <div class="pageNumber">1</div>
      <div class="pageNumber">2</div>
      <div class="pageNumber">3</div>
      <div class="pageNumber">4</div>
      <div class="pageNumber">&gt;</div>
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
            <div class="footerLinks"><a href="#Home">Home</a></div>
            <div class="footerLinks"><a href="about-page.php">About</a></div>
            <div class="footerLinks"><a href="rooms-page.php">Rooms</a></div>
            <div class="footerLinks"><a href="event-page.php">Event</a></div>
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

   <script src="../JS/landing-page.js"></script>
</body>

</html>