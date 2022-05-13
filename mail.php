<?php  

include_once 'config.php';

if(isset($_POST['submit'])) {

 $mailto = "3910012@stu.rcyci.edu.sa";  //admin email 
 
 //getting customer data
 $name = $_POST['name']; //getting volunteer's name
 $ID = $_POST['ID']; //getting volunteer's student ID
 $fromEmail = $_POST['fromEmail']; //getting volunteer's email
 $phone = $_POST['phone']; //getting volunteer's Phone number
 $CourseCode = $_POST['CourseCode']; //getting coursecode from volunteer
 $grade = $_POST['grade']; //getting grade from volunteer

//email subjects
 $subject = "new Volunteering Request - Programming Center";
 $subject2 = "Confirmation: your Volunteering request"; // For customer confirmation
 
 //inserting volunteer data into database 
 $sql = "INSERT INTO volunteeringrequest (name,ID,fromEmail,phone,CourseCode,grade)
     VALUES ('$name','$ID','$fromEmail','$phone', '$CourseCode', '$grade')";
    
	if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
	 
 
 //Email body that will be sent to the both admin and Volunteer
 $message = "Name: " . $name . "\n"
 . "Student ID: " . $ID . "\n"
 . "Phone Number: " . $phone . "\n"
 . "Course Code: " .  $CourseCode. "\n"
 . "Grade recieved in ".$CourseCode.": ". $grade. 
 "\n";

 
 //Message for volunteer confirmation
 $message2 = "Dear " . $name . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $message . "\n\n"
 . "Regards," . "\n" . "- Programming Center Team";
 
 //message to admin
 $message3 = "New Incoming Volunteering Request \n\n".$message."\n\n"
 ."Please go to 'Volunteer request page' to accept or decline this request";
 
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