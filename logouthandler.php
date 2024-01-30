<?php include('cart.php') ?>
<?php
		require_once('DB_CONNECTOR.php');
if(isset($_POST['passed']) ){

    $newbal = $balance + $subTot;

    echo '<script>
alert("Processing...");
window.location.href="index.php";
</script>';}
?>