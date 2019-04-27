<?php
$connection = mysqli_connect('localhost', 'root', '', 'mydbassi2');
   if($_GET['method'] === 'delete()' ){
    $id=$_GET['id'];
     
   //$name = $_POST['name'];
   // $age = $_POST['age'];
    //$email =$_POST['email'];

    $result = mysqli_query($connection, "DELETE FROM users where id=$id");            
 
	echo "user deleted successfully";
    }

    if($_GET['method'] === 'get' ){
	 
		# code...
								if (isset($_GET['id'])) {
		# code...
	
							$id = $_GET['id'];
							 
							$result = mysqli_query($connection, "SELECT * FROM users WHERE id=$id");
						    	$data = array();
						    	while ($row = mysqli_fetch_array($result)) {
						    		array_push($data, $row);
						    	}
								echo json_encode($data);
	
                    }
                     else {
                    	# code...
                    
	
							//$id = $_GET['id'];
							 
							$results = mysqli_query($connection, "SELECT * FROM users ");
						    	$data = array();
						    	while ($row = mysqli_fetch_array($results)) {
						    		array_push($data, $row);
						    	}
								echo json_encode($data);


	
                    } } 

              if($_GET['method'] === 'post'){
						$name = $_GET['name'];
						$age = $_GET['age'];
						$email = $_GET['email'];
							
						$results = mysqli_query($connection, "INSERT INTO users(name,age,email) VALUES('$name','$age','$email')");
						echo "user added successfully";
	
          }

          if($_GET['method'] === 'put')
   {
      $id = $_GET['id'];
	$name = $_GET['name'];
	$age = $_GET['age'];
	$email = $_GET['email'];
	 
	
		
		$results = mysqli_query($connection, "UPDATE users SET name = '$name', age = '$age', email='$email' WHERE id=$id"); 
	echo "user updated successfully!";
   }

    

?>