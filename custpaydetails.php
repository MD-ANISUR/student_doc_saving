<style>
    body { 
            background: skyblue; 
          }
    table, th, td{
        border: 2px solid green;
        border-collapse: collapse;
        text-align: center;
    }
    
    tr:hover{
        background-color: orchid;
    }
</style>


<?php
    session_start();

    if(isset($_SESSION['empemail']) 
       && !empty($_SESSION['empemail'])){
        ?>
            
            <br>
            <h2><u><i>Payment Deatils</i></u></h2>
            
            <table>
                <thead>
                    <tr>
                        <th>Payment ID</th>
                        <th>Acc number</th>
                        <th>Amount</th>
                        <th>Payment Date</th>
						
                        
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        try{
                            
                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=dbmsproject;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
                            $sqlquery="SELECT * FROM payment";
                            
                            try{
                                $returnval=$dbcon->query($sqlquery);
                                
                                $custtable=$returnval->fetchAll();
                                
                                foreach($custtable as $row){
                                    ?>
                                        <tr>
                                            <td><?php echo $row['payment_id'] ?></td>   
                                            <td><?php echo $row['Accountaccount_no'] ?></td>   
                                            <td><?php echo $row['amount'] ?></td>   
                                            <td><?php echo $row['payment_date'] ?></td> 
											
																				
                                        </tr>
                                    <?php
                                }
                            }
                            catch(PDOException $ex){
                                ?>
                                    <tr>
                                        <td colspan="4">Data read error ... ...</td>    
                                    </tr>
                                <?php
                            }
                            
                        }
                        catch(PDOException $ex){
                            ?>
                                <tr>
                                    <td colspan="4">Data read error ... ...</td>    
                                </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
			<br>
            <br>
		   <button onclick="window.location.href='emphome.php';">Back to Homepage</button>
		    
			<br>
           <br>
            <input type="button" value="Logout" id="logoutbtn">

            <script>
               var elm=document.getElementById('logoutbtn');
                elm.addEventListener('click', processlogout);
                
                function processlogout(){
                    window.location.assign('emplogout.php');
                }
                
            </script>

        <?php
    }
    else{
        
        ?>
            <script>
                window.location.assign('emplogin.php');
            </script>
        <?php
    }
?>