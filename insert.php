<?php
include('config.php');
function Validation($src,$reg){
	$src=preg_replace('/[^(\x20-\x7F)]*/', '', trim($src));
	return preg_replace("/".$reg."/", "", strip_tags($src));
}
function IsEmail($src){
	if(strlen($src) && !preg_match ("/^[\w\.-]{1,}\@([\da-zA-Z-]{1,}\.){1,}[\da-zA-Z-]+$/", trim($src))) {
		return FALSE;
	}else{
		return TRUE;
	}
}
$y_url= mysql_real_escape_string ($_POST['url']);
$nama = mysql_real_escape_string ($_POST['nama']);
if($_POST['jenis_kelamin']){
	$jenis_kelamin = mysql_real_escape_string ($_POST['jenis_kelamin']);
}else{
	$jenis_kelamin = NULL;
}
$tanggal_lahir = mysql_real_escape_string ($_POST['tanggal_lahir']);
$tanggal_lahir = strtotime($tanggal_lahir);
$tanggal_lahir = date('Y-m-d', $tanggal_lahir);
$telp = mysql_real_escape_string ($_POST['telp']);
$email = mysql_real_escape_string ($_POST['email']);
$alamat = mysql_real_escape_string ($_POST['alamat']);
$kotaprovinsi = mysql_real_escape_string ($_POST['kotaprovinsi']);
$kategori = mysql_real_escape_string ($_POST['kategori']);
if(empty($nama) or empty($tanggal_lahir) or empty($telp) or empty($email) or empty($alamat) or empty($kotaprovinsi) or empty($kategori) or empty($y_url) or IsEmail($email)==false){	
	header('location: deadly.php?error=1');
	exit();
}else{
	$nama=Validation($nama, '[^a-zA-Z0-9\s]');
	$jenis_kelamin=Validation($jenis_kelamin, '[^0-9]');
	$tanggal_lahir=Validation($tanggal_lahir, '[^0-9\/\-\:\s]');
	$telp=Validation($telp, '[^0-9\(\)\-\.\s]');
	$alamat=Validation($alamat, '[^a-zA-Z0-9\.\,\s]');
	$kotaprovinsi=Validation($kotaprovinsi, '[^a-zA-Z0-9\,\.\s]');
	$kategori=Validation($kategori, '[^a-zA-Z]');
}
$mystring = $y_url;
$findme   = 'youtube.com/watch?v=';
$pos = strpos($mystring, $findme);
if(strpos($mystring, $findme)===false){
	header('location: deadly.php?error=2');
	exit();
}
$posted = date('Y-m-d H:i:s');
$pos = strpos($y_url,'?') + 1;
parse_str(substr($y_url,$pos),$arg);
$youtubeid=$arg['v'];
$xmlurl='http://www.youtube.com/oembed?url=http%3A//www.youtube.com/watch?v%3D'.$youtubeid.'&format=xml';
$xml = @simplexml_load_file($xmlurl);
if(!$xml){
	header('location: deadly.php?error=3');
	exit();
}else{
	$y_title=mysql_real_escape_string($xml->children()->title);
	$y_iframe='<iframe width="100%" height="100%" src="http://www.youtube.com/embed/'.$youtubeid.'?feature=oembed" frameborder="0" allowfullscreen></iframe>';
	$y_iframe=mysql_real_escape_string($y_iframe);
	$y_author=mysql_real_escape_string($xml->children()->author_name);
	$y_width=mysql_real_escape_string($xml->children()->width);
	$y_height=mysql_real_escape_string($xml->children()->height);
	$y_image = mysql_real_escape_string('http://img.youtube.com/vi/'.$youtubeid.'/0.jpg');
	$y_facebook=0;
	$y_twitter=0;
	$deleted = 0;
	
	$sql="INSERT INTO hai_deadlycover_data VALUES('', '$posted', '$nama', '$jenis_kelamin', '$tanggal_lahir', '$alamat', '$kotaprovinsi', '$telp', '$email', '$kategori', '$y_url', '$y_height', '$y_width', '$y_title', '$y_iframe', '$y_author','$y_image', '$y_facebook', '$y_twitter', '$deleted')";
	$query = mysql_query($sql) or die(mysql_error());
	if($query){
		header('location: gallery.php');
		exit();
	}
}
mysql_close();
?>