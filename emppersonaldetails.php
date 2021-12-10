
<style>
    body { 
            background: skyblue; 
          }
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }

</style>

<h2><b><i>Employee Personal Details</i></b></h2>

<?php
    session_start();

    if(isset($_SESSION['empemail']) && !empty($_SESSION['empemail'])){
		
        ?>

<table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
						<th>Email</th>
                        <th>Mobile Number</th>

                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        try{
                           
                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=dbmsproject;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						   
						   $searchval=$_SESSION['empemail'];
                            $sqlquery="";
                            if(!empty($searchval)){
                                $sqlquery="SELECT employee_id,name,email,phone_number FROM employee where email='$searchval'";
                            }
			           
                            try{
                                $returnval=$dbcon->query($sqlquery);
                                
                                $emptable=$returnval->fetchAll();
                                
                                foreach($emptable as $row){
                                    ?>
                                        <tr>
                                            <td><?php echo $row['employee_id'] ?></td>   
                                            <td><?php echo $row['name'] ?></td>  
											<td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['phone_number'] ?></td>   
                                            
                                         
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
