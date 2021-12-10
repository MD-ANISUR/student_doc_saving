<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8">
        <title>Customer Log In Page</title>
		
        
    </head>
    
    <body>
         <style>
            body { 
            background: Thistle; 
          }
        </style>
        
        <center>
            
        <form action="custloginprocess.php" method="POST">
            <h2> Log in here</h2><br>
            <label for="cemail">Email: </label><br>
            <input type="email" id="cemail" name="cemail" placeholder="Enter your Email here">
            <br>
            <label for="cpass">Password: </label><br>
            <input type="password" id="cpass" name="cpass"
             placeholder="Enter your Email here">
            <br><br>
            <input type="submit" value="Login">
        </form>
		<br>
            
		
		<button onclick="window.location.href='loginAs.php';">Return to previous page </button>
            <h4>New Customer have to sign up.</h4><br>
            <button onclick="window.location.href='custsignup.php';">Create a new account </button>
            
        </center>
    </body>
</html>