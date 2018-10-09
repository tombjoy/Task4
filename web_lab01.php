<!--file userRegistration.php -->

<HTML XMLns="http://www.w3.org/1999/xHTML"> 
  <head> 
    <title>User Registration</title> 
  </head> 
  <body>
  <H1>A Simple User Registration Page</H1>

  <form>
	    <label>User Name:  <input type="text" name="namefield"> </label>
 	    <label><br>Password: <input type="text" name="pwdfield"> <br></label>
 	    
        <label>Gender: 
        <input type="radio" name="genderfield" value="male" checked> Male  
        <input type="radio" name="genderfield" value="female" checked> Female <br></label>

 	    <label>Age:
 	    <select name="agefield">
 	    	<option value="0-18">0-18</option>
            <option value="19-30">19-30</option>
            <option value="31-50">31-50</option>
            <option value="50+">50+</option>
        </select><br>	
 	    </label> 
 	    
        Email: <input type="text" name="emailfield"> <br>
		<input type="submit" value="Submit" />
  </form>
  
  <p> The result data will refresh current page.</p>
  </body> 

<?php 
     date_default_timezone_set("Australia/Melbourne");
			
	// get name and password passed from client
	if(isset($_GET['namefield']) && isset($_GET['pwdfield']) && isset($_GET['genderfield'])&& isset($_GET['agefield'])&& isset($_GET['emailfield']))
	{
		$name = $_GET['namefield'];
		$pwd = $_GET['pwdfield'];
		$gender = $_GET['genderfield'];
		$ages = $_GET['agefield'];
		$email = $_GET['emailfield'];

		// sleep for 10 seconds to slow server response down
		sleep(10);
		// write back the password concatenated to end of the name
		ECHO ($name.":".$pwd);
		ECHO "<br>";
		ECHO $gender;
		ECHO "<br>";
		ECHO $ages;
		ECHO "<br>";
		ECHO $email;

		ECHO ("<br/>Current Server Time:");
		ECHO date("M D j G:i:s T Y");
		echo "<p>my name is $name.</p>";
		echo strchr("Hello world!1111","world");
	}
		
?>

</HTML>