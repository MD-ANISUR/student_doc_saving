<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    
    if(
        isset($_POST['cemail']) &&
        isset($_POST['cpass'])  &&
        
        !empty($_POST['cemail']) &&
        !empty($_POST['cpass'])
    )
    {
        $email=$_POST['cemail'];
        $pass=$_POST['cpass'];
        $enc_pass=md5($pass);
        
        ///tries to communicate with the database and store the data
        
        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=dbmsproject;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            //database code execute, default : warning generate
            $sqlquerystring="SELECT * FROM customer WHERE email='$email' and password='$enc_pass'";
            
            ///executing the mysql code
            $returnobj=$conn->query($sqlquerystring);
            
            if($returnobj->rowCount()==1){
                ///login successful
                session_start();
                $_SESSION['customeremail']=$email;
                
                ?>
                    <script>location.assign('custhome.php')</script>
                <?php
            }
            else{
                ///invalid user
                ?>
                    <script>location.assign('custlogin.php')</script>
                <?php
            }
        }
        catch (PDOException $ex){
            ?>
                <script>location.assign('custlogin.php')</script>
            <?php
        }
    }
    else{
        //otherwise
        ?>
        <script>location.assign('custlogin.php')</script>
        <?php
    }
}
else{
    //we won't provide service
    echo "<script>location.assign('custlogin.php')</script>";
}
?>