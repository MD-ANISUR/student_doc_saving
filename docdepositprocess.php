<?php
   
    if(isset($_POST['edocno']) && isset($_POST['edate']) && !empty($_POST['edocno']) && !empty($_POST['edate'])  ){
        
        
        $docno=$_POST['edocno'];
        $date=$_POST['edate'];
        
        
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=dbmsproject;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query="UPDATE withdraw_request
                    SET return_date='$date'
                    WHERE documentsdoc_no='$docno'";
            
            try{
              
                $dbcon->exec($query);
                
                ?>
                    <script>window.location.assign('emphome.php')</script>
                <?php
            }
            catch(PDOException $ex){
               
                ?>
                    <script>window.location.assign('docdeposit.php')</script>
                <?php
            }
            
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('docdeposit.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('docdeposit.php')</script>
    
        <?php
        
    }
?>