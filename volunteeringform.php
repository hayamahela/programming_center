<?php include 'mail.php';?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Volunteer request</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">  
    <form id="contact" action="" method="post">
      <h3>Volunteer request from</h3>
        <input placeholder="name" name="name" type="text">
<br>
        <input placeholder="student ID" name="ID" type="text">
<br>
        <input placeholder="Email Address" name="fromEmail/" type="email">
<br>
        <input placeholder="Phone Number" name="phone" type="phone">
<br>
        <input placeholder="Course Code" name="CourseCode" type="text">
<br>
  <label for="grade">What grade did you pass this course with?</label>
  <select id="grade" name="grade">
    <option value="A+">A+</option>
    <option value="A">A</option>
    <option value="B+">B+</option>
    <option value="B">B</option>
	<option value="C+">C+</option>
    <option value="C">C</option>
	<option value="D+">D+</option>
    <option value="D">D</option>
  </select>
<br>
        <button type="submit" name="submit" id="contact-submit" data-submit="...Sending">Submit Now</button>

    </form>
       
  </div>
</body>
</html>