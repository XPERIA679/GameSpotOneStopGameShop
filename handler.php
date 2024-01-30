<?php 
session_start();
require_once('DB_CONNECTOR.php');

if(isset($_POST['passed'])){

    $allowed = mysqli_query($dbc,"UPDATE products SET added='no'");
    echo '<script>
alert("Processing Purchase...");
window.location.href="PurchaseComplete.php";
</script>';

}

else {
    echo '<script>
alert("No Item In The Cart.");
window.location.href="cart.php";
</script>';
}



