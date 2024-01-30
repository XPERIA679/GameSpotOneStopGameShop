<?php
	session_start();
?>
<html>
	<head>
		<title>Added to Cart</title>
	</head>
	<body>
		<?php
		require_once('DB_CONNECTOR.php');
        $action = $_GET['action'];
        $ID = $_GET['id'];
        
			if($action == "Add")
			{
				$data_missing=array();
				if(empty($ID))
				{
					$data_missing[]='ID';
				}
				else
				{
					$id=trim($ID);
				}

				if(empty($data_missing))
				{
				
			
					$query="UPDATE products SET added='no' WHERE id='$ID'";
				
					$affected_rows=mysqli_query($dbc,$query);
					
					if($affected_rows==1)
					{
						
						header("location: cart.php?msg=success");
					}
					else
					{
						echo "Submit Error";
						echo ($affected_rows);
						echo mysqli_error($dbc);
						
					}
				}
				else
				{
					echo "The following data fields were empty! <br>";
					foreach($data_missing as $missing)
					{
						echo $missing ."<br>";
					}
				}
			}
			else if($action == "Conf") {
            $allowed = mysqli_query($dbc,"UPDATE products SET added='no' WHERE id='$ID'");
    echo '<script>
alert("Processing...");
window.location.href="cart.php";
</script>';
}
            else if($action == "Rem") {
            $quan = $_POST['quantity'];
     
     mysqli_query($dbc, "update products set quantity='$quan' WHERE id='$ID'");
     echo '<script>window.location.href="cart.php";</script>';
}           

            
			else
			{
				echo "Add to cart request not received";
			}
					mysqli_close($dbc);
		?>
	</body>
</html>