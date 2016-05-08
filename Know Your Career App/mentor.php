<?php

session_start();
include('connect.php');

 ?>
<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="stylesheet.css"/>
</head>

<body>

    <div id="page-container">
	<div id="main-nav">
	  
		<a href="index.html">Home</a>||
		<a href="career.html">Career Options</a>||
		<a href="mentor.php">Mentor</a>||
		<a href="#">Contact Us</a>
	   


        </div>

        <div id="header">
            <h1>Know Your Career</h1>
            <img src="headerpic.jpg"/>

        </div>

        <div id="mentor">
            <h2>Mentor</h2>
	    
	   <table border="1px" style="padding: 1px;">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Profession</th>
                <th>Experience</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>

            <?php

            $select ="SELECT firstname,lastname,profession,gender,experience,email FROM signup ";

            $query = mysql_query($select) or die("Can't select data". mysql_error());

            while ($result = mysql_fetch_array($query, MYSQL_ASSOC)) {
               echo "<tr>";
               echo "<td class ='center'>".$result['firstname']."</td>";
               echo "<td class ='center'>".$result['lastname']."</td>";
               echo "<td class ='center'>".$result['gender']."</td>";
               echo "<td class ='center'>".$result['profession']."</td>";
               echo "<td class ='center'>".$result['experience']."</td>";
               echo "<td class ='center'>".$result['email']."</td>";
               echo "</tr>";
            }

            ?>
        </tbody>

       </table>

        </div>
        <div> </br></div>
        <div id="footer">
            <div id="altnav">
		<a href="index.html">Home</a> - 
		<a href="career.html">Career Options</a> - 
		<a href="mentor.php">Mentor</a> - 
		<a href="#">Contact Us</a> 
		
	    </div>

	    Copyright &copy Shakira Ndagire Designs

            Powered by <a href="#">Shakira Ndagire</a>

        </div>

    </div>

</body>


</html>