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
            <h2><u><i>Withdraw Details</i></u></h2>
            
            <table>
                <thead>
                    <tr>
                        <th>Withdraw No</th>
                        <th>Acc number</th>
                        <th>Doc No</th>
                        <th>Withdraw Date</th>
                        <th>Withdraw Status</th>
                        <th>Request Status</th>
						
                        
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        try{
                            
                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=dbmsproject;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
                            $sqlquery="SELECT * FROM withdraw_request";
                            
                            try{
                                $returnval=$dbcon->query($sqlquery);
                                
                                $custtable=$returnval->fetchAll();
                                
                                foreach($custtable as $row){
                                    ?>
                                        <tr>
                                            <td><?php echo $row['withdraw_no'] ?></td>   
                                            <td><?php echo $row['Accountaccount_no'] ?></td>   
                                            <td><?php echo $row['documentsdoc_no'] ?></td>   
                                            <td><?php echo $row['withdraw_date'] ?></td> 
                                            <td><?php echo $row['status'] ?></td>
                                            <td>
                                            <input type="button" value="Approve" onclick="approvefn(<?php echo $row['withdraw_no']; ?>);">
                                            <input type="button" value="Cancel" onclick="cancelfn(<?php echo $row['withdraw_no']; ?>);">
                                                
                                            </td>
                                            
											
																				
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
                function approvefn(withdraw_no){                   
                    location.assign('withdrawapprove.php?pid='+withdraw_no);
                }
                 function cancelfn(withdraw_no){                   
                    location.assign('withdrawcancel.php?pid='+withdraw_no); 
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


