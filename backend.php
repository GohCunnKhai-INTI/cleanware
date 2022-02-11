<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require_once "dbConnection.php";

 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
  
  
	$key=$_REQUEST["term"];



	$key = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $key)));

	
	
	if (preg_match('/[\'^£$%&*()}!{@#~?><>,;|=_+¬-]/', $key))
	{
		$key="";
	}
	
	
	if(strpos($key, '<br>') !== false)
	{
		$key='';
	}
	


	$result=mysqli_query($conn,"select * from product where p_name like '%$key%'"); 
	$count=  mysqli_num_rows($result);
	
	if($count!=0)
	{
			while($row=mysqli_fetch_assoc($result))
			{
				// Print your search variables 
				echo  "<br/>" .$row["p_name"]."<br/>" .$row["p_img"] ."<br/>" .$row["p_id"]."<br/>" .$count;
			}
	}
	else 
	{
		     echo  "No results..." ;	
	}
	
	/*
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0 ){
                // Fetch result rows as an associative array
		
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
					
			
                   echo  "<br/>" .$row["p_name"]."<br/>" .$row["p_img"] ."<br/>" .$row["p_id"];					   

                }
            } else{
             echo  "No results..." ;	
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
	
	*/
}
 
 
 
// close connection
//mysqli_close($conn);
?>
