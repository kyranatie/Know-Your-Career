		<?php

		if(!isset($_SESSION)){
		  session_start();
		}

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
		Logged in as <span style="color:red;"><?php echo $_SESSION['username']; ?></span> 
		<a href="logout.php">Logout</a>

        </div>

        <div id="career">
            <h2>Career Options</h2>
	    
	    <p>Choose your interests and passions:<p>

	     <form name="career" method="post" action="career.php">       
      
      
		Interests and Passions:<br>
                     &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="coption[]" value="Building things "> Building things<br> 
                     &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="coption[]" value="Solving Problems ">Solving Problems<br>
		     &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="coption[]" value="The law"> The law<br>
                     &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="coption[]" value="Argue out point"> Argue out point<br>
                     &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="coption[]" value="Helping people"> Helping people<br>
                     &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="coption[]" value="Love technology "> Love technology<br>
		     &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="coption[]" value="Continuos learning"> Continuos learning<br>
		     &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="coption[]" value="Mathematics and Calculus "> Mathematics and Calculus<br>
                     &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="coption[]" value="Biology and Human Anatomy "> Biology and Human Anatomy<br>
	             &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="coption[]" value="Chemistry and Structure of Atoms"> Chemistry and Structure of Atoms<br>

	             <button name="submit" value = "submit"> Submit</button>

            </form> 
                 
        </div>
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