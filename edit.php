<?php
include "connection.php";
$id = $_POST["id"];
$status = $_POST["status"];

echo $id;
echo $status;

mysqli_query($link, "UPDATE `table1` SET `status` = '$status' WHERE `table1`.`id` = $id");
?>
<script type="text/javascript">
    window.location = "admin.php";
</script>