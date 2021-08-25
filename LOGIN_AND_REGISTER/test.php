<?php
include('server.php');
$test_query="select NODE_A from access where USER_ID='Ravindra_111'";
echo $test_query;
$tourresult=mysqli_query($dbname,$test_query)->fetch_array()[0] ?? '';
echo $tourresult;

if($user=='Ravindra_111')
echo "okay";
if($tourresult=="yes")
echo "success";
else
echo "not success"
?> 