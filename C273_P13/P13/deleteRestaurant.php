<?php

include("dbFunctions.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];

$query = "delete from restaurants where rest_id='$id'";
//echo $insertQuery;
$status = mysqli_query($link, $query) or die(mysqli_error($link));

if ($status) {
    $response["success"] = "1";
} else {
    $response["success"] = "0";
}
echo json_encode($response);
}
