<?php
require_once'../houtai/include.php';
$name = $_POST['name'];
$business = $_POST['position'];
$phoneNumber = $_POST['phone'];
$emailAddress = $_POST['email'];
$application = $_POST['application'];
$applicationReasons = $_POST['applicationReasions'];

$array = array(
'name' => $name,
'phoneNumber' => $phoneNumber,
'application' => $application,
'emailAddress' => $emailAddress,
'applicationReasons' => $applicationReasons,
'business' => $business);

$keys="`".join("`,`",array_keys($array))."`";
$vals="'".join("','",array_values($array))."'";
$sql="INSERT INTO `biaodan`($keys) VALUES({$vals})";
//print_r($sql);
if(mysql_query($sql)){
  alertMes("提交成功","index2.php");
}

//INSERT INTO `biaodan`(`name`, `phoneNumber`, `application`, `emailAddress`, `applicationReasons`, `business`) VALUES (1,1,1,1,11,1)
//INSERT INTO `biaodan`(`name`,`phoneNumber`,`application`,`emailAddress`,`applicationReasons`,`business`) VALUES(ASD ,ASD ,ASD ,ASD,ASDA,SD)