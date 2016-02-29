<?php
require_once'../../houtai/include.php';
$name = $_POST['name'];
$business = $_POST['business'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$class = $_POST['class'];
$level = $_POST['level'];
$content = $_POST['application'];
$management = $_POST['applicationReasons'];

$array = array(
'name' => $name,
'business' => $business,
'phoneNumber' => $phone,
'emailAddress' => $email,
'zhonglei' => $class,
'level' => $level,
'application' => $content,
'applicationReasons' => $management);

$keys="`".join("`,`",array_keys($array))."`";
$vals="'".join("','",array_values($array))."'";
$sql="INSERT INTO `biaodan`($keys) VALUES({$vals})";
print_r($sql);
if(mysql_query($sql)){
  alertMes("提交成功","index1.php");
}