<?php
    include "DB_CONNECTOR.php"; 
    $id=$_GET["id"]; 
    mysqli_query($dbc, "delete from products where id=$id");
?>

<script type="text/javascript">
    window.location="admin.php";
</script>