<?php
    session_start();

    if(isset($_SESSION['empemail']) &&
       !empty($_SESSION['empemail'])){
        if(
            isset($_GET['pid'])
        && !empty($_GET['pid'])
          ){
        
            $withdraw_no=$_GET['pid'];
        
        try{
                    $dbcon = new PDO("mysql:host=localhost:3306;dbname=dbmsproject;","root","");
                    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $query="DELETE FROM withdraw_request
                            WHERE withdraw_no=$withdraw_no";

                    try{

                        $dbcon->exec($query);

                        ?>
                            <script>window.location.assign('withdrawdetails.php')</script>
                        <?php
                    }
                    catch(PDOException $ex){

                        ?>
                            <script>window.location.assign('withdrawdetails.php')</script>
                        <?php
                    }

                }
                catch(PDOException $ex){
                    ?>
                        <script>window.location.assign('withdrawdetails.php')</script>
                    <?php
                }
         }
    else{
         ?>
            <script>location.assign('home.php')</script>
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

