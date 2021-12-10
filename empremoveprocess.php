<?php
   
    if(isset($_POST['eemail']) &&
       isset($_POST['eid']) && 
       !empty($_POST['eemail']) && 
       !empty($_POST['eid'])){
        
        $email=$_POST['eemail'];
        $id=$_POST['eid'];
       
		   
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=dbmsproject;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query="DELETE FROM employee
                    WHERE employee_id='$id' AND email='$email'";
            
            try{
              
                $dbcon->exec($query);
                
                ?>
                    <script>window.location.assign('empdetails.php')</script>
                <?php
            }
            catch(PDOException $ex){
               
                ?>
                    <script>window.location.assign('empdetails.php')</script>
                <?php
            }
            
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('empdetails.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('empremove.php')</script>
    
        <?php
        
    }
?>