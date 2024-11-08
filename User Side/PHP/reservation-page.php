<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Reservation Page - Hotel Paradise - by shaikhsaad256@gmail.com</title>

   <link rel="shortcut icon" href="../../Assets/Common/Vectors/Logo.svg" type="image/x-icon">
   <link rel="stylesheet" href="../CSS/reservation-page.css">

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
               <a href="events-page.php">Events</a>
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

         <div id="backBTN">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#111111" fill="none">
               <path d="M20.0001 11.9998L4.00012 11.9998" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
               <path d="M15.0003 17C15.0003 17 20.0002 13.3176 20.0002 12C20.0002 10.6824 15.0002 7 15.0002 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Back
         </div>

         <div id="homeHeading">
            Deluxe Room
         </div>

         <div id="imageAndBooking">

            <div id="image"></div>

            <div id="booking">

               <form action="">
                  <div class="Inputs">
                     <div>
                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter Full Name" value="Saad Shaikh" required>
                     </div>

                     <div>
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Enter Email Address" value="shaikhsaad256@gmail.com" required>
                     </div>

                     <div>
                        <label for="phone">Phone</label>
                        <input type="tel" name="phone" id="phone" placeholder="Enter Phone Number" value="8200060000" required>
                     </div>

                     <div>
                        <label for="no_person">No of Person's</label>
                        <select name="no_person" id="no_person" required>
                           <option value="" selected hidden>No of Person's</option>
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                           <option>7</option>
                           <option>8</option>
                           <option>9</option>
                           <option>10</option>
                        </select>
                     </div>

                     <div>
                        <label for="checkIn">Check in</label>
                        <input type="date" name="checkIn" id="checkIn" required>
                     </div>

                     <div>
                        <label for="checkOut">Check Out</label>
                        <input type="date" name="checkOut" id="checkOut" required>
                     </div>
                  </div>

                  <div id="pricing"><span>Pricing per night</span> <span>$120/night</span> </div>

                  <div id="pricing"><span>Total price</span> <span>$120/night</span> </div>

                  <button type="submit">Reserve Now</button>
               </form>

            </div>

         </div>

         <div id="aboutRoom">
            <div id="aboutHeading">About Room</div>
            <div id="aboutLorem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident sed commodi nobis libero illum labore id error autem fugiat quisquam asperiores, sunt quis odio, perferendis laboriosam culpa facere amet totam corrupti maxime temporibus numquam obcaecati? Corrupti suscipit natus consequuntur quam? Voluptatem, alias veniam in obcaecati dolore mollitia dignissimos nisi a?</div>
         </div>
      </section>
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

   <script src="../JS/reservation-page.js"></script>
</body>

</html>