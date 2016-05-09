<?php     
include('connect.php');
if(!isset($_SESSION)){
  session_start();
}

if(isset($_POST['submit']))
 {
  $username=$_POST['username'];
  $password=$_POST['password'];
  
  $q=mysql_query("select * from signup where username='".$username."' and password='".$password."' ") or die(mysql_error());

  $n=mysql_fetch_array($q);
  
  if($n>0)
  {

     $_SESSION['username'] = $username;
     echo '<meta http-equiv="refresh" content="0;url=career_form.php">';

  }
     
  else{

          echo '<meta http-equiv="refresh" content="1;url=signup.html">';

  }
}
?>