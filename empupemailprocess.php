<?php
   
    if(isset($_POST['eemail']) && isset($_POST['nemail']) && !empty($_POST['eemail']) && !empty($_POST['nemail'])  ){
        
        
        $oldemail=$_POST['eemail'];      
		$newemail=$_POST['nemail'];
        
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=dbmsproject;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query="UPDATE employee
                    SET email='$newemail'
                    WHERE Email='$oldemail'";
            
            try{
              
                $dbcon->exec($query);
                
                ?>
                    <script>window.location.assign('emplogin.php')</script>
                <?php
            }
            catch(PDOException $ex){
               
                ?>
                    <script>window.location.assign('empupdateemail.php')</script>
                <?php
            }
            
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('empupdateemail.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('empupdateemail.php')</script>
    
        <?php
        
    }
?>