<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8">
        <title>Log In Page</title>
		<style>
            body { 
            background: skyblue; 
          }
        </style>
    </head>
    
    <body>
	<h3>Update Password page</h3>
        <form action="empuppassprocess.php" method="POST">
            Email: <br><input type="email" placeholder="Enter your email" name="eemail"><br><br>           					
			New password: <br><input type="password" placeholder="Enter your new password"  name="npass"><br><br>
            
            <input type="submit" value="Apply changes">
        </form>
		<br>
		
		<button onclick="window.location.href='emppersonaldetails.php';">Return to personal details </button>
    </body>
</html>