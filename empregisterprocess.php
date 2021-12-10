<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    
    if(
        isset($_POST['ename']) &&
        isset($_POST['eemail']) &&
        isset($_POST['epass'])  &&
        isset($_POST['etel']) &&
        
        !empty($_POST['ename']) &&
        !empty($_POST['eemail']) &&
        !empty($_POST['epass']) &&
        !empty($_POST['etel'])
    )
    {
        $name=$_POST['ename'];
        $email=$_POST['eemail'];
        $pass=$_POST['epass'];
        $mobile=$_POST['etel'];
        $enc_pass=md5($pass);
        
        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=dbmsproject;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
        
            $sqlquerystring="INSERT INTO employee(name,email,password,phone_number) VALUES('$name','$email','$enc_pass','$mobile')";
            

            $conn->exec($sqlquerystring);
            
            ?>
                <script>location.assign('emplogin.php')</script>
            <?php
        }
        catch (PDOException $ex){
            ?>
                <script>location.assign('empsignup.php')</script>
            <?php
        }
    }
    else{
        
        ?>
           <script>location.assign('empsignup.php')</script>
        <?php
    }
}
else{
    
    echo "<script>location.assign('empsignup.php')</script>";
}
?>