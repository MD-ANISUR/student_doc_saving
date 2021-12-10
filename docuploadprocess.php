<?php
    session_start();
    if(isset($_SESSION['empemail']) 
       && !empty($_SESSION['empemail'])){

        if(isset($_POST['an'])
           && isset($_POST['dd']) 
           && !empty($_POST['an']) 
           && !empty($_POST['dd'])){
            
            $var1=$_POST['an'];
            $var3=$_POST['dd'];
            
            if(isset($_FILES['dimage'])){
                $var4=$_FILES['dimage'];
               
                move_uploaded_file($var4['tmp_name'],"docimage/$var3.jpg");
            }
            
            
            try{
             
                $dbcon = new PDO("mysql:host=localhost:3306;dbname=dbmsproject;","root","");
                $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sqlquery="INSERT INTO documents(Accountaccount_no,doc_type,path) VALUES($var1,'$var3','docimage/$var3.jpg')";
                
                try{
                    $dbcon->exec($sqlquery);
                    ?>
                        <script>
                            window.location.assign('showdoc.php');
                        </script>
                    <?php
                }
                catch(PDOException $ex){
                    ?>
                        <script>
                            window.location.assign('empuploaddoc.php');
                        </script>
                    <?php
                }
                
            }
            catch(PDOException $ex){
                ?>
                    <script>
                        window.location.assign('empuploaddoc.php');
                    </script>
                <?php
            }
        }
        else{
            ?>
                <script>
                    window.location.assign('empuploaddoc.php');
                </script>
            <?php
        }
    }
    else{
        ?>
            <script>
                window.location.assign('emplogin.php');
            </script>
        <?php
    }
?>