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
            <h2><u><i>DOCUMENT DETAILS</i></u></h2>
            
            <table>
                <thead>
                    <tr>
                        <th>Doc number</th>
                        <th>Doc details</th>
                        <th>Acc number</th>
                        <th>Soft copy</th>
						
                        
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        try{
                            
                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=dbmsproject;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
                            $sqlquery="SELECT * FROM documents";
                            
                            try{
                                $returnval=$dbcon->query($sqlquery);
                                
                                $custtable=$returnval->fetchAll();
                                
                                foreach($custtable as $row){
                                    ?>
                                        <tr>
                                            <td><?php echo $row['doc_no'] ?></td>   
                                            <td><?php echo $row['doc_type'] ?></td>   
                                            <td><?php echo $row['Accountaccount_no'] ?></td>   
                                            <td>
											<img width="80" height="80" alt="Doc image" src="<?php echo $row['path'] ?>"></td> 
																				
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
		   <button onclick="window.location.href='docdetelepage.php';">DELETE Document</button>
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