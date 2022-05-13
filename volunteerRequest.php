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
  <link href="css/new.css" rel="stylesheet">
  <style>
    /* Remove extra left and right margins, due to padding */
    .row2 {
    align-items: center;
    width: 60%;
  }


    /* Style the counter cards */
    .card, .row2{
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      padding: 5px;
      text-align: left;
      align-items: center;
      background-color: #fff;
      margin: auto;
    }

    /*form appointment*/
        .formcontainer input[type=text], formcontainer input[type=checkbox], .formcontainer input[type=datetime-local], select{
          width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          border: none;
          background: #f1f1f1;
        }
        .formcontainer input[type=text]:focus, .formcontainer input[type=password]:focus {
          background-color: #ddd;
          outline: none;
        }

        /* Set a style for the submit/login button */
        .formcontainer .btn {
          background-color: #04AA6D;
          color: white;
          padding: 16px 20px;
          border: none;
          cursor: pointer;
          width: 100%;
          margin-bottom:10px;
          opacity: 0.8;
        }


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
<div class="container33">
    <img class="img" 
      src="css/images/logo.png"
      alt="image">
    <div class="container-text">
      <h2>Ideas and UI components in your <br>inbox</h2>
      <p>Sign up to receive ideas, free <br> components and free resources plus 15% on all of our <br> pro UI kits.</p>
          <input type="text" placeholder="Enter Full Name" name="name" required>

        <input type="text" placeholder="Enter Your Student ID" name="ID" required>

        <input type="text" placeholder="Enter A Course Code You'd Like to Teach" name="CourseCode" required>

        <input type="text" placeholder="Enter Your Email For Contact" name="fromEmail" required>

        <input type="text" placeholder="Enter Your Phone Number" name="phone" required>

        <input type="text" placeholder="Enter The grade You score in The selected course.." name="grade" required>

        <input type="datetime-local" name="date_time" placeholder="Enter Time" required>
      <button type="submit">Volunteer</button>
    </div>
  </div>

  <div class="row2">
    <div class="card">
      <form action="requestvol.php" method="post" class="formcontainer">
        <h1>Volunteer Application</h1>
        <label for=""><b>Full Name</b></label>
          <input type="text" placeholder="Enter Full Name" name="name" required>

        <label for=""><b>Student ID</b></label>
        <input type="text" placeholder="Enter Your Student ID" name="ID" required>

        <label for=""><b>Course</b></label>
        <input type="text" placeholder="Enter A Course Code You'd Like to Teach" name="CourseCode" required>

        <label for=""><b>Email</b></label>
        <input type="text" placeholder="Enter Your Email For Contact" name="fromEmail" required>

        <label for=""><b>Phone</b></label>
        <input type="text" placeholder="Enter Your Phone Number" name="phone" required>

        <label for=""><b>Grade</b></label>
        <input type="text" placeholder="Enter The grade You score in The selected course.." name="grade" required>

        <label for=""><b>Time</b></label>
        <input type="datetime-local" name="date_time" placeholder="Enter Time" required>

        <button type="submit" name="submit" class="btn" value="submit">Volunteer</button>
      </form>

    </div>
  </div>

</div>
 <!-- about section-->
<article id="aboutus" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
    <a class="navbar-brand" href="#"><img src="css/images/logo.png" height="300px" width="280px"></a>
    </div>
    <div class="col-sm-8">
      <h2><strong>OUR VALUES</strong></h2><br>
      <h4><strong>MISSION:</strong> o mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <h4><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
    </div>
  </div>
</article>


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