<?php
    session_start();

    if(isset($_SESSION['empemail']) && !empty($_SESSION['empemail'])){
        ?>
            
<center>
<h1><b><i><u>Employee Home page</u></i></b></h1>
</center>

<br>
<br>
<br>
<style>
    body {
  background: linear-gradient(180deg, aqua, green);
}

</style>

<a href="emppersonaldetails.php"><b>Employee Personal Details</b></a>
<br>
<br>
<a href="empupdate.php"><b>Update personal details</b></a>
<br>
<br> 
<a href="empcustdetails.php"><b>Customer Personal Details</b></a>
<br>
<br>
<a href="showdoc.php"><b>Customer document Details</b></a>
<br>
<br>
<a href="empuploaddoc.php"><b>Customer document upload</b></a>
<br>
<br>
<a href="docdetelepage.php"><b>Customer document delete</b></a>
<br>
<br>
<a href="inputtotaldoc.php"><b>Each Account documents</b></a>
<br>
<br>
<a href="custpaydetails.php"><b>Customer payment details</b></a>
<br>
<br>
<a href="empmakecustpayment.php"><b>Make a manual customer payment</b></a>
<br>
<br>
<a href="docdeposit.php"><b>Customer Document Deposit</b></a>
<br>
<br>
<a href="withdrawdetails.php"><b>Document withdraw requests</b></a>
<br>
<br>
<a href="inputwithdrawdetails.php"><b>Each Customer withdraw Details</b></a>


			<br>
			<br>          
            <br>
			<br>
			<br>
		
            
            <input type="button" value="Logout" id="logoutbtn">

            <script>
                var elm=document.getElementById('logoutbtn');
                elm.addEventListener('click', processlogout);
                
                function processlogout(){
                    window.location.assign('emplogout.php');
                }
                
            </script>

<?php
    }
    else{
      
        ?>
            <script>
                window.location.assign('emplogin.php');
            </script>
        <?php
    }
?>