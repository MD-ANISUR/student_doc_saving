<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8">
        <title>Log In Page</title>
		<style>
            body { 
            background: deepskyblue; 
          }
        </style>
    </head>
    
    <body>
        <form action="emploginprocess.php" method="POST">
            Email: <br><input type="email" placeholder="Enter your email" name="eemail"><br><br>
            Password: <br><input type="password" placeholder="Enter your password" name="epass"><br><br>
            
            <input type="submit" value="Sign In">
        </form>
		<br>
		
		<button onclick="window.location.href='adminlogin.php';">Return to admin page </button>
    </body>
</html>