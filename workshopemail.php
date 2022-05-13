  <?php 

  include 'config.php';

if(isset($_POST['submit'])) {

 $mailto = "3910012@stu.rcyci.edu.sa";  //admin email 
 
 //getting customer data
 $name = $_POST['name']; //getting volunteer's name
 $ID = $_POST['ID']; //getting volunteer's student ID
 $fromEmail = $_POST['fromEmail']; //getting volunteer's email
 $phone = $_POST['phone']; //getting volunteer's Phone number
 $details = $_POST['details']; //getting coursecode from volunteer
 $title = $_POST['title']; //getting grade from volunteer
 $date_ = $_POST['date'];
 $time_ = $_POST['time'];
 $place = $_POST['place'];

//email subjects
 $subject = "new Workshop Request - Programming Center";
 $subject2 = "Confirmation: your Workshop request"; // For customer confirmation
 
 //inserting volunteer data into database 
 $sql = "INSERT INTO workshoprequest (name,ID,fromEmail,phone,details,title,date_,time_,place)
     VALUES ('$name','$ID','$fromEmail','$phone', '$details', '$title', '$date_', '$time_', '$place')";
   
  if (mysqli_query($conn, $sql)) {

     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }



 //Email body that will be sent to the both admin and Volunteer
 $message = "Name: " . $name . "\n"
 . "ID: " . $ID . "\n"
 . "Phone Number: " . $phone . "\n"
 . "Title: " .  $title. "\n"
 . "Details".$details
 . "Title: " .  $title. "\n"
 . "Date: " .  $date_. "\n"
 . "Time: " .  $time_. "\n"
 . "Place: " .  $place. "\n".
 "\n";

 
 //Message for volunteer confirmation
 $message2 = "Dear " . $name . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $message . "\n\n"
 . "Regards," . "\n" . "- Programming Center Team";
 
 //message to admin
 $message3 = "New Incoming Workshop Request \n\n".$message."\n\n"
 ."Please go to 'Workshop request page' to accept or decline this request";
 
 //Email headers
 $headers = "From: " . $fromEmail; // volunteer email, admin will receive
 $headers2 = "From: " . $mailto; // This will be received by the volunteer
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject, $message3, $headers); // This email sent to admin 
  $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to volunteer
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
 
}
 
?>