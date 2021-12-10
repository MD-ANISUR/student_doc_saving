<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    
    if(
        isset($_POST['eemail']) &&
        isset($_POST['epass'])  &&
        
        !empty($_POST['eemail']) &&
        !empty($_POST['epass'])
    )
    {
        $email=$_POST['eemail'];
        $pass=$_POST['epass'];
        $enc_pass=md5($pass);
        
        ///tries to communicate with the database and store the data
        
        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=dbmsproject;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            //database code execute, default : warning generate
            $sqlquerystring="SELECT * FROM employee WHERE email='$email' and password='$enc_pass'";
            
            ///executing the mysql code
            $returnobj=$conn->query($sqlquerystring);
            
            if($returnobj->rowCount()==1){
                ///login successful
                session_start();
                $_SESSION['empemail']=$email;
                
                ?>
                    <script>location.assign('emphome.php')</script>
                <?php
            }
            else{
                ///invalid user
                ?>
                    <script>location.assign('emplogin.php')</script>
                <?php
            }
        }
        catch (PDOException $ex){
            ?>
                <script>location.assign('emplogin.php')</script>
            <?php
        }
    }
    else{
        //otherwise
        ?>
        <script>location.assign('emplogin.php')</script>
        <?php
    }
}
else{
    //we won't provide service
    echo "<script>location.assign('emplogin.php')</script>";
}
?>