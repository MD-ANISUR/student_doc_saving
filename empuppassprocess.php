<?php
   
    if(isset($_POST['eemail']) && isset($_POST['npass']) && !empty($_POST['eemail']) && !empty($_POST['npass'])  ){
        
        
        $myemail=$_POST['eemail'];      		
        $newpass=md5($_POST['npass']);
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=dbmsproject;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query="UPDATE employee
                    SET Password='$newpass'
                    WHERE Email='$myemail'";
            
            try{
              
                $dbcon->exec($query);
                
                ?>
                    <script>window.location.assign('emplogin.php')</script>
                <?php
            }
            catch(PDOException $ex){
               
                ?>
                    <script>window.location.assign('empupdatepass.php')</script>
                <?php
            }
            
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('empupdatepass.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('empupdatepass.php')</script>
    
        <?php
        
    }
?>