<?php 
include '../IDValidator/IDValidator.php';

$v = com\jdk5\blog\IDValidator\IDValidator::getInstance();
$id = $_POST['idcard'];
$info = $v->getInfo($id);
// var_dump($info);
print_r($v->isValid($id));
?>