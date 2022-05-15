<?php
class User
{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    public function connect()
    {
       $this->servername="localhost";
       $this->username="root";
       $this->password="";        
       $this->dbname="programming_center";
    
      //pre-defined function 
       $conn=new mysqli($this->servername,
                        $this->username,
                        $this->password,
                        $this->dbname);

       return $conn;
       if (mysqli_connect_errno())
       {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
       }
   }

      function check_login($id,$password)
   {
       $conncetion = $this->connect();
       $sql1="SELECT * from login_student WHERE student_id='$id' and password='$password'"; 
       $sql2="SELECT * from login_teacher WHERE teacher_id='$id' and password='$password'";
       
       $result1   = $conncetion->query($sql1);
       $result2   = $conncetion->query($sql2);
       $count_student = $result1->num_rows;
       $count_teacher = $result2->num_rows;

        if ($count_student == 1)
        {
          $_SESSION['role'] = "student";
          return $result1;
        }

        else if ($count_teacher == 1)
        {
          $_SESSION['role'] = "teacher";
          return $result2;
        }

        else 
        { return null;}   
   }



function add_session($week, $time, $place, $course, $teacher_id, $teacher_name)
   {

      $conncetion = $this->connect();
      $sql = "INSERT INTO sessions_table (week_number, time, place, course, teacher_id, teacher_name)
      VALUES ('$week', '$time', '$place', '$course', '$teacher_id', '$teacher_name')";

      $inserted = $conncetion->query($sql);
      return $inserted;
   }

   function sessions($choice, $name)
   {
      $conncetion = $this->connect();

      if ($choice == 1){ //all sessions
          $sql  ="SELECT * from sessions_table";
      }

       else if ($choice == 0) { //only teacher sessions
          $sql   ="SELECT * from sessions_table WHERE teacher_name='$name'";}

      $result    = $conncetion->query($sql);            
      $count_t   = $result->num_rows;             
      if ($count_t > 0)
      {
          While ($row = $result->fetch_assoc()){   
          $data[]=$row;
      }
        return $data;
      }   
   }

   function delete_session($session_id)
   {
        $conncetion = $this->connect();

   }
    
   function stu_appointment($stdid,$stdname,$course,$teacher,$date_time,$details)
   {
     $conncetion = $this->connect();
      $sql="INSERT INTO appointment (student_id,student_name,course,teacher,date_time,details)
      VALUES ('$stdid','$stdname','$course', '$teacher', '$date_time', '$details')";
      $inserted =  $conncetion->query($sql) ;
     return $inserted;
       
    }

     function volunteer_request($name,$ID,$fromEmail,$phone,$CourseCode,$grade,$date_time)
   {
     $conncetion = $this->connect();
      $sql="INSERT INTO volunteeringrequest (name,ID,fromEmail,phone,CourseCode,grade,date_time)
      VALUES ('$name','$ID','$fromEmail', '$phone', '$CourseCode', '$grade', '$date_time')";
      $inserted =  $conncetion->query($sql) ;
     return $inserted;
       
    }
    //yomna's functions
    
      function workshopsessions()
   {
      $conncetion = $this->connect();
          $sql  ="SELECT * from workshop";
 
      $result    = $conncetion->query($sql);            
      $count_t   = $result->num_rows;             
      if ($count_t > 0)
      {
          While ($row = $result->fetch_assoc()){   
          $data[]=$row;
      }
        return $data;
      }   
   }
   
    function delete_workshop($id)
   {
        $conncetion = $this->connect();


   }
    
      function addWorkshop($title, $details, $presenter, $date, $time, $place)
   {
      $conncetion = $this->connect();
      $sql = "INSERT INTO workshops (title, details, presenter, date, time, place)
      VALUES ('$title', '$details', '$presenter', '$date', '$time', '$place')";

      $inserted = $conncetion->query($sql);
      return $inserted;
   }
    
	
	   function trainingprograms($title, $details, $presenter, $date, $time, $place)
   {
      $conncetion = $this->connect();
      $sql = "INSERT INTO trainingprograms (title, details, presenter, date, time, place)
      VALUES ('$title', '$details', '$presenter', '$date', '$time', '$place')";

      $inserted = $conncetion->query($sql);
      return $inserted;
   }

      function requests()
   {
      $conncetion = $this->connect();
          $sql  ="SELECT * from volunteeringrequest";
 
      $result    = $conncetion->query($sql);            
      $count_t   = $result->num_rows;             
      if ($count_t > 0)
      {
          While ($row = $result->fetch_assoc()){   
          $data[]=$row;
      }
        return $data;
      }   
   }
   function add_volunteer($name, $ID, $Email, $phone, $CourseCode, $grade)
   {

      $conncetion = $this->connect();
      $sqll = "DELETE FROM volunteeringrequest WHERE ID =  '" . $_GET["ID"] . "'";
      $sql = "INSERT INTO volunteer (name, ID, fromEmail, phone, CourseCode, grade)
      VALUES ('$name', '$ID', '$Email',' $phone', '$CourseCode', '$grade')";

      $inserted = $conncetion->query($sql);
     $deleted = $conncetion->query($sqll);
      return $inserted;
   }

    
   
 }
?>
