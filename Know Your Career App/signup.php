<?php     
include('connect.php');

if(isset($_POST['submit']))
 {
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $gender=$_POST['gender'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $profession=$_POST['profession'];
  $experience=$_POST['experience'];

  $q=mysql_query("select * from signup where username='".$username."' or email='".$email."' ") or die(mysql_error());
  $n=mysql_fetch_row($q);
  if($n>0)
  {
   echo 'The username name '.$username.' or email '.$email.' is already present in our database';

   header('Location: index.html');
  }
  else
  {
   $insert=mysql_query("insert into signup(firstname,lastname,username,email,gender,password,experience,phone,profession) values('".$firstname."','".$lastname."','".$username."','".$email."','".$gender."','".$password."','".$experience."','".$phone."','".$profession."')") or die(mysql_error());
  
   if($insert)
   {
    // echo 'Values are registered successfully';

    header('Location: career.html');
   }
   else
   {
   echo 'Values are not registered';
   }
  }
 
   
  }
 

?>