<!DOCTYPE html> 
<html>
    <head>
        
        <meta charset="utf-8">
        <title>Customer signup Page</title>
		<style>
            body { 
            background: Thistle; 
          }
        </style>
		
    </head>
    
    <body>
	  <center>
	    
			<h4>Create A New Account</h4>	
         <form action="custregisterprocess.php" method="POST">
             
            <label for="cname">Name: </label>
            <input type="text" id="cname" name="cname" placeholder="Enter your name here">
             <br>
            <label for="cemail">Email: </label>
            <input type="email" id="cemail" name="cemail" placeholder="Enter your email here">
            <br>
            <label for="cpass">Password: </label>
            <input type="password" id="cpass" name="cpass"
            placeholder="Enter your password here">
            <br>
            <label for="ctel">Mobile: </label>
            <input type="tel" id="ctel" name="ctel">
            <br>
            <label for="caddress">Home Address: </label>
            <input type="text" id="caddress" name="caddress">
             <br>
            <input type="submit" value="Click to Register">
        </form>
		<h4>Already have an account?then login</h4>	
		 <button onclick="window.location.href='custlogin.php';">login </button>
		</center>

    </body>
</html>