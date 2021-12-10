<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8">
        <title>Doc Deposite</title>
		<style>
            body { 
            background: skyblue; 
          }
        </style>
    </head>
    
    <body>
        <form action="docdepositprocess.php" method="POST">
            Document Number: <input type="number" placeholder="Enter the document number" name="edocno"><br><br>
            Date: <input type="date" name="edate"><br><br>           
            <input type="submit" value="Save">
        </form>
		<br>
		
		<button onclick="window.location.href='emphome.php';">Return to home page </button>
    </body>
</html>