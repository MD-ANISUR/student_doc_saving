<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8">
        <title> DELETE Page</title>
		<style>
            body { 
            background: skyblue; 
          }
        </style>
    </head>
    
    <body>
	<h3>Remove Document</h3>
        <form action="docdeleteprocess.php" method="POST">
		            Account No: <input type="number" name="delacc"><br><br>
                    Document Number: <input type="number" name="deldocnum"><br><br>
            
            
            <input type="submit" value="Ok">			
        </form>
				<br>
		
		        <br>
		   <button onclick="window.location.href='emphome.php';">Back to Homepage</button>
    </body>
</html>