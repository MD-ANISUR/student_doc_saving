<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    
    if(
        isset($_POST['eaccno']) &&
        isset($_POST['eamount'])  &&
        isset($_POST['edate'])  &&
        
        !empty($_POST['eaccno']) &&
        !empty($_POST['eamount']) &&
        !empty($_POST['edate'])
        
    )
    {
        $accno=$_POST['eaccno'];
        $amount=$_POST['eamount'];
        $date=$_POST['edate'];
        
        ///tries to communicate with the database and store the data
        
        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=dbmsproject;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
        
            $sqlquerystring="INSERT INTO payment VALUES(NULL,$amount,Default,'Manual',NULL,$accno)";
            

            $conn->exec($sqlquerystring);
            
            ?>
                <script>location.assign('emphome.php')</script>
            <?php
        }
        catch (PDOException $ex){
            ?>
                <script>location.assign('empmakecustpayment.php')</script>
            <?php
        }
    }
    else{
        //otherwise
        ?>
        <script>location.assign('empmakecustpayment.php')</script>
        <?php
    }
}
else{
    //we won't provide service
    echo "<script>location.assign('empmakecustpayment.php')</script>";
}
?>