<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8">
        <title>Manual Payment</title>
		<style>
            body { 
            background: skyblue; 
          }
        </style>
    </head>
    
    <body>
        <form action="empmakecustpaymentprocess.php" method="POST">
            Account Number: <input type="number" placeholder="Enter your account number" name="eaccno"><br><br>
            Payment Amount: <input type="number" placeholder="Enter the amount to pay" name="eamount"><br><br>
            Payment Date: <input type="date" name="edate"><br><br>

            
            <input type="submit" value="Make Payment">
        </form>
		<br>
		
		<button onclick="window.location.href='emphome.php';">Return to home page </button>
    </body>
</html>