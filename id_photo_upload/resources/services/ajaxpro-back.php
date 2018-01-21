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

$extension_bk = end(explode(".", $_FILES["back_image"]["name"]));

$new_BK_file_name = $idcard.'_'.$name.'_反'.'.png';

$target_file_bk = $target_dir.$new_FR_file_name;

// file_put_contents($target_dir.$imageName, $data);
file_put_contents($target_dir.$new_BK_file_name, $data);

?>

