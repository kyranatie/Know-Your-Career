<?php     
include('connect.php');
if(@$_POST['submit']){
$sql="insert into careeroption(option1,option2,option3,option4,option5,option6) 
values('".$_POST['option1']."', '".$_POST['option2']."','".$_POST['option3']."','".$_POST['option4']."','".$_POST['option5']."',
'".$_POST['option6']."')";

$res=mysql_query($sql);
if($res){
	echo "Record successfully inserted";
	}else{
        echo "There is some problem in inserting record";
	      }

}

?>