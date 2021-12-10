<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8">
        <title>Input for WD</title>
		<style>
            body { 
            background: skyblue; 
          }
        </style>
    </head>
    
    <body>
        <form action="eachcustwithdrawdetails.php" method="POST">
            Account Number: <input type="number" placeholder="Enter the account number" name="eaccno"><br><br>   
            
            <input type="submit" value="Click to see">
        </form>
		<br>
		
		<button onclick="window.location.href='emphome.php';">Return to home page </button>
    </body>
</html>