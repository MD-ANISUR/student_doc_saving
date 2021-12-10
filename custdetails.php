<style>
    body { 
            background: lavender ; 
          }
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
    
    tr:hover{
        background-color: LightSalmon;
    }
</style>


<?php
    session_start();

    if(isset($_SESSION['manageremail']) && !empty($_SESSION['manageremail'])){
        ?>
            
            <br>
            <h2><u><i>CUSTOMER DETAILS</i></u></h2>
            <input type="search" id="searchbox">
            <input type="button" value="Search" id="searchbtn">
            <br>
            <br>
            <script>
                var srcbtn=document.getElementById('searchbtn');
                srcbtn.addEventListener('click', searchprocess);
                
                function searchprocess(){
                    var searchvalue=document.getElementById('searchbox').value;
                    window.location.assign("mancustsearch.php?param1="+searchvalue);
                }
                  
            </script>

            <table>
                <thead>
                    <tr>
                        <th>Customer_id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone_number</th>
						<th>Address</th>
                        
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        try{
                            
                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=dbmsproject;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
                            $sqlquery="SELECT customer_id,name,email,phone_number,address FROM customer";
                            
                            try{
                                $returnval=$dbcon->query($sqlquery);
                                
                                $custtable=$returnval->fetchAll();
                                
                                foreach($custtable as $row){
                                    ?>
                                        <tr>
                                            <td><?php echo $row['customer_id'] ?></td>   
                                            <td><?php echo $row['name'] ?></td>   
                                            <td><?php echo $row['email'] ?></td>   
                                            <td><?php echo $row['phone_number'] ?></td> 
											<td><?php echo $row['address'] ?></td>   											
                                        </tr>
                                    <?php
                                }
                            }
                            catch(PDOException $ex){
                                ?>
                                    <tr>
                                        <td colspan="5">Data read error ... ...</td>    
                                    </tr>
                                <?php
                            }
                            
                        }
                        catch(PDOException $ex){
                            ?>
                                <tr>
                                    <td colspan="5">Data read error ... ...</td>    
                                </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
            
           <br>
		   <button onclick="window.location.href='manhome.php';">Back to Homepage</button>
		    
			<br>
           <br>
            <input type="button" value="Logout" id="logoutbtn">

            <script>
                var elm=document.getElementById('logoutbtn');
                elm.addEventListener('click', processlogout);
                
                function processlogout(){
                    window.location.assign('manlogout.php');
                }
                
            </script>

        <?php
    }
    else{
        
        ?>
            <script>
                window.location.assign('managerlogin.php');
            </script>
        <?php
    }
?>