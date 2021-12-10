<!DOCTYPE html> 
<html>
    <head>
        
        <meta charset="utf-8">
        <title>empsignup Page</title>
		<style>
            body { 
            background: deepskyblue; 
          }
        </style>
		
    </head>
    
    <body>
	  <center>
	    
			<h4>Create A New Account</h4>	
         <form action="empregisterprocess.php" method="POST">
             
            <label for="ename">Name: </label><br>
            <input type="text" id="ename" name="ename" placeholder="Enter your name here">
             <br>
            <label for="eemail">Email: </label><br>
            <input type="email" id="eemail" name="eemail" placeholder="Enter your email here">
            <br>
            <label for="epass">Password: </label><br>
            <input type="password" id="epass" name="epass"
             placeholder="Enter your password here">
            <br>
            <label for="etel">Mobile: </label><br>
            <input type="tel" id="etel" name="etel"
             placeholder="Enter your Mobile no here">
            <br><br>
            <input type="submit" value="Click to Register">
        </form>
		<h4>Already have an account?then login</h4>	
		 <button onclick="window.location.href='emplogin.php';">Login </button>
		</center>

    </body>
</html>