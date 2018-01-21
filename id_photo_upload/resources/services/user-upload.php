<?php
session_start();
$serverName = "192.168.1.20\sqlexpress, 11433";
$connectionInfo = array( "Database"=>"test", "UID"=>"sa", "PWD"=>"Chinz0125");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

// Inser data into database
$name = $_POST['name'];
$idcard = $_POST['idcard'];
$_SESSION['idcard'] = $idcard;
$_SESSION['name'] = $name;
$var = array($name, $idcard);

$sql="INSERT INTO [test].[dbo].[user1] ([name], [idcard]) VALUES ('$name', '$idcard')";

if (!sqlsrv_query($conn, $sql, $var)) {
    $message = "wrong ID";
    echo "<script type='text/javascript'>alert('$message');</script>";
}

sqlsrv_close($conn);
header("Location: http://www.yourwebsite.com/user.php");
?>