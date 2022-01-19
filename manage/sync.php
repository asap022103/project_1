<?php
include '../config.php';
include 'auth.php';
//echo 'You are logged in as: ' . $data['username'];
$sql="SELECT * FROM hai_deadlycover_data WHERE deleted=0 ORDER BY id";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)){
	$id=$row['id'];
	$permalink=$baseurl.'gallery_detail.php?id='.$id;
	$jumlah_tweet='https://cdn.api.twitter.com/1/urls/count.json?url='.$permalink;
	$jumlah_like='http://graph.facebook.com/?id='.$permalink;
	
	$json1 = file_get_contents($jumlah_like);
	$data1 = json_decode($json1, TRUE);
	if($data1['shares']){
		$like = $data1['shares'];
	}else{
		$like = 0;
	}
	$json2 = file_get_contents($jumlah_tweet);
	$data2 = json_decode($json2, TRUE);
	$tweet = $data2['count'];
	
	mysql_query("update hai_deadlycover_data set `y_facebook`='$like', `y_twitter`='$tweet' WHERE id='$id'");
}
header('location:view.php');
?>