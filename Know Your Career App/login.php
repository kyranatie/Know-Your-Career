<?php     
include('connect.php');

if(isset($_POST['submit']))
 {
  $username=$_POST['username'];
  $password=$_POST['password'];
  
  $q=mysql_query("select * from signup where username='".$username."' and password='".$password."' ") or die(mysql_error());

  $n=mysql_fetch_row($q);
  
  if($n>0)
  {
    header('Location: career.html');
  }
     
  else{

    header('Location: signup.html');
  }
}
?>