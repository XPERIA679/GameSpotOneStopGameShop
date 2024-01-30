<?php
	session_start();
?>
<html>
	<head>
		<title>Added to Cart</title>
	</head>
	<body>
		<?php
        $ID = $_GET['id'];
        $action = $_GET['action'];
        
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
					require_once('DB_CONNECTOR.php');
			
					$query="UPDATE products SET added='yes' WHERE id='{$id}'";
				
					$affected_rows=mysqli_query($dbc,$query);
					
					if($affected_rows==1)
					{
						echo "Item Added To Cart";
						echo '<script>window.location.href="adventure-ittakes.php";</script>';
						
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
			else
			{
				echo "Add to cart request not received";
			}
					mysqli_close($dbc);
		?>
	</body>
</html>