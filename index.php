<?php
require_once ('API/connect.php');

$query = "SELECT * FROM status"; // Use the correct column name

$result = mysqli_query($con, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($con));
}
$count =mysqli_num_rows($result) ;

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if (isset($row['state'])) {
        $status = $row['state'];
        $name = $row['name'];

    } else {
        // Handle case where 'status_column' key is not found
        $status = "NO";
    }
} else {
    // Handle case where no rows are returned or more than one row is returned
    $status = "NO";
}


mysqli_free_result($result);
mysqli_close($con);
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Lover'S</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <nav>
        <h1><i class="fa-solid fa-plane" style="color: orangered;"></i> Travel <span style="color: orangered">LoverS</span></h1>

        <ul>
          <li class="h"><a id="hhh" href="">Home</a></li>
          <li class="h"><a href="">About</a></li>
          <li class="h"><a href="">Learn</a></li>
          <li class="h"><a href="">Menu</a></li>
          <?php
if($status == "YES"){
    echo '<div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Profile</button>
            <div id="myDropdown" class="dropdown-content">
              <a href="#">'.$row['name'].'</a>
              <a href="Update-info.php?email='.$row['email'].'">Edit</a>
              <a href="API/logout.php">LogOut</a>
            </div>
          </div>';
}
else{
    echo '<a class="login-btn" href="login.php">Login</a>';
}
?>


          
        </ul>
      </nav>
      <!-- header main start -->
      <div class="header-main">
        <div class="textbox">
          <h1>Explore Your Travel</h1>
          <p class="common">
            Explore Your Travel, Let each destination be a chapter, crafting a
            tale of wanderlust, discovery, and cherished moments
          </p>
        </div>
        <!-- form -->
        <form action="" class="fom">
          <input type="text" placeholder="Where Go" />

          <select name="" id="">
            <option value="">Time</option>
            <option value="">Winter</option>
            <option value="">Summer</option>
            <option value="">Fall</option>
          </select>

          <select name="" id="">
            <option value="">Select Package</option>
            <option value="">Platinum</option>
            <option value="">Premium</option>
            <option value="">Gold</option>
          </select>

          <button>
            <i class="fa-solid fa-magnifying-glass"></i>
            <span style="margin-left: 5px">Search</span>
          </button>
        </form>
      </div>
    </header>
    <!-- header end -->
    <main>
 <!--Registration and Login Form-->






      <div class="popular">
        <div class="text">
          <h1>Our Popular Tours</h1>
          <div class="wi">
            <p class="commonn">
              Explore beyond the ordinary with our acclaimed plan, where each
              itinerary is a masterpiece, and each day is a canvas waiting for
              your unique brushstroke of adventure. Discover the allure of our
              popular plan, a curated journey that transcends expectations,
              blending comfort, excitement, and cultural immersion. Your dream
              vacation begins with us.
            </p>
            <!--  -->
            <ul>
              <li class="commonn">
                Immerse yourself in our captivating tour plans, where every
                destination is a chapter of wonder.
              </li>
              <li class="commonn">
                From scenic landscapes to cultural gems, our tour plans promise
                an enriching journey filled with cherished memories.
              </li>
              <li class="commonn">
                Indulge in seamless travel experiences. Our tour plans redefine
                exploration, offering a perfect blend of leisure and adventure.
              </li>
            </ul>
            <p class="commonn kk">
              Join the ranks of delighted adventurers who've experienced our
              popular plan—a seamless blend of luxury, discovery, and
              authenticity. Your extraordinary voyage is just a click away. Join
              the ranks of delighted adventurers who've experienced our popular
              plan—a seamless blend of luxury, discovery, and authenticity. Your
              extraordinary voyage is just a click away. Crafting moments, not
              just vacations. Explore our tour plans for a perfect blend of
              relaxation and excitement.
            </p>
            <button>Read More</button>
          </div>
        </div>
        <div class="pic">
          <img src="./Images/Rectangle 4.png" alt="" />
        </div>
      </div>
      <!-- end polupar par -->
      <div class="topp">
        <h2>Choose Your Destination</h2>
        <p class="commonn" style="margin-top: 20px;">
          "Discover breathtaking landscapes, vibrant cultures, and unforgettable experiences. Choose your destination, create lasting memories, and embark on an extraordinary journey of a lifetime
        </p>
      </div>
      <div class="main-imgs">
            <div class="box" id="box1">
                <img src="./Images/Rectangle 7.png" alt="">
                <h1>Nepal</h1>
            </div>

            <div class="box" id="box2">
                <img src="./Images/Rectangle 6.png" alt="">
                <h1>Srilanka</h1>
            </div>

            <div class="box" id="box3">
                <img src="./Images/Rectangle 5.png" alt="">
                <h1>Maldives</h1>
            </div>

            <div class="box" id="box4">
                <img src="./Images/Rectangle 8.png" alt="">
                <h1>Indonesia</h1>
            </div>

            <div class="box" id="box5">
                <img src="./Images/Rectangle 9.png" alt="">
                <h1>Kashmir</h1>
            </div>

            <div class="box" id="box6">
                <img src="./Images/Rectangle 10.png" alt="">
                <h1>Bandorban</h1>
            </div>

            <div class="box" id="box7">
                <img src="./Images/Rectangle 11.png" alt="">
                <h1>Bangladesh</h1>
            </div>
        </div>
       

         <div class="area-p">
          <div class="ar">
            <h1>Most Popular Area Pack</h1>
            <p class="commonn" style="margin-top: 20px;">Adventure awaits in the heart of the most popular destinations. Pack your dreams and explore bliss.</p>
          </div>
         </div>

         <div class="ar-card">
          <div class="one">
            <img src="./Images/pic1.webp" alt="">
            <h1>New York</h1>
            <p class="commonn">The city that never sleeps. Skyscrapers kiss the sky, while dreams find their Broadway spotlight in New York.</p>
            <button>Check This Out</button>
          </div>
          <div class="one">
            <img src="./Images/pic4.jpeg" alt="">
            <h1>Ifel Tower</h1>
            <p class="commonn">The city that never sleeps. Skyscrapers kiss the sky, while dreams find their Broadway spotlight in New York.</p>
            <button>Check This Out</button>
          </div>
          <div class="one">
            <img src="./Images/pic3.jpg" alt="">
            <h1>Rome</h1>
            <p class="commonn">The city that never sleeps. Skyscrapers kiss the sky, while dreams find their Broadway spotlight in New York.</p>
            <button>Check This Out</button>
          </div>
         </div>


         <div class="deals">
          <div class="head">
            <h1>Deals & Discounts</h1>
            <p class="commonn" style="margin-top: 20px;">Unlock savings, embrace value. Explore exclusive deals and discounts for an affordable journey of indulgence.</p>
          </div>

          <div class="back">
            <div class="back-box">
              <div class="w">

                <div class="po">
                  <i class="fa-regular fa-clock"></i>7 / 10 Days
                </div>

                <div class="po">
                  <div class="po">
                    <i class="fa-regular fa-user"></i>Max 10
                  </div>

                </div>
                
                <div class="po">
                  <i class="fa-solid fa-location-dot"></i>Malaysia
                </div>

              </div>
              <div class="all">
                <h1>Tour To Satorini</h1>
                <p class="commonn" style="margin-top: 25px;">Santorini's charm beckons. White-washed beauty, azure seas—a journey like no other</p>

                <h4 style="color: orangered; margin-top: 30px;">Price: $1300-$1500</h4>
                <button>Book Now</button>

              </div>
            </div>

          </div>


          <div class="back op1">
            <div class="back-box1">
              <div class="x">

                <div class="po1">
                  <i class="fa-regular fa-clock"></i>7 / 10 Days
                </div>

                <div class="po1">
                  <div class="po1">
                    <i class="fa-regular fa-user"></i>Max 10
                  </div>

                </div>
                
                <div class="po1">
                  <i class="fa-solid fa-location-dot"></i>Malaysia
                </div>

              </div>
              <div class="all">
                <h1>Tour To Satorini</h1>
                <p class="commonn" style="margin-top: 25px;">Santorini's charm beckons. White-washed beauty, azure seas—a journey like no other</p>

                <h4 style="color: orangered; margin-top: 30px;">Price: $1300-$1500</h4>
                <button>Book Now</button>

              </div>
            </div>

          </div>


          <div class="back">
            <div class="back-box">
              <div class="w">

                <div class="po">
                  <i class="fa-regular fa-clock"></i>7 / 10 Days
                </div>

                <div class="po">
                  <div class="po">
                    <i class="fa-regular fa-user"></i>Max 10
                  </div>

                </div>
                
                <div class="po">
                  <i class="fa-solid fa-location-dot"></i>Malaysia
                </div>

              </div>
              <div class="all">
                <h1>Tour To Satorini</h1>
                <p class="commonn" style="margin-top: 25px;">Santorini's charm beckons. White-washed beauty, azure seas—a journey like no other</p>

                <h4 style="color: orangered; margin-top: 30px;">Price: $1300-$1500</h4>
                <button>Book Now</button>

              </div>
            </div>

          </div>


         </div>


      <div class="us">
        <div class="text-us">
          <h1>Why Choose Us</h1>
          <p class="commonn" style="margin-top: 20px">
            Embark on memorable journeys with us. Expert guides, curated
            experiences, and unmatched service—your perfect travel companion.
            Discover why choose us!
          </p>
        </div>
        <div class="card">
          <div class="card1">
            <img src="./Images/hotel 1.png" alt="" />

            <h4>Handpicked Hotels</h4>
            <p class="commonn">
              Exquisite accommodations curated for comfort, style, and
              unparalleled guest experiences. Handpicked hotels await
            </p>
          </div>

          <div class="card2">
            <img src="./Images/map 1.png" alt="" />

            <h4>World Class Service</h4>
            <p class="commonn">
              Exceptional service redefines your journey. Experience luxury,
              comfort, and excellence.
            </p>
          </div>
        </div>

        <div class="card3">
          <img src="./Images/price-tag 1.png" alt="" />

          <h4>Best Price Guarantee</h4>
          <p class="commonn">
            Exceptional service redefines your journey. Experience luxury,
            comfort, and excellence.
          </p>
        </div>
      </div>



      <div class="simple">
       <div class="simple-l">
        <h1>A Simple Perfect Place To Get Lost</h1>
        <p class="commonn">Lose yourself in the beauty of simplicity; our haven beckons as a simple perfect place to get lost</p>
        <ul>
          <li>Immerse yourself in moments of pure bliss as you explore our space—a simple perfect place to get lost and find inner peace.</li>
          <li>Lose yourself in the calming embrace of our haven, a simple perfect place to escape and rejuvenate.</li>
        </ul>
        <button>See More</button>
       </div>

       <div class="simple-r"><iframe aria-controls="" style="border-radius: 18px;" width="560" height="390" src="https://www.youtube.com/embed/Cn4G2lZ_g2I?si=PuQsBPGxhxPERsnv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

       </div>
      </div>
    
     
     
      
    </main>
    <footer>
        <div class="foot">
           <div class="booxx">
            <h1><i class="fa-solid fa-plane" style="color: orangered;"></i> Travel LoverS</h1>
            <p class="commonn">Dive into boundless horizons! Unearth travel inspirations, exclusive tips, and embark on extraordinary journeys from our footer. Bon voyage!</p>

            <div class="icons">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-github"></i>
           </div>
           <br>
           <hr>
           <br>
           <h6 class="commonn">2024, All Rights Reserved.</h6>

            </div>
        </div>
    </footer>

    <script src="drop.js"></script>
  </body>
</html>
