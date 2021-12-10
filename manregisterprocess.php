<?php


if($_SERVER['REQUEST_METHOD']=="POST"){
    
    if(
        isset($_POST['sname']) &&
        isset($_POST['semail']) &&
        isset($_POST['spass'])  &&
        isset($_POST['stel']) && 
        
        !empty($_POST['sname']) &&
        !empty($_POST['semail']) &&
        !empty($_POST['spass']) &&
        !empty($_POST['stel'])
    )
    {
        $Mname=$_POST['sname'];
        $Memail=$_POST['semail'];
        $Mpass=$_POST['spass'];
        $Mmobile=$_POST['stel'];
        $Menc_pass=md5($Mpass);
        
        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=dbmsproject;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
        
            $sqlquerystring="INSERT INTO manager(name,email,password,phone_number) VALUES('$Mname','$Memail','$Menc_pass','$Mmobile')";
            
            $conn->exec($sqlquerystring);
            
            ?>
                <script>location.assign('managerlogin.php')</script>
            <?php
        }
        catch (PDOException $ex){
            ?>
                <script>location.assign('managerlogin.php')</script>
            <?php
        }
    }
    else{
        
        ?>
        <script>location.assign('managerlogin.php')</script>
        <?php
    }
}
else{
    
    echo "<script>location.assign('managerlogin.php')</script>";
}
?>