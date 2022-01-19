<?php 
include '../config.php';
include '../nicePaging.php';
include 'auth.php';
//echo 'You are logged in as: ' . $data['username'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="paging.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View</title>
<style type="text/css">
<!--
.wrap {
	width:960px;
	margin:20px auto;
	font-size:80%;
	font-family:Arial, Helvetica, sans-serif;
}
-->
</style></head>

<body>
<div class="wrap">
	All Categories:
	<select class="chosen-select-no-single" onChange="window.location.href='view.php?category='+this.value+'&page=1';" style="width:80px;">
		<option selected="selected">--Pilih--</option>
		<option value="Band">Band</option>
		<option value="Guitar">Guitar</option>
		<option value="Bass">Bass</option>
		<option value="Drum">Drum</option>
		<option value="">Semua Kategori</option>
	</select>
	<a href="sync.php">Sinkron FB Like &amp; Tweet</a>
	<table width="100%" height="58" border="1" cellpadding="0" cellspacing="1" bordercolor="#CCCCCC">
	  <tr bgcolor="#99CCFF">
		<th scope="col">Nama Band/Pribadi</th>
		<th scope="col">Email</th>
		<th scope="col">Phone</th>
		<th scope="col">Alamat</th>
		<th scope="col">Kota</th>
		<th scope="col">Provinsi</th>
		<th scope="col">Facebook</th>
		<th scope="col">Twitter</th>
		<th scope="col">Kategori</th>
		<th scope="col">Video</th>
		<th scope="col">Deleted</th>
	  </tr>
	  <tr>
	  
		<?php
					$paging=new nicePaging();
					$rowsPerPage=10;
					
					if(isset($_GET['page']) && is_numeric($_GET['page'])==true && $_GET['page']>0){
						$page=mysql_real_escape_string($_GET['page']);
					}else{
						$page=1;
					}
					$cPage=($page-1)*$rowsPerPage;
					
					if(isset($_GET['category']) && $_GET['category']!=''){
						$category=mysql_real_escape_string($_GET['category']);
						$category_sql="AND kategori LIKE '" . $category . "'";
					}else{
						$category=null;
						$category_sql=null;
					}
					
					$result=$paging->pagerQuery("SELECT * FROM hai_deadlycover_data WHERE deleted=0 $category_sql ", $rowsPerPage);
					
					$link="view.php?category=".$category;
					$paging->setMaxPages=5;
					$pages = $paging->createPaging($link);
					
					$sql="select * from hai_deadlycover_data WHERE deleted=0 $category_sql ORDER BY id DESC LIMIT $cPage,$rowsPerPage";
					//die($sql);
					$hasil=mysql_query($sql);	
					while($row=mysql_fetch_array($hasil)){
						$id=$row['id'];
						$nama=$row['nama'];
						$email=$row['email'];
						$telp=$row['telp'];
						$alamat=$row['alamat'];
						$kategori=$row['kategori'];
						$y_image=$row['y_image'];
						$y_title=$row['y_title'];
						$y_facebook=$row['y_facebook'];
						$y_twitter=$row['y_twitter'];
						$kotaprovinsi=$row['kotaprovinsi'];
						$kotaprovinsi_array=explode(',', $kotaprovinsi);
						$kota=$kotaprovinsi_array[0];
						$provinsi=$kotaprovinsi_array[1];
			?>
	  <tr> 
		<td><center><?php echo htmlentities($nama);?></center></td>
		<td><center><?php echo htmlentities($email);?></center></td>
		<td><center><?php echo htmlentities($telp);?></center></td>
		<td><center><?php echo htmlentities($alamat);?></center></td>
		<td><center><?php echo htmlentities($kota);?></center></td>
		<td><center><?php echo htmlentities($provinsi);?></center></td>
		<td><center><?php echo htmlentities($y_facebook);?></center></td>
		<td><center><?php echo htmlentities($y_twitter);?></center></td>
		<td><center><?php echo htmlentities($kategori);?></center></td>
		<td>
			<center>
				<a href="../gallery_detail.php?id=<?php echo $id;?>">
					<img src="<?php echo $y_image;?>" align="middle" width="200" height="150"/>
					<div><?php echo $y_title;?></div>
				</a>
			</center>
		</td>
		<td>
			<center>
				<a href="update.php?id=<?php echo $id;?>&amp;page=<?php echo $page;?>" onClick="return confirm('Apakah Anda yakin?')">Delete</a>
			</center>
		</td>
	  </tr>
		<?php	
			}
		?>
		<?php echo $pages; ?>
	  </tr>
  </table>
</div>
</body>
</html>