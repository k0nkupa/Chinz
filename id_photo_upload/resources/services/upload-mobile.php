<?php
$serverName = "192.168.1.20\sqlexpress, 11433"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"test", "UID"=>"sa", "PWD"=>"Chinz0125");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

// Inser data into database
$name = $_POST['name'];
$idcard = $_POST['idcard'];
$var = array($name, $idcard);

$sql="INSERT INTO [test].[dbo].[user1] ([name], [idcard]) VALUES ('$name', '$idcard')";

if (!sqlsrv_query($conn, $sql, $var)) {
    $message = "wrong ID";
    echo "<script type='text/javascript'>alert('$message');</script>";
}

// Upload image into database
$target_dir = "../../uploads/".date("Y-m-d")."/";
$extension_fr = end(explode(".", $_FILES["front_image"]["name"]));
$extension_bk = end(explode(".", $_FILES["back_image"]["name"]));

$new_FR_file_name = $idcard.'_'.$name.'_正'.".".$extension_fr;
$new_BK_file_name = $idcard.'_'.$name.'_反'.".".$extension_bk;

$target_file_fr = $target_dir . $new_FR_file_name;
$target_file_bk = $target_dir . $new_FR_file_name;
$uploadOk = 1;

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["front_image"]["tmp_name"]);
    $check_1 = getimagesize($_FILES["back_image"]["tmp_name"]);
    if($check !== false || $check_1 !== false) {
        // echo "File is an image - " . $check["mime"] . "."."</br>";
        $uploadOk = 1;
    } else {
        // echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Allow certain types of file
if(($extension_fr != "jpg" && $extension_fr != "png" && $extension_fr != "jpeg") ||
   ($extension_bk != "jpg" && $extension_bk != "png" && $extension_bk != "jpeg")) {
    $message ="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["front_image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Check if file already exists then upload
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true); 
}

if (move_uploaded_file($_FILES["front_image"]["tmp_name"],$target_dir.$new_FR_file_name) && move_uploaded_file($_FILES["back_image"]["tmp_name"],$target_dir.$new_BK_file_name)) {
    $message = "Upload completed";
    echo "<script type='text/javascript'>alert('$message');</script>";
}



sqlsrv_close($conn);

?>