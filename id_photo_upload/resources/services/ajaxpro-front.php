<?php  
session_start();
$data = $_POST['image'];
$idcard = $_SESSION['idcard'];
$name = $_SESSION['name'];

list($type, $data) = explode(';', $data);
list(, $data)      = explode(',', $data);


$data = base64_decode($data);
// $imageName = time().'.png';

$target_dir = "../../uploads/".date("Y-m-d")."/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}
$extension_fr = end(explode(".", $_FILES["front_image"]["name"]));

$new_FR_file_name = $idcard.'_'.$name.'_正'.'.png';

$target_file_fr = $target_dir.$new_FR_file_name;

// file_put_contents($target_dir.$imageName, $data);
file_put_contents($target_dir.$new_FR_file_name, $data);

?>

