<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    
    if(
        isset($_POST['cname']) &&
        isset($_POST['cemail']) &&
        isset($_POST['cpass'])  &&
        isset($_POST['ctel']) &&
        isset($_POST['caddress']) &&
        
        !empty($_POST['cname']) &&
        !empty($_POST['cemail']) &&
        !empty($_POST['cpass']) &&
        !empty($_POST['ctel']) &&
        !empty($_POST['caddress'])
    )
    {
        $name=$_POST['cname'];
        $email=$_POST['cemail'];
        $pass=$_POST['cpass'];
        $mobile=$_POST['ctel'];
        $address=$_POST['caddress'];
        
        $enc_pass=md5($pass);
        
        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=dbmsproject;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
        
            $sqlquerystring="INSERT INTO customer(name,email,phone_number,address,password) VALUES('$name','$email','$mobile','$address','$enc_pass')";
            

            $conn->exec($sqlquerystring);
            
            ?>
                <script>location.assign('custlogin.php')</script>
            <?php
        }
        catch (PDOException $ex){
            ?>
                <script>location.assign('custsignup.php')</script>
            <?php
        }
    }
    else{
        
        ?>
           <script>location.assign('custsignup.php')</script>
        <?php
    }
}
else{
    
    echo "<script>location.assign('custsignup.php')</script>";
}
?>