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
	<h1>Update page</h1>
        <form action="empupemailprocess.php" method="POST">
            Existing Email: <br><input type="email" placeholder="Enter your email" name="eemail"><br><br>           
			New Email:<br> <input type="email" placeholder="Enter your new email"   name="nemail"><br><br>			         
            <input type="submit" value="Apply changes">
        </form>
		<br>
		
		<button onclick="window.location.href='emppersonaldetails.php';">Return to personal details </button>
    </body>
</html>