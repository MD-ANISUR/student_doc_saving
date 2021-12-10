<?php
   
       if(isset($_POST['delacc']) 
       && isset($_POST['deldocnum']) 
       && !empty($_POST['delacc']) 
       && !empty($_POST['deldocnum'])){
        
        $var1=$_POST['delacc'];
        $var2=$_POST['deldocnum'];
       
		   
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=dbmsproject;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query="DELETE FROM documents
                    WHERE Accountaccount_no='$var1' AND doc_no='$var2'";
            
            try{
              
                $dbcon->exec($query);
                
                ?>
                    <script>window.location.assign('showdoc.php')</script>
                <?php
            }
            catch(PDOException $ex){
               
                ?>
                    <script>window.location.assign('docdetelepage.php')</script>
                <?php
            }
            
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('docdetelepage.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('docdetelepage.php')</script>
    
        <?php
        
    }
?>