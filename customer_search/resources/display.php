<?php  
session_start();

$id_name = $_SESSION['id_name'];
$dir = "../uploads/".date("Y-m-d")."/";
$images = glob($dir."*".$id_name."*.png");

$html = '';
if(!empty($id_name)){
$html .='<ul>';
foreach($images as $img){
	$html .='<li><img src="'.$img.'" ></li>' ; 	
} 
$html .='</ul>' ; 
} else{
	$html = '<strong>No Data</strong>';
}
echo $html ;
?>