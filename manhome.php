<style>
            body { 
            background: lavender; 
          }
        </style>
<?php
    session_start();

    if(isset($_SESSION['manageremail'])&& 
       !empty($_SESSION['manageremail']))
    {       
        ?>

<h1> <b>Manager Homepage</b></h1>
<br>
<br>
<br>
<a href="empdetails.php"><b>Employee Details</b></a>
<br>
<br>
<a href="custdetails.php"><b>Customer Details</b></a>
<br>
<br>
<a href="empremove.php"><b>Remove any employee</b></a>
<br>
<br>

		
            
            <input type="button" value="Logout" id="logoutbtn">

            <script>
                var elm=document.getElementById('logoutbtn');
                elm.addEventListener('click', processlogout);
                
                function processlogout(){
                    window.location.assign('manlogout.php');
                }
                
            </script>

<?php
    }
    else{
      
        ?>
            <script>
                window.location.assign('managerlogin.php');
            </script>
        <?php
    }
?>