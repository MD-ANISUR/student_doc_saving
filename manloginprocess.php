<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    //we will give service
    //$_POST['uemail']
    //$_POST['upass']
    
    //empty value check, valid index check
    
    if(
        isset($_POST['semail']) &&
        isset($_POST['spass'])  &&
        
        !empty($_POST['semail']) &&
        !empty($_POST['spass'])
    )
    {
        $Memail=$_POST['semail'];
        $Mpass=$_POST['spass'];
        $Menc_pass=md5($Mpass);
        
        ///tries to communicate with the database and store the data
        
        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=dbmsproject;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            //database code execute, default : warning generate
            $sqlquerystring="SELECT * FROM manager WHERE email='$Memail' and password='$Menc_pass'";
            
            ///executing the mysql code
            $returnobj=$conn->query($sqlquerystring);
            
            if($returnobj->rowCount()==1){
                ///login successful
                session_start();
                $_SESSION['manageremail']=$Memail;
                
                
                ?>
                    <script>location.assign('manhome.php')</script>
                <?php
            }
            else{
                ///invalid user
                ?>
                    <script>location.assign('managerlogin.php')</script>
                <?php
            }
        }
        catch (PDOException $ex){
            ?>
                <script>location.assign('managerlogin.php')</script>
            <?php
        }
    }
    else{
        //otherwise
        ?>
        <script>location.assign('managerlogin.php')</script>
        <?php
    }
}
else{
    //we won't provide service
    echo "<script>location.assign('managerlogin.php')</script>";
}
?>