  <?php include 'workshopemail.php';?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NEW</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href="new.css" rel="stylesheet">
  <style>

.container33 {
  background-color: $primary-color;
  width: 80%;
  height: 100%;
  position: relative;
  display: grid;
  padding: 60px 20px 35px 50px;
  grid-template-columns: 1fr 2fr;
  place-items: center;
  line-height: 1.5;
}

  .img {
    width: 300px;
    height: 400px;
    object-fit: cover;
    object-position: center;
    padding: 20px 25px 35px 5px;
  }

    h2 {
      font-size: 1.2rem;
      color: #1A2250;
    }

    p {
      font-size: 14px;
      color: #3B4169;
      margin: 10px 0;
    }

    input,
    button {
      width: 100%;
      border: none;
      padding: 14px;
      border-radius: 3px;
    }

    input {
      border: 2px solid #DADDEC;
      margin: 5px 0 10px;
      font-size: 1rem;
      color: #656880;
    }

    button {
      background-image: linear-gradient(to right, #457c66, #74c4a4);
      display: block;
      color: $primary-color;
      font-size: 1rem;
      cursor: $cursor;
      box-shadow: 0 5px 20px #89caff94;
      transition: box-shadow .3s ease-in-out;
    }

    button:hover {
      box-shadow: none;
    }
    </style>

</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-white "><!--sticky-top-->
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="css/images/logo.png" height="80px" width="80px"></a>
    <a class="navbar-brand" href="#"><img src="css/images/yucdep_logo.png"  height="80px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="newhome.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="workshop_student.php">Workshop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pleasework.htm">Resources</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://sdl.edu.sa/sdlportal/en/publishers.aspx">SDL</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutus">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
<!--
<div class="container33">
    <img class="img" 
      src="css/images/logo.png"
      alt="image">
    <div class="container-text">
      <h2>Ideas and UI components in your <br>inbox</h2>
      <p>Sign up to receive ideas, free <br> components and free resources plus 15% on all of our <br> pro UI kits.</p>
      <form action = "" method = "post">
          <input type="text" placeholder="Enter Full Name" name="name" required>

        <input type="text" placeholder="Enter Your Student ID" name="ID" required>

        <input type="text" placeholder="Enter Workshop details" name="details" required>

        <input type="text" placeholder="Enter Your Email For Contact" name="fromEmail" required>

        <input type="text" placeholder="Enter Your Phone Number" name="phone" required>

        <input type="text" placeholder="Enter workshop title" name="title" required>

        <input type="datetime-local" name="date_time" placeholder="Enter Time" required>
      <button type="submit">request workshop</button>
    </form>
    </div>
  </div> -->

  <div class="container">  
    <form id="contact" action="" method="post">
      <h3>Volunteer request from</h3>
          <input type="text" placeholder="Enter Full Name" name="name" required>
<br>
        <input type="text" placeholder="Enter Your Student ID" name="ID" required>
<br>
        <input type="text" placeholder="Enter workshop title" name="title" required>
<br>
        <input type="text" placeholder="Enter Workshop details" name="details" required>
<br>
        <input type="text" placeholder="Enter Your Email For Contact" name="fromEmail" required>
<br>
        <input type="text" placeholder="Enter Your Phone Number" name="phone" required>
<br>
  <b>Date: </b><input type="date" name="date">
<br>
  <b>Time: </b><input type="time" name="time" placeholder="Enter Workshop Time">
<br>
<input type="text" name="place" placeholder="Enter Workshop Location"><br>
        <button type="submit" name="submit" id="contact-submit" data-submit="...Sending">Submit Now</button>

    </form>
       
  </div>


 <!-- about section-->
    <!-- about section-->
      <div id="aboutus" class="about-section">
        <div class="inner-container">
            <h1>About Us</h1>
            <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum, eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi neque voluptates sit deleniti autem error eos totam nisi neque.
            </p>
            <div class="skills">
                <span>Helpin Sessions</span>
                <span>Volunteering</span>
                <span>Offering Workshops</span>
            </div>
        </div>
    </div>

<!--footer -->
<footer>
  <!-- Footer main -->
  <section class="ft-main">
    <div class="ft-main-item">
      <h2 class="ft-title">About</h2>
      <ul class = "ul">
        <li><a href="#">Services</a></li>
        <li><a href="#">Portfolio</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Resources</h2>
      <ul class = "ul">
        <li><a href="#">Docs</a></li>
        <li><a href="#">SDL</a></li>
        <li><a href="#">eBooks</a></li>
        <li><a href="#">Webinars</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Contact</h2>
      <ul class = "ul">
        <li><a href="#">Help</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Stay Updated</h2>
      <p>Get free updates before others do!</p>
      <form class = "emailup">
        <input type="email" name="email" placeholder="Enter email address">
        <input type="submit" value="Subscribe">
      </form>
    </div>
  </section>


  <!-- Footer legal -->
  <section class="ft-legal">
    <ul class="ft-legal-list" class = "ul">
      <li><a href="#">Terms &amp; Conditions</a></li>
      <li><a href="#">Privacy Policy</a></li>
      <li>&copy; 2021 by HAYA, YOMNA, SARAH</li>
    </ul>
  </section>
</footer>

<script src="main.js"></script>

</body>
</html>