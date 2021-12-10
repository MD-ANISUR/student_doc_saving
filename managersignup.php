<!DOCTYPE html> 
<html>
    <head>
        
        <meta charset="utf-8">
        <title>empsignup Page</title>
		<style>
            body { 
            background: lavender; 
          }
        </style>
		
    </head>
    
    <body>
	  <center>
	    
			<h4>Create A New Account</h4>	
          <form action="manregisterprocess.php" method="POST">
            Name:<br> <input type="text" placeholder="Enter your name" name="sname"><br><br>
            Email:<br> <input type="email" placeholder="Enter your name"   name="semail"><br><br>
			Password: <br><input type="password" placeholder="Enter a secured password"  name="spass"><br><br>
			Mobile no:<br><input type="text" placeholder="Enter your mobile number"  name="stel"><br><br>
                     
            
            <input type="submit" value="Register">
	  
        </form>
		<h4>Already have an account? Then click to login below</h4>	
		 <button onclick="window.location.href='managerlogin.php';">Login </button>
		</center>

    </body>
</html>