<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8">
        <title>Employee Remove Page</title>
		<style>
            body { 
            background: lavender; 
          }
        </style>
    </head>
    
    <body>
        <h2 style="color:Red;">Remove Employee</h2>
        <a href="empdetails.php"><b>Employee Details</b></a>
        <br>
        <br>
        <form action="empremoveprocess.php" method="POST">
            Employee's Email: <br><input type="email" placeholder="Enter employee email" name="eemail"><br><br>
            Employee's ID:<br><input type="text" placeholder="Enter Employees id"  name="eid"><br><br>
            
            <input type="submit" value="Click to remove">			
        </form>
				<br>
		
		<button onclick="window.location.href='manhome.php';">Back </button>
    </body>
</html>