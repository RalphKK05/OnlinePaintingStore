<?php

$conn = mysqli_connect("localhost", "id20511553_ralphadmin", "+/}2mVFCirUSGT~K", "id20511553_testingdatabase");


$sql_query = "SELECT * FROM ORDER ORDER BY data DESC WHERE userID = $userID;";

$result = mysqli_query($conn, $sql_query);

if(mysqli_num_rows($result) > 0 ){

$row = mysqli_fetch_assoc($result);
$my_integer = $row["paintings"];
echo $my_integer;


}
mysqli_close($conn);


?>
