<?php

if(!isset($_SESSION)){
  session_start();
}


include('connect.php');

if(isset($_POST['submit']))  
{   

$checkbox1=$_POST['coption'];

$chk = ""; 
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
       $sql = mysql_query("insert into careeroption(career_option,username) values ('$chk1','".$_SESSION['username']."')") or die("error here".mysql_error());

   }    

 if($sql){

      echo'<script>alert("Inserted Successfully")</script>';  

      echo '<meta http-equiv="refresh" content="1;url=career_form.php">';
 }else{
      echo'<script>alert("Failed To Insert")</script>';  
	 }


}  



?>  