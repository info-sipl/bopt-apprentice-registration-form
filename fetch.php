<?php
include 'config.php';
$sql = "SELECT * FROM apprenticeship_contract_registration_form WHERE id='" . $_GET["id"] . "'";
$result=mysqli_query($conn,$sql);
$singleRow = mysqli_fetch_assoc($result);
?>