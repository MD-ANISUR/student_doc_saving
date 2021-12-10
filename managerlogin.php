<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8">
        <title>Manager Log In Page</title>
		
        
    </head>
    
    <body>
         <style>
            body { 
            background: lavender; 
          }
        </style>
        
        <center>
            
        <form action="manloginprocess.php" method="POST">
            <h2> Log in here </h2>
            <label for="semail">Email: </label><br>
            <input type="email" id="semail" name="semail" placeholder="Enter your Email here">
            <br>
            <label for="spass">Password: </label><br>
            <input type="password" id="spass" name="spass"
            placeholder="Enter your password here">
            <br><br>
            <input type="submit" value="Login">
        </form>
		<br>
            
		
		<button onclick="window.location.href='adminlogin.php';">Return to admin page </button>
            <h2>New Manager?</h2><br>
            <button onclick="window.location.href='managersignup.php';">Create a new account </button>
            
        </center>
    </body>
</html>