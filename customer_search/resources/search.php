<?php
session_start(); 
$serverName = "192.168.1.20\sqlexpress, 11433"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"test", "UID"=>"sa", "PWD"=>"Chinz0125");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

$id_name = $_POST['id_name'];
$_SESSION['id_name'] = $id_name;
$var = array($id_name);

$sql = "SELECT * FROM [test].[dbo].[user1] where [name] LIKE '%$id_name%' or [idcard] like '%$id_name%'";
$result = sqlsrv_query($conn, $sql);

// $dir = "../../id_photo_upload/uploads/";
// $images = glob($dir."*".$id_name."*.png");

?>  


<table>
	<th>名字</th>
	<th>身份证号码</th>
	<th>正面</th>
	<th>反面</th>
	<?php while($row = sqlsrv_fetch_array( $result )){ ?>
	<tr>
		<td><?php echo $row['name'] ?></td>
		<td><?php echo $row['idcard'] ?></td>
		<?php  foreach(glob("../../id_photo_upload/uploads/*") as $dir) {
				foreach(glob($dir."/"."*".$id_name."*.png") as $img) {?>
		<td><?php echo '<a href="'.$img.'" download="'.$img.'" class="foo"> <img src="'.$img.'"></a>' ?></td>
		<?php } }?>
	</tr>
	<?php } ?>
</table>	

<style type="text/css">
.foo:hover:after {
	content: ' ';
    background-image: url(<?php $img ?>);
    position: absolute;
    top: 10px;
    left: 10px;
    height: 320px;
    width: 320px;  
}	

</style>

<?php
sqlsrv_close($conn);
?>