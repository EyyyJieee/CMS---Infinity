<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/cd7057928f.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JCIZ Goals</title>
  </head>
<body>
  <header>
  <nav>
    <div class="navbar" id="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo"><a href="index.php"><img src="assets/img/LOGO-Edited2.png" class="header_logo" alt="JCI logo"></a></div>
      <div class="nav-links">
        <ul class="links">
            <li><a href="index.php" class="active">HOME</a></li>
            <li><a href="goals.html">GOALS</a></li>
          <li><a href="about-us.html">ABOUT US</a></li>
          <li>
            <a href="fund_project.html">TAKE ACTION</a>
            <i class='bx bxs-chevron-down js-arrow arrow '></i>
            <ul class="js-sub-menu sub-menu">
              <li><a href="fund_project.html">Fund A Program</a></li>
              <li><a href="volunteer.html">Volunteer</a></li>
              <li><a href="partner.html">Partner with Us</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <video width="100%" height="auto" autoplay muted>
    <source src="assets/video/intro1.mp4" type="video/mp4">
  Your browser does not support the video tag.
  </video>
</header>

<!---------------------------------------------------- GOALS ---------------------------------->
  <div class="main-goals"><img src="assets/img/JCI-UNSDG.png" alt="sdg-logo"></div>
  <div class="goals">
      <div class="row">
         <div class="goals-col"><img src="assets/img/UNSDG01.png"></div>
         <div class="goals-col"><img src="assets/img/UNSDG02.png"></div>
         <div class="goals-col"><img src="assets/img/UNSDG03.png"></div>
         <div class="goals-col"><img src="assets/img/UNSDG04.png"></div>
      </div>
     <div class="row">
          <div class="goals-col"><img src="assets/img/UNSDG05.png"></div>
          <div class="goals-col"><img src="assets/img/UNSDG06.png"></div>
          <div class="goals-col"><img src="assets/img/UNSDG07.webp"></div>
          <div class="goals-col"><img src="assets/img/UNSDG08.png"></div>
     </div>
     <a href="" class="hero-btn">FIND OUT MORE</a>
  </section>
</div>
<!----------------------------------------------------ABOUT US ---------------------------------->
<img src="assets/img/who-we-are1.png" class="who-we-are">
  <section class="about-us" id="about-us">
    
      <div class="slideshow-container">
        <div class="mySlides fade">
          <div class="numbertext">1 / 5</div>
          <img src="assets/img/post6.jpg">
        </div>
        <div class="mySlides fade">
          <div class="numbertext">2 / 5</div>
          <img src="assets/img/about-us.jpg">
        </div>
        <div class="mySlides fade">
          <div class="numbertext">3 / 5</div>
          <img src="assets/img/us.jpg">
        </div>
        <div class="mySlides fade">
          <div class="numbertext">4 / 5</div>
          <img src="assets/img/about-4.JPG">
        </div>
        <div class="mySlides fade">
          <div class="numbertext">5 / 5</div>
          <img src="assets/img/about-5.JPG">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>

      <script>
      var slideIndex = 1;
      showSlides(slideIndex);
      
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }
      
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
      
      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slides[slideIndex-1].style.display = "block";  
      }
      </script>
  </section>
<!---------------------------------------------------- Latest Post ---------------------------------->
<div class="latest-post">
  <div class="title-post">
    <p>Check out the latest events, news and announcements here!</p>
  </div>
  <div class="all-content">
    <div class="post-content">
      <h3 class="header-text1">Latest Post</h3>

      <div id="posts">

      </div>
      <!-- <div class="card">
        <div class="column-image">
            <img src="assets/img/post1.jpg" alt="">
        </div>
        <div class="card-content">
            <p class="date">December 02, 2021</p>
            <p class="title-head">A DAY FOR ALL</p>
            <p class="read">Today, we celebrate a day every person who has seen challenges as opportunities to grow and foster positivity. JCI Zamboanga is with you as we celebrate the International Day of Persons with Disabilities! May this day be
                a reminder that we must not need a special ocassion to treat everyone the same way we treat ourselves.
                <br>#InternationalDayOfPersonsWithDisabilities</p>
        </div>
      </div>
      <div class="card">
        <div class="column-image">
            <img src="assets/img/post1.jpg" alt="">
        </div>
        <div class="card-content">
            <p class="date">December 02, 2021</p>
            <p class="title-head">A DAY FOR ALL</p>
            <p class="read">Today, we celebrate a day every person who has seen challenges as opportunities to grow and foster positivity. JCI Zamboanga is with you as we celebrate the International Day of Persons with Disabilities! May this day be
                a reminder that we must not need a special ocassion to treat everyone the same way we treat ourselves.
                <br>#InternationalDayOfPersonsWithDisabilities</p>
        </div>
      </div>
      <div class="card">
        <div class="column-image">
            <img src="assets/img/post1.jpg" alt="">
        </div>
        <div class="card-content">
            <p class="date">December 02, 2021</p>
            <p class="title-head">A DAY FOR ALL</p>
            <p class="read">Today, we celebrate a day every person who has seen challenges as opportunities to grow and foster positivity. JCI Zamboanga is with you as we celebrate the International Day of Persons with Disabilities! May this day be
                a reminder that we must not need a special ocassion to treat everyone the same way we treat ourselves.
                <br>#InternationalDayOfPersonsWithDisabilities</p>
        </div>
      </div> -->
    </div>
    <div class="event-content">
    <h3 class="header-text2">Discover Events</h3>
    <div class="side-card">
      <img src="assets/img/post1.jpg" class="card-img-top">
      <div class="card-body">
        <p class="date">TODAY AT 4PM</p>
        <h5 class="title-head">A DAY FOR ALL</h5>
        <p class="read">Today, we celebrate a day every person who has seen challenges as opportunities to grow and foster positivity.</p>
      </div>
    </div>
    <div class="side-card">
      <img src="assets/img/post1.jpg" class="card-img-top">
      <div class="card-body">
        <p class="date">TODAY AT 4PM</p>
        <h5 class="title-head">A DAY FOR ALL</h5>
        <p class="read">Today, we celebrate a day every person who has seen challenges as opportunities to grow and foster positivity.</p>
      </div>
    </div>
    </div>
  </div>
  <a href="#" id="loadMore">Load More</a>
</div>
  <div class="subscribe">
    <h2 class="subscribe__title">Let's keep in touch</h2>
    <p class="subscribe__copy">Subscribe to keep up with fresh news and exciting updates. We promise not to spam you!</p>
    <div class="form">
      <input type="email" class="form__email" placeholder="Enter your email address" />
      <button class="form__button">Subscribe</button>
    </div>
    <div class="notice">
      <input type="checkbox">
      <span class="notice__copy">I agree to my email address being stored and uses to recieve monthly newsletter.</span>
    </div>
  </div>

<div class="take-header"><img src="assets/img/heading1.png" alt=""></div>
  <section class="take-action" id="take-action">
    <div class="take-action-bar">
      <img src="assets/img/proposal1.gif" alt="JCI">
      <div class="take-action-content">
        <h2>Send Proposal</h2>
        <p>Do you have projects in mind? You have come to the right place because we can make it possible. Through partnerships and combined efforts, we will help you to it.</p>
        <a href="send-proposals.html" class="take-btn">Send</a>
    </div>
    </div>
    <div class="take-action-bar">
      <img src="assets/img/donate1.gif" alt="JCI">
      <div class="take-action-content">
        <h2>Fund a Program</h2>
        <p>We are a non-profit organization in need of your assistance in raising funding for our programs.
          Your contributions will make a significant difference in our community.</p>
        <a href="fund_project.html" class="take-btn">Fund a Program</a>
      </div>
    </div>
    <div class="take-action-bar">
      <img src="assets/img/volunteer.gif" alt="JCI">
      <div class="take-action-content">
        <h2>Volunteer</h2>
        <p>Do you want to create positive change? It is your chance! You can advocate for things you love with JCIZ G.O.A.L.S.! </p>
        <a href="volunteer.html" class="take-btn">Volunteer</a>
      </div>
    </div>
    <div class="take-action-bar">
      <img src="assets/img/join.gif" alt="JCI">
      <div class="take-action-content">
        <h2>Join</h2>
        <p>Projects which you advocate can be implemented with you in there! You can join us and share your experience to the world! 
        </p>
        <a href="membership.html" class="take-btn">Join</a>
      </div>
    </div>
    <div class="take-action-bar">
      <img src="assets/img/partner.gif" alt="JCI">
      <div class="take-action-content">
        <h2>Partner with Us</h2>
        <p>Our projects come to life with collaborating with like-minded individuals! Through various efforts, we are able to create an impact that would make great waves and you can be a one with us!</p>
        <a href="partner.html" class="take-btn">Partner with Us</a>
      </div>
    </div>
  </section>
  <div class="top-border"></div>
<!------------------------------------------ADMIN MODAL------------------------------------------------------->
<div id="id01" class="modal">
  <form class="modal-content animate" action="utils/auth.php" method="post">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <div class="imgcontainer">
      <img src="assets/img/LOGO-Edited2.png" alt="JCIZ GOALS LOGO" class="avatar">
    </div>

      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <span class="psw"><a href="#">Forgot password?</a></span>

  </form>
</div>
<script>
  var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

  <footer>
    
      <div class="l-footer">
          <h1>
              <img src="assets/img/LOGO-Edited2.png" alt="admin" width="100px"
              onclick="document.getElementById('id01').style.display='block'" >
          </h1>
          <p>JCI Zamboanga Giving Our All for Livability and Sustainability colloquially known as JCIZ G.O.A.L.S. 
              is a flagship program of the Junior Chamber International – Zamboanga; an affiliate of the Junior Chamber 
              International Philippines that is aimed to develop, nurture, advance, and solve the movement of the 17 
              United Nations Sustainable Development Goals (UN SDG) before the year 2030. </p>
      </div>
      <ul class="r-footer">
          <li>
              <h2>Social Media</h2>
              <ul class="box">
                  <li><a href="facebook.com/jcizamboanga.inc/">Facebook</a></li>
                  <li><a href="twitter.com/jcizamboanga.inc/">Twitter</a></li>
                  <li><a href="pinterest.com/jcizamboanga.inc/">Pinterest</a></li>
                  <li><a href="dribble.com/jcizamboanga.inc/">Dribbble</a></li>
              </ul>
            </li>

          <li class="contacts">
              <h2>Contacts</h2>
              <ul class="box h-box">
                      <h4>Address:</h4>
                          <p><a>Doña Maria, 818, Tetuan, Zamboanga City, 7000, Philippines</a></p>
                      <h4>Email:</h4>
                          <p><a href="mailto:#">jci.zamboanga1948@gmail.com</a></p>
                      <h4>Phones:</h4>
                          <p><a href="tel:#">( 062) 992 1706</a> <span>or</span> <a href="tel:#">(+63) 935 614 2730</a></p>
              </ul>
          </li>
          <li>
              <h2>Partners</h2>
              <ul class="box">
                  <li><a href="https://homestyledepot.com.ph/" target="_blank">Home Style Depot</a></li>
                  <li><a href="https://www.facebook.com/SmartKInc2017/" target="_blank">Smart K Materials Testing Laboratory Inc.</a></li>
                  <li><a href="https://www.facebook.com/Anchors-Geotechnical-Consulting-Service-479861212787803/" target="_blank">Anchors Geotechnical Consulting Service</a></li>
                  <li><a href="https://www.facebook.com/TingogPartyList/" target="_blank">Tingog Partylist</a></li>
                  <li><a href="https://www.unilever.com/our-company/our-leadership/alan-jope/" target="_blank">Unilever</a></li>
                  <li><a href="#">RCDG Corporation</a></li>
              </ul>
          </li>
      </ul>
      <div class="b-footer">
      <p>All rights reserved by ©JCI Zamboanga, Inc. 2021 </p>
      </div>
  </footer>
  <a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="assets/js/admin.js"></script>

  <script>
    $(document).ready(function() {
      diplayPosts();
    });
    function diplayPosts(){
      $.ajax({
        url:'script/guest.php?q=posts',
        dataType: 'json',
        type: 'GET',
        contentType: false,
        processData: false,
        success: function(data){
          $("#posts").children(".card").remove();
          if(data.length>0){
            for(let x = 0; x < data.length; x++){
              let post = `<div class="card">
                <div class="column-image">
                    <img src="${data[x].image}" alt="">
                </div>
                <div class="card-content">
                    <p class="date">${data[x].date_posted}</p>
                    <p class="title-head">${data[x].title}</p>
                    <p class="read">${data[x].post}</p>
                </div>
              </div>`;
              $("#posts").append(post);
            }
          }
          return;
        },
        error: function(a,b,c){
            alert('internet connection error..');
            return;
        }
      });
    }
  </script>
</body>
</html>
