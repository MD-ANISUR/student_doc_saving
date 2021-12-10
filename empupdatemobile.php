<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8">
        <title>Update Mobile No</title>
		<style>
            body { 
            background: skyblue; 
          }
        </style>
    </head>
    
    <body>
	<h2>Update Mobile no page</h2>
        <form action="empupmobileprocess.php" method="POST">
            Existing Email: <br><input type="email" placeholder="Enter your email" name="eemail"><br><br>           					
			New Mobile no:<br><input type="text" placeholder="Enter your new mobile number"  name="ntel"><br><br>
            
            <input type="submit" value="Apply changes">
        </form>
		<br>
		
		<button onclick="window.location.href='emppersonaldetails.php';">Return to personal details </button>
    </body>
</html>