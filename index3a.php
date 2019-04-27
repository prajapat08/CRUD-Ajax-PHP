<?php 
$connection = mysqli_connect('localhost', 'root', '', 'mydbassi2');


if($_GET['method'] === 'get'){
	if(isset($_GET['offset'])) {
		# code...
	                    //echo 'enterd';
							 
							$limit=$_GET['limit'];
							$offset=$_GET['offset'];
							 
							$results = mysqli_query($connection, "SELECT * FROM users LIMIT $limit OFFSET $offset");
						    	$data = array();
						    	while ($row = mysqli_fetch_array($results)) {
						    		array_push($data, $row);
						    	}
								echo json_encode($data);
	
                    } 

                    if(isset($_GET['id'])) {
		# code...  
                    	//echo 'enterd in id loop';
	
							$id = $_GET['id'];
							 
							$results = mysqli_query($connection, "SELECT * FROM users WHERE id=$id");
						    	$data = array();
						    	while ($row = mysqli_fetch_array($results)) {
						    		array_push($data, $row);
						    	}
								echo json_encode($data);
	
                    }
}
 
   	 
?>

