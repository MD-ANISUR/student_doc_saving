<?php
   
    if(isset($_POST['eemail']) && isset($_POST['ntel']) && !empty($_POST['eemail']) && !empty($_POST['ntel'])  ){
        
        
        $myemail=$_POST['eemail'];      
		$newmobile=$_POST['ntel'];
        
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=dbmsproject;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query="UPDATE employee
                    SET phone_number='$newmobile'
                    WHERE email='$myemail'";
            
            try{
              
                $dbcon->exec($query);
                
                ?>
                    <script>window.location.assign('emplogin.php')</script>
                <?php
            }
            catch(PDOException $ex){
               
                ?>
                    <script>window.location.assign('empupdatemobile.php')</script>
                <?php
            }
            
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('empupdatemobile.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('empupdatemobile.php')</script>
    
        <?php
        
    }
?>