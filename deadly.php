<?php
	include 'config.php';
	include 'share.php';
	mysql_close();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta property="og:title" content="Deadly Cover"/>
<meta property="og:image" content="images/deadsquad.jpg"/>
<meta property="og:site_name" content="Hai Online"/>
<meta property="og:description" content="<?php echo $fb_text; ?>"/>
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
<link href="style.css" rel="stylesheet" type="text/css">
<title>Deadly Cover Competition</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="chosen.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
	$(function() {
	$( "#datepicker" ).datepicker();
	});
</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3971242-3']);
  _gaq.push(['_setDomainName', '.hai-online.com']);
  _gaq.push(['_setAllowHash', false]);
  _gaq.push(['_trackPageview']);
  _gaq.push(['hai._setAccount', 'UA-17882222-1']);
  _gaq.push(['hai._setDomainName', '.hai-online.com']);
  _gaq.push(['hai._setAllowHash', false]);
  _gaq.push(['hai._trackPageview']);
  _gaq.push(['gm._setAccount', 'UA-19394023-1']);
  _gaq.push(['gm._setDomainName', 'none']);
  _gaq.push(['gm._setAllowLinker', true]);
  _gaq.push(['gm._trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>
<body>
	<div class="wrap">
    	<div class="content">
        	<div class="header"></div>
          <div class="menu">
       	    <div class="wrapmenu">
                	<div class="boxmenu"><a href="index.php"><img src="images/home.png" width="68" height="24" /></a></div>
                    <div class="boxmenu"><a href="deadly.php"><img src="images/deadly.png" width="174" height="24" /></a></div>
                    <div class="boxmenu"><a href="gallery.php"><img src="images/gallery.png" width="100" height="24" /></a></div>
                    <div class="boxmenu"><a href="info.php"><img src="images/info.png" width="56" height="24" /></a></div>
            </div>
          </div>
          <div id="form">
          	<center>
            	<?php
                if(isset($_GET['error']) && $_GET['error']==1){
				?>
                <p style="color:red;">Data tidak lengkap atau tidak valid, Silakan ulangi lagi.</p>
                <?php
				}
            	?>
                <?php
                if(isset($_GET['error']) && $_GET['error']==2){
				?>
                <p style="color:red;">Data URL Youtube salah, Silahkan ulangi lagi.</p>
                <?php
				}
            	?>
                <?php
                if(isset($_GET['error']) && $_GET['error']==3){
				?>
                <p style="color:red;">Data Youtube tidak bisa disimpan, Silahkan pilih URL Youtube lainnya.</p>
                <?php
				}
            	?>
                <h3>Submit video cover kamu sekarang juga!</h3><br /><br />
            	<form enctype="multipart/form-data" id="form-2" name="tes" method="post" action="insert.php">
                  	<table width="center" border="0" cellspacing="1" cellpadding="1">
                      <tr>
                        <td><input placeholder="Nama Band/Pribadi" type="text" name="nama" style="height:15px; width:380px;"></td>
                      </tr>
                      <tr>
                        <td>
                        	<input name="jenis_kelamin" id="kelamin1" type="radio" value="1"> <label for="kelamin1">Laki-laki</label> &nbsp; 
                            <input name="jenis_kelamin" id="kelamin0" type="radio" value="0"> <label for="kelamin0">Perempuan</label>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                      	<td><input placeholder="Tanggal Lahir" type="text" id="datepicker" name="tanggal_lahir" maxlength="30" style="height:15px; width:380px;"></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><textarea placeholder="Alamat" id="text" name="alamat" style="height:35px; width:380px;" rows="2"/></textarea></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>
                        <select placeholder="Pilih Kota Provinsi" name="kotaprovinsi" class="chosen-select" style="width:402px;">
								<option value=""></option>
                                <option value="Kabupaten Aceh Barat, Aceh">Kabupaten Aceh Barat, Aceh</option>
                                <option value="Kabupaten Aceh Barat Daya, Aceh">Kabupaten Aceh Barat Daya, Aceh</option>
                                <option value="Kabupaten Aceh Besar, Aceh">Kabupaten Aceh Besar, Aceh</option>
                                <option value="Kabupaten Aceh Jaya, Aceh">Kabupaten Aceh Jaya, Aceh</option>
                                <option value="Kabupaten Aceh Selatan, Aceh">Kabupaten Aceh Selatan, Aceh</option>
                                <option value="Kabupaten Aceh Singkil, Aceh">Kabupaten Aceh Singkil, Aceh</option>
                                <option value="Kabupaten Aceh Tamiang, Aceh">Kabupaten Aceh Tamiang, Aceh</option>
                                <option value="Kabupaten Aceh Tengah, Aceh">Kabupaten Aceh Tengah, Aceh</option>
                                <option value="Kabupaten Aceh Tenggara, Aceh">Kabupaten Aceh Tenggara, Aceh</option>
                                <option value="Kabupaten Aceh Timur, Aceh">Kabupaten Aceh Timur, Aceh</option>
                                <option value="Kabupaten Aceh Utara, Aceh">Kabupaten Aceh Utara, Aceh</option>
                                <option value="Kabupaten Bener Meriah, Aceh">Kabupaten Bener Meriah, Aceh</option>
                                <option value="Kabupaten Bireuen, Aceh">Kabupaten Bireuen, Aceh</option>
                                <option value="Kabupaten Gayo Lues, Aceh">Kabupaten Gayo Lues, Aceh</option>
                                <option value="Kabupaten Nagan Raya, Aceh">Kabupaten Nagan Raya, Aceh</option>
                                <option value="Kabupaten Pidie, Aceh">Kabupaten Pidie, Aceh</option>
                                <option value="Kabupaten Pidie Jaya, Aceh">Kabupaten Pidie Jaya, Aceh</option>
                                <option value="Kabupaten Simeulue, Aceh">Kabupaten Simeulue, Aceh</option>
                                <option value="Kota Banda Aceh, Aceh">Kota Banda Aceh, Aceh</option>
                                <option value="Kota Langsa, Aceh">Kota Langsa, Aceh</option>
                                <option value="Kota Lhokseumawe, Aceh">Kota Lhokseumawe, Aceh</option>
                                <option value="Kota Sabang, Aceh">Kota Sabang, Aceh</option>
                                <option value="Kota Subulussalam, Aceh">Kota Subulussalam, Aceh</option>
                                <option value="Kabupaten Asahan, Sumatera Utara">Kabupaten Asahan, Sumatera Utara</option>
                                <option value="Kabupaten Batu Bara, Sumatera Utara">Kabupaten Batu Bara, Sumatera Utara</option>
                                <option value="Kabupaten Dairi, Sumatera Utara">Kabupaten Dairi, Sumatera Utara</option>
                                <option value="Kabupaten Deli Serdang, Sumatera Utara">Kabupaten Deli Serdang, Sumatera Utara</option>
                                <option value="Kabupaten Humbang Hasundutan, Sumatera Utara">Kabupaten Humbang Hasundutan, Sumatera Utara</option>
                                <option value="Kabupaten Karo, Sumatera Utara">Kabupaten Karo, Sumatera Utara</option>
                                <option value="Kabupaten Labuhanbatu, Sumatera Utara">Kabupaten Labuhanbatu, Sumatera Utara</option>
                                <option value="Kabupaten Labuhanbatu Selatan, Sumatera Utara">Kabupaten Labuhanbatu Selatan, Sumatera Utara</option>
                                <option value="Kabupaten Labuhanbatu Utara, Sumatera Utara">Kabupaten Labuhanbatu Utara, Sumatera Utara</option>
                                <option value="Kabupaten Langkat, Sumatera Utara">Kabupaten Langkat, Sumatera Utara</option>
                                <option value="Kabupaten Mandailing Natal, Sumatera Utara">Kabupaten Mandailing Natal, Sumatera Utara</option>
                                <option value="Kabupaten Nias, Sumatera Utara">Kabupaten Nias, Sumatera Utara</option>
                                <option value="Kabupaten Nias Barat, Sumatera Utara">Kabupaten Nias Barat, Sumatera Utara</option>
                                <option value="Kabupaten Nias Selatan, Sumatera Utara">Kabupaten Nias Selatan, Sumatera Utara</option>
                                <option value="Kabupaten Nias Utara, Sumatera Utara">Kabupaten Nias Utara, Sumatera Utara</option>
                                <option value="Kabupaten Padang Lawas, Sumatera Utara">Kabupaten Padang Lawas, Sumatera Utara</option>
                                <option value="Kabupaten Padang Lawas Utara, Sumatera Utara">Kabupaten Padang Lawas Utara, Sumatera Utara</option>
                                <option value="Kabupaten Pakpak Bharat, Sumatera Utara">Kabupaten Pakpak Bharat, Sumatera Utara</option>
                                <option value="Kabupaten Samosir, Sumatera Utara">Kabupaten Samosir, Sumatera Utara</option>
                                <option value="Kabupaten Serdang Bedagai, Sumatera Utara">Kabupaten Serdang Bedagai, Sumatera Utara</option>
                                <option value="Kabupaten Simalungun, Sumatera Utara">Kabupaten Simalungun, Sumatera Utara</option>
                                <option value="Kabupaten Tapanuli Selatan, Sumatera Utara">Kabupaten Tapanuli Selatan, Sumatera Utara</option>
                                <option value="Kabupaten Tapanuli Tengah, Sumatera Utara">Kabupaten Tapanuli Tengah, Sumatera Utara</option>
                                <option value="Kabupaten Tapanuli Utara, Sumatera Utara">Kabupaten Tapanuli Utara, Sumatera Utara</option>
                                <option value="Kabupaten Toba Samosir, Sumatera Utara">Kabupaten Toba Samosir, Sumatera Utara</option>
                                <option value="Kota Binjai, Sumatera Utara">Kota Binjai, Sumatera Utara</option>
                                <option value="Kota Gunung Sitoli, Sumatera Utara">Kota Gunung Sitoli, Sumatera Utara</option>
                                <option value="Kota Medan, Sumatera Utara">Kota Medan, Sumatera Utara</option>
                                <option value="Kota Padang Sidempuan, Sumatera Utara">Kota Padang Sidempuan, Sumatera Utara</option>
                                <option value="Kota Pematangsiantar, Sumatera Utara">Kota Pematangsiantar, Sumatera Utara</option>
                                <option value="Kota Sibolga, Sumatera Utara">Kota Sibolga, Sumatera Utara</option>
                                <option value="Kota Tanjung Balai, Sumatera Utara">Kota Tanjung Balai, Sumatera Utara</option>
                                <option value="Kota Tebing Tinggi, Sumatera Utara">Kota Tebing Tinggi, Sumatera Utara</option>
                                <option value="Kabupaten Bengkulu Selatan, Bengkulu">Kabupaten Bengkulu Selatan, Bengkulu</option>
                                <option value="Kabupaten Bengkulu Tengah, Bengkulu">Kabupaten Bengkulu Tengah, Bengkulu</option>
                                <option value="Kabupaten Bengkulu Utara, Bengkulu">Kabupaten Bengkulu Utara, Bengkulu</option>
                                <option value="Kabupaten Benteng, Bengkulu">Kabupaten Benteng, Bengkulu</option>
                                <option value="Kabupaten Kaur, Bengkulu">Kabupaten Kaur, Bengkulu</option>
                                <option value="Kabupaten Kepahiang, Bengkulu">Kabupaten Kepahiang, Bengkulu</option>
                                <option value="Kabupaten Lebong, Bengkulu">Kabupaten Lebong, Bengkulu</option>
                                <option value="Kabupaten Mukomuko, Bengkulu">Kabupaten Mukomuko, Bengkulu</option>
                                <option value="Kabupaten Rejang Lebong, Bengkulu">Kabupaten Rejang Lebong, Bengkulu</option>
                                <option value="Kabupaten Seluma, Bengkulu">Kabupaten Seluma, Bengkulu</option>
                                <option value="Kota Bengkulu, Bengkulu">Kota Bengkulu, Bengkulu</option>
                                <option value="Kabupaten Batang Hari, Jambi">Kabupaten Batang Hari, Jambi</option>
                                <option value="Kabupaten Bungo, Jambi">Kabupaten Bungo, Jambi</option>
                                <option value="Kabupaten Kerinci, Jambi">Kabupaten Kerinci, Jambi</option>
                                <option value="Kabupaten Merangin, Jambi">Kabupaten Merangin, Jambi</option>
                                <option value="Kabupaten Muaro Jambi, Jambi">Kabupaten Muaro Jambi, Jambi</option>
                                <option value="Kabupaten Sarolangun, Jambi">Kabupaten Sarolangun, Jambi</option>
                                <option value="Kabupaten Tanjung Jabung Barat, Jambi">Kabupaten Tanjung Jabung Barat, Jambi</option>
                                <option value="Kabupaten Tanjung Jabung Timur, Jambi">Kabupaten Tanjung Jabung Timur, Jambi</option>
                                <option value="Kabupaten Tebo, Jambi">Kabupaten Tebo, Jambi</option>
                                <option value="Kota Jambi, Jambi">Kota Jambi, Jambi</option>
                                <option value="Kota Sungai Penuh, Jambi">Kota Sungai Penuh, Jambi</option>
                                <option value="Kabupaten Bengkalis, Riau">Kabupaten Bengkalis, Riau</option>
                                <option value="Kabupaten Indragiri Hilir, Riau">Kabupaten Indragiri Hilir, Riau</option>
                                <option value="Kabupaten Indragiri Hulu, Riau">Kabupaten Indragiri Hulu, Riau</option>
                                <option value="Kabupaten Kampar, Riau">Kabupaten Kampar, Riau</option>
                                <option value="Kabupaten Kuantan Singingi, Riau">Kabupaten Kuantan Singingi, Riau</option>
                                <option value="Kabupaten Pelalawan, Riau">Kabupaten Pelalawan, Riau</option>
                                <option value="Kabupaten Rokan Hilir, Riau">Kabupaten Rokan Hilir, Riau</option>
                                <option value="Kabupaten Rokan Hulu, Riau">Kabupaten Rokan Hulu, Riau</option>
                                <option value="Kabupaten Siak, Riau">Kabupaten Siak, Riau</option>
                                <option value="Kota Pekanbaru, Riau">Kota Pekanbaru, Riau</option>
                                <option value="Kota Dumai, Riau">Kota Dumai, Riau</option>
                                <option value="Kabupaten Kepulauan Meranti, Riau">Kabupaten Kepulauan Meranti, Riau</option>
                                <option value="Kabupaten Agam, Sumatera Barat">Kabupaten Agam, Sumatera Barat</option>
                                <option value="Kabupaten Dharmasraya, Sumatera Barat">Kabupaten Dharmasraya, Sumatera Barat</option>
                                <option value="Kabupaten Kepulauan Mentawai, Sumatera Barat">Kabupaten Kepulauan Mentawai, Sumatera Barat</option>
                                <option value="Kabupaten Lima Puluh Kota, Sumatera Barat">Kabupaten Lima Puluh Kota, Sumatera Barat</option>
                                <option value="Kabupaten Padang Pariaman, Sumatera Barat">Kabupaten Padang Pariaman, Sumatera Barat</option>
                                <option value="Kabupaten Pasaman, Sumatera Barat">Kabupaten Pasaman, Sumatera Barat</option>
                                <option value="Kabupaten Pasaman Barat, Sumatera Barat">Kabupaten Pasaman Barat, Sumatera Barat</option>
                                <option value="Kabupaten Pesisir Selatan, Sumatera Barat">Kabupaten Pesisir Selatan, Sumatera Barat</option>
                                <option value="Kabupaten Sijunjung, Sumatera Barat">Kabupaten Sijunjung, Sumatera Barat</option>
                                <option value="Kabupaten Solok, Sumatera Barat">Kabupaten Solok, Sumatera Barat</option>
                                <option value="Kabupaten Solok Selatan, Sumatera Barat">Kabupaten Solok Selatan, Sumatera Barat</option>
                                <option value="Kabupaten Tanah Datar, Sumatera Barat">Kabupaten Tanah Datar, Sumatera Barat</option>
                                <option value="Kota Bukittinggi, Sumatera Barat">Kota Bukittinggi, Sumatera Barat</option>
                                <option value="Kota Padang, Sumatera Barat">Kota Padang, Sumatera Barat</option>
                                <option value="Kota Padangpanjang, Sumatera Barat">Kota Padangpanjang, Sumatera Barat</option>
                                <option value="Kota Pariaman, Sumatera Barat">Kota Pariaman, Sumatera Barat</option>
                                <option value="Kota Payakumbuh, Sumatera Barat">Kota Payakumbuh, Sumatera Barat</option>
                                <option value="Kota Sawahlunto, Sumatera Barat">Kota Sawahlunto, Sumatera Barat</option>
                                <option value="Kota Solok, Sumatera Barat">Kota Solok, Sumatera Barat</option>
                                <option value="Kabupaten Banyuasin, Sumatera Selatan">Kabupaten Banyuasin, Sumatera Selatan</option>
                                <option value="Kabupaten Empat Lawang, Sumatera Selatan">Kabupaten Empat Lawang, Sumatera Selatan</option>
                                <option value="Kabupaten Lahat, Sumatera Selatan">Kabupaten Lahat, Sumatera Selatan</option>
                                <option value="Kabupaten Muara Enim, Sumatera Selatan">Kabupaten Muara Enim, Sumatera Selatan</option>
                                <option value="Kabupaten Musi Banyuasin, Sumatera Selatan">Kabupaten Musi Banyuasin, Sumatera Selatan</option>
                                <option value="Kabupaten Musi Rawas, Sumatera Selatan">Kabupaten Musi Rawas, Sumatera Selatan</option>
                                <option value="Kabupaten Ogan Ilir, Sumatera Selatan">Kabupaten Ogan Ilir, Sumatera Selatan</option>
                                <option value="Kabupaten Ogan Komering Ilir, Sumatera Selatan">Kabupaten Ogan Komering Ilir, Sumatera Selatan</option>
                                <option value="Kabupaten Ogan Komering Ulu, Sumatera Selatan">Kabupaten Ogan Komering Ulu, Sumatera Selatan</option>
                                <option value="Kabupaten Ogan Komering Ulu Selatan, Sumatera Selatan">Kabupaten Ogan Komering Ulu Selatan, Sumatera Selatan</option>
                                <option value="Kabupaten Ogan Komering Ulu Timur, Sumatera Selatan">Kabupaten Ogan Komering Ulu Timur, Sumatera Selatan</option>
                                <option value="Kota Lubuklinggau, Sumatera Selatan">Kota Lubuklinggau, Sumatera Selatan</option>
                                <option value="Kota Pagar Alam, Sumatera Selatan">Kota Pagar Alam, Sumatera Selatan</option>
                                <option value="Kota Palembang, Sumatera Selatan">Kota Palembang, Sumatera Selatan</option>
                                <option value="Kota Prabumulih, Sumatera Selatan">Kota Prabumulih, Sumatera Selatan</option>
                                <option value="Kabupaten Lampung Barat, Lampung">Kabupaten Lampung Barat, Lampung</option>
                                <option value="Kabupaten Lampung Selatan, Lampung">Kabupaten Lampung Selatan, Lampung</option>
                                <option value="Kabupaten Lampung Tengah, Lampung">Kabupaten Lampung Tengah, Lampung</option>
                                <option value="Kabupaten Lampung Timur, Lampung">Kabupaten Lampung Timur, Lampung</option>
                                <option value="Kabupaten Lampung Utara, Lampung">Kabupaten Lampung Utara, Lampung</option>
                                <option value="Kabupaten Mesuji, Lampung">Kabupaten Mesuji, Lampung</option>
                                <option value="Kabupaten Pesawaran, Lampung">Kabupaten Pesawaran, Lampung</option>
                                <option value="Kabupaten Pringsewu, Lampung">Kabupaten Pringsewu, Lampung</option>
                                <option value="Kabupaten Tanggamus, Lampung">Kabupaten Tanggamus, Lampung</option>
                                <option value="Kabupaten Tulang Bawang, Lampung">Kabupaten Tulang Bawang, Lampung</option>
                                <option value="Kabupaten Tulang Bawang Barat, Lampung">Kabupaten Tulang Bawang Barat, Lampung</option>
                                <option value="Kabupaten Way Kanan, Lampung">Kabupaten Way Kanan, Lampung</option>
                                <option value="Kota Bandar Lampung, Lampung">Kota Bandar Lampung, Lampung</option>
                                <option value="Kota Metro, Lampung">Kota Metro, Lampung</option>
                                <option value="Kabupaten Bangka, Kepulauan Bangka Belitung">Kabupaten Bangka, Kepulauan Bangka Belitung</option>
                                <option value="Kabupaten Bangka Barat, Kepulauan Bangka Belitung">Kabupaten Bangka Barat, Kepulauan Bangka Belitung</option>
                                <option value="Kabupaten Bangka Selatan, Kepulauan Bangka Belitung">Kabupaten Bangka Selatan, Kepulauan Bangka Belitung</option>
                                <option value="Kabupaten Bangka Tengah, Kepulauan Bangka Belitung">Kabupaten Bangka Tengah, Kepulauan Bangka Belitung</option>
                                <option value="Kabupaten Belitung, Kepulauan Bangka Belitung">Kabupaten Belitung, Kepulauan Bangka Belitung</option>
                                <option value="Kabupaten Belitung Timur, Kepulauan Bangka Belitung">Kabupaten Belitung Timur, Kepulauan Bangka Belitung</option>
                                <option value="Kota Pangkal Pinang, Kepulauan Bangka Belitung">Kota Pangkal Pinang, Kepulauan Bangka Belitung</option>
                                <option value="Kabupaten Bintan, Kepulauan Riau">Kabupaten Bintan, Kepulauan Riau</option>
                                <option value="Kabupaten Karimun, Kepulauan Riau">Kabupaten Karimun, Kepulauan Riau</option>
                                <option value="Kabupaten Kepulauan Anambas, Kepulauan Riau">Kabupaten Kepulauan Anambas, Kepulauan Riau</option>
                                <option value="Kabupaten Lingga, Kepulauan Riau">Kabupaten Lingga, Kepulauan Riau</option>
                                <option value="Kabupaten Natuna, Kepulauan Riau">Kabupaten Natuna, Kepulauan Riau</option>
                                <option value="Kota Batam, Kepulauan Riau">Kota Batam, Kepulauan Riau</option>
                                <option value="Kota Tanjung Pinang, Kepulauan Riau">Kota Tanjung Pinang, Kepulauan Riau</option>
                                <option value="Kabupaten Lebak, Banten">Kabupaten Lebak, Banten</option>
                                <option value="Kabupaten Pandeglang, Banten">Kabupaten Pandeglang, Banten</option>
                                <option value="Kabupaten Serang, Banten">Kabupaten Serang, Banten</option>
                                <option value="Kabupaten Tangerang, Banten">Kabupaten Tangerang, Banten</option>
                                <option value="Kota Cilegon, Banten">Kota Cilegon, Banten</option>
                                <option value="Kota Serang, Banten">Kota Serang, Banten</option>
                                <option value="Kota Tangerang, Banten">Kota Tangerang, Banten</option>
                                <option value="Kota Tangerang Selatan, Banten">Kota Tangerang Selatan, Banten</option>
                                <option value="Kabupaten Bandung, Jawa Barat">Kabupaten Bandung, Jawa Barat</option>
                                <option value="Kabupaten Bandung Barat, Jawa Barat">Kabupaten Bandung Barat, Jawa Barat</option>
                                <option value="Kabupaten Bekasi, Jawa Barat">Kabupaten Bekasi, Jawa Barat</option>
                                <option value="Kabupaten Bogor, Jawa Barat">Kabupaten Bogor, Jawa Barat</option>
                                <option value="Kabupaten Ciamis, Jawa Barat">Kabupaten Ciamis, Jawa Barat</option>
                                <option value="Kabupaten Cianjur, Jawa Barat">Kabupaten Cianjur, Jawa Barat</option>
                                <option value="Kabupaten Cirebon, Jawa Barat">Kabupaten Cirebon, Jawa Barat</option>
                                <option value="Kabupaten Garut, Jawa Barat">Kabupaten Garut, Jawa Barat</option>
                                <option value="Kabupaten Indramayu, Jawa Barat">Kabupaten Indramayu, Jawa Barat</option>
                                <option value="Kabupaten Karawang, Jawa Barat">Kabupaten Karawang, Jawa Barat</option>
                                <option value="Kabupaten Kuningan, Jawa Barat">Kabupaten Kuningan, Jawa Barat</option>
                                <option value="Kabupaten Majalengka, Jawa Barat">Kabupaten Majalengka, Jawa Barat</option>
                                <option value="Kabupaten Purwakarta, Jawa Barat">Kabupaten Purwakarta, Jawa Barat</option>
                                <option value="Kabupaten Subang, Jawa Barat">Kabupaten Subang, Jawa Barat</option>
                                <option value="Kabupaten Sukabumi, Jawa Barat">Kabupaten Sukabumi, Jawa Barat</option>
                                <option value="Kabupaten Sumedang, Jawa Barat">Kabupaten Sumedang, Jawa Barat</option>
                                <option value="Kabupaten Tasikmalaya, Jawa Barat">Kabupaten Tasikmalaya, Jawa Barat</option>
                                <option value="Kota Bandung, Jawa Barat">Kota Bandung, Jawa Barat</option>
                                <option value="Kota Banjar, Jawa Barat">Kota Banjar, Jawa Barat</option>
                                <option value="Kota Bekasi, Jawa Barat">Kota Bekasi, Jawa Barat</option>
                                <option value="Kota Bogor, Jawa Barat">Kota Bogor, Jawa Barat</option>
                                <option value="Kota Cimahi, Jawa Barat">Kota Cimahi, Jawa Barat</option>
                                <option value="Kota Cirebon, Jawa Barat">Kota Cirebon, Jawa Barat</option>
                                <option value="Kota Depok, Jawa Barat">Kota Depok, Jawa Barat</option>
                                <option value="Kota Sukabumi, Jawa Barat">Kota Sukabumi, Jawa Barat</option>
                                <option value="Kota Tasikmalaya, Jawa Barat">Kota Tasikmalaya, Jawa Barat</option>
                                <option value="Kabupaten Administrasi Kepulauan Seribu, DKI Jakarta">Kabupaten Administrasi Kepulauan Seribu, DKI Jakarta</option>
                                <option value="Kota Administrasi Jakarta Barat, DKI Jakarta">Kota Administrasi Jakarta Barat, DKI Jakarta</option>
                                <option value="Kota Administrasi Jakarta Pusat, DKI Jakarta">Kota Administrasi Jakarta Pusat, DKI Jakarta</option>
                                <option value="Kota Administrasi Jakarta Selatan, DKI Jakarta">Kota Administrasi Jakarta Selatan, DKI Jakarta</option>
                                <option value="Kota Administrasi Jakarta Timur, DKI Jakarta">Kota Administrasi Jakarta Timur, DKI Jakarta</option>
                                <option value="Kota Administrasi Jakarta Utara, DKI Jakarta">Kota Administrasi Jakarta Utara, DKI Jakarta</option>
                                <option value="Kabupaten Banjarnegara, Jawa Tengah">Kabupaten Banjarnegara, Jawa Tengah</option>
                                <option value="Kabupaten Banyumas, Jawa Tengah">Kabupaten Banyumas, Jawa Tengah</option>
                                <option value="Kabupaten Batang, Jawa Tengah">Kabupaten Batang, Jawa Tengah</option>
                                <option value="Kabupaten Blora, Jawa Tengah">Kabupaten Blora, Jawa Tengah</option>
                                <option value="Kabupaten Boyolali, Jawa Tengah">Kabupaten Boyolali, Jawa Tengah</option>
                                <option value="Kabupaten Brebes, Jawa Tengah">Kabupaten Brebes, Jawa Tengah</option>
                                <option value="Kabupaten Cilacap, Jawa Tengah">Kabupaten Cilacap, Jawa Tengah</option>
                                <option value="Kabupaten Demak, Jawa Tengah">Kabupaten Demak, Jawa Tengah</option>
                                <option value="Kabupaten Grobogan, Jawa Tengah">Kabupaten Grobogan, Jawa Tengah</option>
                                <option value="Kabupaten Jepara, Jawa Tengah">Kabupaten Jepara, Jawa Tengah</option>
                                <option value="Kabupaten Karanganyar, Jawa Tengah">Kabupaten Karanganyar, Jawa Tengah</option>
                                <option value="Kabupaten Kebumen, Jawa Tengah">Kabupaten Kebumen, Jawa Tengah</option>
                                <option value="Kabupaten Kendal, Jawa Tengah">Kabupaten Kendal, Jawa Tengah</option>
                                <option value="Kabupaten Klaten, Jawa Tengah">Kabupaten Klaten, Jawa Tengah</option>
                                <option value="Kabupaten Kudus, Jawa Tengah">Kabupaten Kudus, Jawa Tengah</option>
                                <option value="Kabupaten Magelang, Jawa Tengah">Kabupaten Magelang, Jawa Tengah</option>
                                <option value="Kabupaten Pati, Jawa Tengah">Kabupaten Pati, Jawa Tengah</option>
                                <option value="Kabupaten Pekalongan, Jawa Tengah">Kabupaten Pekalongan, Jawa Tengah</option>
                                <option value="Kabupaten Pemalang, Jawa Tengah">Kabupaten Pemalang, Jawa Tengah</option>
                                <option value="Kabupaten Purbalingga, Jawa Tengah">Kabupaten Purbalingga, Jawa Tengah</option>
                                <option value="Kabupaten Purworejo, Jawa Tengah">Kabupaten Purworejo, Jawa Tengah</option>
                                <option value="Kabupaten Rembang, Jawa Tengah">Kabupaten Rembang, Jawa Tengah</option>
                                <option value="Kabupaten Semarang, Jawa Tengah">Kabupaten Semarang, Jawa Tengah</option>
                                <option value="Kabupaten Sragen, Jawa Tengah">Kabupaten Sragen, Jawa Tengah</option>
                                <option value="Kabupaten Sukoharjo, Jawa Tengah">Kabupaten Sukoharjo, Jawa Tengah</option>
                                <option value="Kabupaten Tegal, Jawa Tengah">Kabupaten Tegal, Jawa Tengah</option>
                                <option value="Kabupaten Temanggung, Jawa Tengah">Kabupaten Temanggung, Jawa Tengah</option>
                                <option value="Kabupaten Wonogiri, Jawa Tengah">Kabupaten Wonogiri, Jawa Tengah</option>
                                <option value="Kabupaten Wonosobo, Jawa Tengah">Kabupaten Wonosobo, Jawa Tengah</option>
                                <option value="Kota Magelang, Jawa Tengah">Kota Magelang, Jawa Tengah</option>
                                <option value="Kota Pekalongan, Jawa Tengah">Kota Pekalongan, Jawa Tengah</option>
                                <option value="Kota Salatiga, Jawa Tengah">Kota Salatiga, Jawa Tengah</option>
                                <option value="Kota Semarang, Jawa Tengah">Kota Semarang, Jawa Tengah</option>
                                <option value="Kota Surakarta, Jawa Tengah">Kota Surakarta, Jawa Tengah</option>
                                <option value="Kota Tegal, Jawa Tengah">Kota Tegal, Jawa Tengah</option>
                                <option value="Kabupaten Bangkalan, Jawa Timur">Kabupaten Bangkalan, Jawa Timur</option>
                                <option value="Kabupaten Banyuwangi, Jawa Timur">Kabupaten Banyuwangi, Jawa Timur</option>
                                <option value="Kabupaten Blitar, Jawa Timur">Kabupaten Blitar, Jawa Timur</option>
                                <option value="Kabupaten Bojonegoro, Jawa Timur">Kabupaten Bojonegoro, Jawa Timur</option>
                                <option value="Kabupaten Bondowoso, Jawa Timur">Kabupaten Bondowoso, Jawa Timur</option>
                                <option value="Kabupaten Gresik, Jawa Timur">Kabupaten Gresik, Jawa Timur</option>
                                <option value="Kabupaten Jember, Jawa Timur">Kabupaten Jember, Jawa Timur</option>
                                <option value="Kabupaten Jombang, Jawa Timur">Kabupaten Jombang, Jawa Timur</option>
                                <option value="Kabupaten Kediri, Jawa Timur">Kabupaten Kediri, Jawa Timur</option>
                                <option value="Kabupaten Lamongan, Jawa Timur">Kabupaten Lamongan, Jawa Timur</option>
                                <option value="Kabupaten Lumajang, Jawa Timur">Kabupaten Lumajang, Jawa Timur</option>
                                <option value="Kabupaten Madiun, Jawa Timur">Kabupaten Madiun, Jawa Timur</option>
                                <option value="Kabupaten Magetan, Jawa Timur">Kabupaten Magetan, Jawa Timur</option>
                                <option value="Kabupaten Malang, Jawa Timur">Kabupaten Malang, Jawa Timur</option>
                                <option value="Kabupaten Mojokerto, Jawa Timur">Kabupaten Mojokerto, Jawa Timur</option>
                                <option value="Kabupaten Nganjuk, Jawa Timur">Kabupaten Nganjuk, Jawa Timur</option>
                                <option value="Kabupaten Ngawi, Jawa Timur">Kabupaten Ngawi, Jawa Timur</option>
                                <option value="Kabupaten Pacitan, Jawa Timur">Kabupaten Pacitan, Jawa Timur</option>
                                <option value="Kabupaten Pamekasan, Jawa Timur">Kabupaten Pamekasan, Jawa Timur</option>
                                <option value="Kabupaten Pasuruan, Jawa Timur">Kabupaten Pasuruan, Jawa Timur</option>
                                <option value="Kabupaten Ponorogo, Jawa Timur">Kabupaten Ponorogo, Jawa Timur</option>
                                <option value="Kabupaten Probolinggo, Jawa Timur">Kabupaten Probolinggo, Jawa Timur</option>
                                <option value="Kabupaten Sampang, Jawa Timur">Kabupaten Sampang, Jawa Timur</option>
                                <option value="Kabupaten Sidoarjo, Jawa Timur">Kabupaten Sidoarjo, Jawa Timur</option>
                                <option value="Kabupaten Situbondo, Jawa Timur">Kabupaten Situbondo, Jawa Timur</option>
                                <option value="Kabupaten Sumenep, Jawa Timur">Kabupaten Sumenep, Jawa Timur</option>
                                <option value="Kabupaten Trenggalek, Jawa Timur">Kabupaten Trenggalek, Jawa Timur</option>
                                <option value="Kabupaten Tuban, Jawa Timur">Kabupaten Tuban, Jawa Timur</option>
                                <option value="Kabupaten Tulungagung, Jawa Timur">Kabupaten Tulungagung, Jawa Timur</option>
                                <option value="Kota Batu, Jawa Timur">Kota Batu, Jawa Timur</option>
                                <option value="Kota Blitar, Jawa Timur">Kota Blitar, Jawa Timur</option>
                                <option value="Kota Kediri, Jawa Timur">Kota Kediri, Jawa Timur</option>
                                <option value="Kota Madiun, Jawa Timur">Kota Madiun, Jawa Timur</option>
                                <option value="Kota Malang, Jawa Timur">Kota Malang, Jawa Timur</option>
                                <option value="Kota Mojokerto, Jawa Timur">Kota Mojokerto, Jawa Timur</option>
                                <option value="Kota Pasuruan, Jawa Timur">Kota Pasuruan, Jawa Timur</option>
                                <option value="Kota Probolinggo, Jawa Timur">Kota Probolinggo, Jawa Timur</option>
                                <option value="Kota Surabaya, Jawa Timur">Kota Surabaya, Jawa Timur</option>
                                <option value="Kabupaten Bantul, Daerah Istimewa Yogyakarta">Kabupaten Bantul, Daerah Istimewa Yogyakarta</option>
                                <option value="Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta">Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta</option>
                                <option value="Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta">Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta</option>
                                <option value="Kabupaten Sleman, Daerah Istimewa Yogyakarta">Kabupaten Sleman, Daerah Istimewa Yogyakarta</option>
                                <option value="Kota Yogyakarta, Daerah Istimewa Yogyakarta">Kota Yogyakarta, Daerah Istimewa Yogyakarta</option>
                                <option value="Kabupaten Badung, Bali">Kabupaten Badung, Bali</option>
                                <option value="Kabupaten Bangli, Bali">Kabupaten Bangli, Bali</option>
                                <option value="Kabupaten Buleleng, Bali">Kabupaten Buleleng, Bali</option>
                                <option value="Kabupaten Gianyar, Bali">Kabupaten Gianyar, Bali</option>
                                <option value="Kabupaten Jembrana, Bali">Kabupaten Jembrana, Bali</option>
                                <option value="Kabupaten Karangasem, Bali">Kabupaten Karangasem, Bali</option>
                                <option value="Kabupaten Klungkung, Bali">Kabupaten Klungkung, Bali</option>
                                <option value="Kabupaten Tabanan, Bali">Kabupaten Tabanan, Bali</option>
                                <option value="Kota Denpasar, Bali">Kota Denpasar, Bali</option>
                                <option value="Kabupaten Bima, Nusa Tenggara Barat">Kabupaten Bima, Nusa Tenggara Barat</option>
                                <option value="Kabupaten Dompu, Nusa Tenggara Barat">Kabupaten Dompu, Nusa Tenggara Barat</option>
                                <option value="Kabupaten Lombok Barat, Nusa Tenggara Barat">Kabupaten Lombok Barat, Nusa Tenggara Barat</option>
                                <option value="Kabupaten Lombok Tengah, Nusa Tenggara Barat">Kabupaten Lombok Tengah, Nusa Tenggara Barat</option>
                                <option value="Kabupaten Lombok Timur, Nusa Tenggara Barat">Kabupaten Lombok Timur, Nusa Tenggara Barat</option>
                                <option value="Kabupaten Lombok Utara, Nusa Tenggara Barat">Kabupaten Lombok Utara, Nusa Tenggara Barat</option>
                                <option value="Kabupaten Sumbawa, Nusa Tenggara Barat">Kabupaten Sumbawa, Nusa Tenggara Barat</option>
                                <option value="Kabupaten Sumbawa Barat, Nusa Tenggara Barat">Kabupaten Sumbawa Barat, Nusa Tenggara Barat</option>
                                <option value="Kota Bima, Nusa Tenggara Barat">Kota Bima, Nusa Tenggara Barat</option>
                                <option value="Kota Mataram, Nusa Tenggara Barat">Kota Mataram, Nusa Tenggara Barat</option>
                                <option value="Kabupaten Kupang, Nusa Tenggara Timur">Kabupaten Kupang, Nusa Tenggara Timur</option>
                                <option value="Kabupaten Timor Tengah Selatan, Nusa Tenggara Timur">Kabupaten Timor Tengah Selatan, Nusa Tenggara Timur</option>
                                <option value="Kabupaten Timor Tengah Utara, Nusa Tenggara Timur">Kabupaten Timor Tengah Utara, Nusa Tenggara Timur</option>
                                <option value="Kabupaten Belu, Nusa Tenggara Timur">Kabupaten Belu, Nusa Tenggara Timur</option>
                                <option value="Kabupaten Alor, Nusa Tenggara Timur">Kabupaten Alor, Nusa Tenggara Timur</option>
                                <option value="Kabupaten Flores Timur, Nusa Tenggara Timur">Kabupaten Flores Timur, Nusa Tenggara Timur</option>
                                <option value="Kabupaten Sikka, Nusa Tenggara Timur">Kabupaten Sikka, Nusa Tenggara Timur</option>
                                <option value="Kabupaten Ende, Nusa Tenggara Timur">Kabupaten Ende, Nusa Tenggara Timur</option>
                                <option value="Kabupaten Ngada, Nusa Tenggara Timur">Kabupaten Ngada, Nusa Tenggara Timur</option>
                                <option value="Kabupaten Manggarai, Nusa Tenggara Timur">Kabupaten Manggarai, Nusa Tenggara Timur</option>
                                <option value="Kabupaten Sumba Timur, Nusa Tenggara Timur">Kabupaten Sumba Timur, Nusa Tenggara Timur</option>
                                <option value="Kabupaten Sumba Barat, Nusa Tenggara Timur">Kabupaten Sumba Barat, Nusa Tenggara Timur</option>
                                <option value="Kabupaten Lembata, Nusa Tenggara Timur">Kabupaten Lembata, Nusa Tenggara Timur</option>
                                <option value="Kabupaten Rote Ndao, Nusa Tenggara Timur">Kabupaten Rote Ndao, Nusa Tenggara Timur</option>
                                <option value="Kabupaten Manggarai Barat, Nusa Tenggara Timur">Kabupaten Manggarai Barat, Nusa Tenggara Timur</option>
                                <option value="Kabupaten Nagekeo, Nusa Tenggara Timur">Kabupaten Nagekeo, Nusa Tenggara Timur</option>
                                <option value="Kabupaten Sumba Tengah, Nusa Tenggara Timur">Kabupaten Sumba Tengah, Nusa Tenggara Timur</option>
                                <option value="Kabupaten Sumba Barat Daya, Nusa Tenggara Timur">Kabupaten Sumba Barat Daya, Nusa Tenggara Timur</option>
                                <option value="Kabupaten Manggarai Timur, Nusa Tenggara Timur">Kabupaten Manggarai Timur, Nusa Tenggara Timur</option>
                                <option value="Kabupaten Sabu Raijua, Nusa Tenggara Timur">Kabupaten Sabu Raijua, Nusa Tenggara Timur</option>
                                <option value="Kota Kupang, Nusa Tenggara Timur">Kota Kupang, Nusa Tenggara Timur</option>
                                <option value="Kabupaten Bengkayang, Kalimantan Barat">Kabupaten Bengkayang, Kalimantan Barat</option>
                                <option value="Kabupaten Kapuas Hulu, Kalimantan Barat">Kabupaten Kapuas Hulu, Kalimantan Barat</option>
                                <option value="Kabupaten Kayong Utara, Kalimantan Barat">Kabupaten Kayong Utara, Kalimantan Barat</option>
                                <option value="Kabupaten Ketapang, Kalimantan Barat">Kabupaten Ketapang, Kalimantan Barat</option>
                                <option value="Kabupaten Kubu Raya, Kalimantan Barat">Kabupaten Kubu Raya, Kalimantan Barat</option>
                                <option value="Kabupaten Landak, Kalimantan Barat">Kabupaten Landak, Kalimantan Barat</option>
                                <option value="Kabupaten Melawi, Kalimantan Barat">Kabupaten Melawi, Kalimantan Barat</option>
                                <option value="Kabupaten Pontianak, Kalimantan Barat">Kabupaten Pontianak, Kalimantan Barat</option>
                                <option value="Kabupaten Sambas, Kalimantan Barat">Kabupaten Sambas, Kalimantan Barat</option>
                                <option value="Kabupaten Sanggau, Kalimantan Barat">Kabupaten Sanggau, Kalimantan Barat</option>
                                <option value="Kabupaten Sekadau, Kalimantan Barat">Kabupaten Sekadau, Kalimantan Barat</option>
                                <option value="Kabupaten Sintang, Kalimantan Barat">Kabupaten Sintang, Kalimantan Barat</option>
                                <option value="Kota Pontianak, Kalimantan Barat">Kota Pontianak, Kalimantan Barat</option>
                                <option value="Kota Singkawang, Kalimantan Barat">Kota Singkawang, Kalimantan Barat</option>
                                <option value="Kabupaten Balangan, Kalimantan Selatan">Kabupaten Balangan, Kalimantan Selatan</option>
                                <option value="Kabupaten Banjar, Kalimantan Selatan">Kabupaten Banjar, Kalimantan Selatan</option>
                                <option value="Kabupaten Barito Kuala, Kalimantan Selatan">Kabupaten Barito Kuala, Kalimantan Selatan</option>
                                <option value="Kabupaten Hulu Sungai Selatan, Kalimantan Selatan">Kabupaten Hulu Sungai Selatan, Kalimantan Selatan</option>
                                <option value="Kabupaten Hulu Sungai Tengah, Kalimantan Selatan">Kabupaten Hulu Sungai Tengah, Kalimantan Selatan</option>
                                <option value="Kabupaten Hulu Sungai Utara, Kalimantan Selatan">Kabupaten Hulu Sungai Utara, Kalimantan Selatan</option>
                                <option value="Kabupaten Kotabaru, Kalimantan Selatan">Kabupaten Kotabaru, Kalimantan Selatan</option>
                                <option value="Kabupaten Tabalong, Kalimantan Selatan">Kabupaten Tabalong, Kalimantan Selatan</option>
                                <option value="Kabupaten Tanah Bumbu, Kalimantan Selatan">Kabupaten Tanah Bumbu, Kalimantan Selatan</option>
                                <option value="Kabupaten Tanah Laut, Kalimantan Selatan">Kabupaten Tanah Laut, Kalimantan Selatan</option>
                                <option value="Kabupaten Tapin, Kalimantan Selatan">Kabupaten Tapin, Kalimantan Selatan</option>
                                <option value="Kota Banjarbaru, Kalimantan Selatan">Kota Banjarbaru, Kalimantan Selatan</option>
                                <option value="Kota Banjarmasin, Kalimantan Selatan">Kota Banjarmasin, Kalimantan Selatan</option>
                                <option value="Kabupaten Barito Selatan, Kalimantan Tengah">Kabupaten Barito Selatan, Kalimantan Tengah</option>
                                <option value="Kabupaten Barito Timur, Kalimantan Tengah">Kabupaten Barito Timur, Kalimantan Tengah</option>
                                <option value="Kabupaten Barito Utara, Kalimantan Tengah">Kabupaten Barito Utara, Kalimantan Tengah</option>
                                <option value="Kabupaten Gunung Mas, Kalimantan Tengah">Kabupaten Gunung Mas, Kalimantan Tengah</option>
                                <option value="Kabupaten Kapuas, Kalimantan Tengah">Kabupaten Kapuas, Kalimantan Tengah</option>
                                <option value="Kabupaten Katingan, Kalimantan Tengah">Kabupaten Katingan, Kalimantan Tengah</option>
                                <option value="Kabupaten Kotawaringin Barat, Kalimantan Tengah">Kabupaten Kotawaringin Barat, Kalimantan Tengah</option>
                                <option value="Kabupaten Kotawaringin Timur, Kalimantan Tengah">Kabupaten Kotawaringin Timur, Kalimantan Tengah</option>
                                <option value="Kabupaten Lamandau, Kalimantan Tengah">Kabupaten Lamandau, Kalimantan Tengah</option>
                                <option value="Kabupaten Murung Raya, Kalimantan Tengah">Kabupaten Murung Raya, Kalimantan Tengah</option>
                                <option value="Kabupaten Pulang Pisau, Kalimantan Tengah">Kabupaten Pulang Pisau, Kalimantan Tengah</option>
                                <option value="Kabupaten Sukamara, Kalimantan Tengah">Kabupaten Sukamara, Kalimantan Tengah</option>
                                <option value="Kabupaten Seruyan, Kalimantan Tengah">Kabupaten Seruyan, Kalimantan Tengah</option>
                                <option value="Kota Palangka Raya, Kalimantan Tengah">Kota Palangka Raya, Kalimantan Tengah</option>
                                <option value="Kabupaten Berau, Kalimantan Timur">Kabupaten Berau, Kalimantan Timur</option>
                                <option value="Kabupaten Bulungan, Kalimantan Timur">Kabupaten Bulungan, Kalimantan Timur</option>
                                <option value="Kabupaten Kutai Barat, Kalimantan Timur">Kabupaten Kutai Barat, Kalimantan Timur</option>
                                <option value="Kabupaten Kutai Kartanegara, Kalimantan Timur">Kabupaten Kutai Kartanegara, Kalimantan Timur</option>
                                <option value="Kabupaten Kutai Timur, Kalimantan Timur">Kabupaten Kutai Timur, Kalimantan Timur</option>
                                <option value="Kabupaten Malinau, Kalimantan Timur">Kabupaten Malinau, Kalimantan Timur</option>
                                <option value="Kabupaten Nunukan, Kalimantan Timur">Kabupaten Nunukan, Kalimantan Timur</option>
                                <option value="Kabupaten Paser, Kalimantan Timur">Kabupaten Paser, Kalimantan Timur</option>
                                <option value="Kabupaten Penajam Paser Utara, Kalimantan Timur">Kabupaten Penajam Paser Utara, Kalimantan Timur</option>
                                <option value="Kabupaten Tana Tidung, Kalimantan Timur">Kabupaten Tana Tidung, Kalimantan Timur</option>
                                <option value="Kota Balikpapan, Kalimantan Timur">Kota Balikpapan, Kalimantan Timur</option>
                                <option value="Kota Bontang, Kalimantan Timur">Kota Bontang, Kalimantan Timur</option>
                                <option value="Kota Samarinda, Kalimantan Timur">Kota Samarinda, Kalimantan Timur</option>
                                <option value="Kota Tarakan, Kalimantan Timur">Kota Tarakan, Kalimantan Timur</option>
                                <option value="Kabupaten Boalemo, Gorontalo">Kabupaten Boalemo, Gorontalo</option>
                                <option value="Kabupaten Bone Bolango, Gorontalo">Kabupaten Bone Bolango, Gorontalo</option>
                                <option value="Kabupaten Gorontalo, Gorontalo">Kabupaten Gorontalo, Gorontalo</option>
                                <option value="Kabupaten Gorontalo Utara, Gorontalo">Kabupaten Gorontalo Utara, Gorontalo</option>
                                <option value="Kabupaten Pohuwato, Gorontalo">Kabupaten Pohuwato, Gorontalo</option>
                                <option value="Kota Gorontalo, Gorontalo">Kota Gorontalo, Gorontalo</option>
                                <option value="Kabupaten Bantaeng, Sulawesi Selatan">Kabupaten Bantaeng, Sulawesi Selatan</option>
                                <option value="Kabupaten Barru, Sulawesi Selatan">Kabupaten Barru, Sulawesi Selatan</option>
                                <option value="Kabupaten Bone, Sulawesi Selatan">Kabupaten Bone, Sulawesi Selatan</option>
                                <option value="Kabupaten Bulukumba, Sulawesi Selatan">Kabupaten Bulukumba, Sulawesi Selatan</option>
                                <option value="Kabupaten Enrekang, Sulawesi Selatan">Kabupaten Enrekang, Sulawesi Selatan</option>
                                <option value="Kabupaten Gowa, Sulawesi Selatan">Kabupaten Gowa, Sulawesi Selatan</option>
                                <option value="Kabupaten Jeneponto, Sulawesi Selatan">Kabupaten Jeneponto, Sulawesi Selatan</option>
                                <option value="Kabupaten Kepulauan Selayar, Sulawesi Selatan">Kabupaten Kepulauan Selayar, Sulawesi Selatan</option>
                                <option value="Kabupaten Luwu, Sulawesi Selatan">Kabupaten Luwu, Sulawesi Selatan</option>
                                <option value="Kabupaten Luwu Timur, Sulawesi Selatan">Kabupaten Luwu Timur, Sulawesi Selatan</option>
                                <option value="Kabupaten Luwu Utara, Sulawesi Selatan">Kabupaten Luwu Utara, Sulawesi Selatan</option>
                                <option value="Kabupaten Maros, Sulawesi Selatan">Kabupaten Maros, Sulawesi Selatan</option>
                                <option value="Kabupaten Pangkajene dan Kepulauan, Sulawesi Selatan">Kabupaten Pangkajene dan Kepulauan, Sulawesi Selatan</option>
                                <option value="Kabupaten Pinrang, Sulawesi Selatan">Kabupaten Pinrang, Sulawesi Selatan</option>
                                <option value="Kabupaten Sidenreng Rappang, Sulawesi Selatan">Kabupaten Sidenreng Rappang, Sulawesi Selatan</option>
                                <option value="Kabupaten Sinjai, Sulawesi Selatan">Kabupaten Sinjai, Sulawesi Selatan</option>
                                <option value="Kabupaten Soppeng, Sulawesi Selatan">Kabupaten Soppeng, Sulawesi Selatan</option>
                                <option value="Kabupaten Takalar, Sulawesi Selatan">Kabupaten Takalar, Sulawesi Selatan</option>
                                <option value="Kabupaten Tana Toraja, Sulawesi Selatan">Kabupaten Tana Toraja, Sulawesi Selatan</option>
                                <option value="Kabupaten Toraja Utara, Sulawesi Selatan">Kabupaten Toraja Utara, Sulawesi Selatan</option>
                                <option value="Kabupaten Wajo, Sulawesi Selatan">Kabupaten Wajo, Sulawesi Selatan</option>
                                <option value="Kota Makassar, Sulawesi Selatan">Kota Makassar, Sulawesi Selatan</option>
                                <option value="Kota Palopo, Sulawesi Selatan">Kota Palopo, Sulawesi Selatan</option>
                                <option value="Kota Parepare, Sulawesi Selatan">Kota Parepare, Sulawesi Selatan</option>
                                <option value="Kabupaten Bombana, Sulawesi Tenggara">Kabupaten Bombana, Sulawesi Tenggara</option>
                                <option value="Kabupaten Buton, Sulawesi Tenggara">Kabupaten Buton, Sulawesi Tenggara</option>
                                <option value="Kabupaten Buton Utara, Sulawesi Tenggara">Kabupaten Buton Utara, Sulawesi Tenggara</option>
                                <option value="Kabupaten Kolaka, Sulawesi Tenggara">Kabupaten Kolaka, Sulawesi Tenggara</option>
                                <option value="Kabupaten Kolaka Utara, Sulawesi Tenggara">Kabupaten Kolaka Utara, Sulawesi Tenggara</option>
                                <option value="Kabupaten Konawe, Sulawesi Tenggara">Kabupaten Konawe, Sulawesi Tenggara</option>
                                <option value="Kabupaten Konawe Selatan, Sulawesi Tenggara">Kabupaten Konawe Selatan, Sulawesi Tenggara</option>
                                <option value="Kabupaten Konawe Utara, Sulawesi Tenggara">Kabupaten Konawe Utara, Sulawesi Tenggara</option>
                                <option value="Kabupaten Muna, Sulawesi Tenggara">Kabupaten Muna, Sulawesi Tenggara</option>
                                <option value="Kabupaten Wakatobi, Sulawesi Tenggara">Kabupaten Wakatobi, Sulawesi Tenggara</option>
                                <option value="Kota Bau-Bau, Sulawesi Tenggara">Kota Bau-Bau, Sulawesi Tenggara</option>
                                <option value="Kota Kendari, Sulawesi Tenggara">Kota Kendari, Sulawesi Tenggara</option>
                                <option value="Kabupaten Banggai, Sulawesi Tengah">Kabupaten Banggai, Sulawesi Tengah</option>
                                <option value="Kabupaten Banggai Kepulauan, Sulawesi Tengah">Kabupaten Banggai Kepulauan, Sulawesi Tengah</option>
                                <option value="Kabupaten Buol, Sulawesi Tengah">Kabupaten Buol, Sulawesi Tengah</option>
                                <option value="Kabupaten Donggala, Sulawesi Tengah">Kabupaten Donggala, Sulawesi Tengah</option>
                                <option value="Kabupaten Morowali, Sulawesi Tengah">Kabupaten Morowali, Sulawesi Tengah</option>
                                <option value="Kabupaten Parigi Moutong, Sulawesi Tengah">Kabupaten Parigi Moutong, Sulawesi Tengah</option>
                                <option value="Kabupaten Poso, Sulawesi Tengah">Kabupaten Poso, Sulawesi Tengah</option>
                                <option value="Kabupaten Tojo Una-Una, Sulawesi Tengah">Kabupaten Tojo Una-Una, Sulawesi Tengah</option>
                                <option value="Kabupaten Toli-Toli, Sulawesi Tengah">Kabupaten Toli-Toli, Sulawesi Tengah</option>
                                <option value="Kabupaten Sigi, Sulawesi Tengah">Kabupaten Sigi, Sulawesi Tengah</option>
                                <option value="Kota Palu, Sulawesi Tengah">Kota Palu, Sulawesi Tengah</option>
                                <option value="Kabupaten Bolaang Mongondow, Sulawesi Utara">Kabupaten Bolaang Mongondow, Sulawesi Utara</option>
                                <option value="Kabupaten Bolaang Mongondow Selatan, Sulawesi Utara">Kabupaten Bolaang Mongondow Selatan, Sulawesi Utara</option>
                                <option value="Kabupaten Bolaang Mongondow Timur, Sulawesi Utara">Kabupaten Bolaang Mongondow Timur, Sulawesi Utara</option>
                                <option value="Kabupaten Bolaang Mongondow Utara, Sulawesi Utara">Kabupaten Bolaang Mongondow Utara, Sulawesi Utara</option>
                                <option value="Kabupaten Kepulauan Sangihe, Sulawesi Utara">Kabupaten Kepulauan Sangihe, Sulawesi Utara</option>
                                <option value="Kabupaten Kepulauan Siau Tagulandang Biaro, Sulawesi Utara">Kabupaten Kepulauan Siau Tagulandang Biaro, Sulawesi Utara</option>
                                <option value="Kabupaten Kepulauan Talaud, Sulawesi Utara">Kabupaten Kepulauan Talaud, Sulawesi Utara</option>
                                <option value="Kabupaten Minahasa, Sulawesi Utara">Kabupaten Minahasa, Sulawesi Utara</option>
                                <option value="Kabupaten Minahasa Selatan, Sulawesi Utara">Kabupaten Minahasa Selatan, Sulawesi Utara</option>
                                <option value="Kabupaten Minahasa Tenggara, Sulawesi Utara">Kabupaten Minahasa Tenggara, Sulawesi Utara</option>
                                <option value="Kabupaten Minahasa Utara, Sulawesi Utara">Kabupaten Minahasa Utara, Sulawesi Utara</option>
                                <option value="Kota Bitung, Sulawesi Utara">Kota Bitung, Sulawesi Utara</option>
                                <option value="Kota Kotamobagu, Sulawesi Utara">Kota Kotamobagu, Sulawesi Utara</option>
                                <option value="Kota Manado, Sulawesi Utara">Kota Manado, Sulawesi Utara</option>
                                <option value="Kota Tomohon, Sulawesi Utara">Kota Tomohon, Sulawesi Utara</option>
                                <option value="Kabupaten Majene, Sulawesi Barat">Kabupaten Majene, Sulawesi Barat</option>
                                <option value="Kabupaten Mamasa, Sulawesi Barat">Kabupaten Mamasa, Sulawesi Barat</option>
                                <option value="Kabupaten Mamuju, Sulawesi Barat">Kabupaten Mamuju, Sulawesi Barat</option>
                                <option value="Kabupaten Mamuju Utara, Sulawesi Barat">Kabupaten Mamuju Utara, Sulawesi Barat</option>
                                <option value="Kabupaten Polewali Mandar, Sulawesi Barat">Kabupaten Polewali Mandar, Sulawesi Barat</option>
                                <option value="Kabupaten Buru, Maluku">Kabupaten Buru, Maluku</option>
                                <option value="Kabupaten Buru Selatan, Maluku">Kabupaten Buru Selatan, Maluku</option>
                                <option value="Kabupaten Kepulauan Aru, Maluku">Kabupaten Kepulauan Aru, Maluku</option>
                                <option value="Kabupaten Maluku Barat Daya, Maluku">Kabupaten Maluku Barat Daya, Maluku</option>
                                <option value="Kabupaten Maluku Tengah, Maluku">Kabupaten Maluku Tengah, Maluku</option>
                                <option value="Kabupaten Maluku Tenggara, Maluku">Kabupaten Maluku Tenggara, Maluku</option>
                                <option value="Kabupaten Maluku Tenggara Barat, Maluku">Kabupaten Maluku Tenggara Barat, Maluku</option>
                                <option value="Kabupaten Seram Bagian Barat, Maluku">Kabupaten Seram Bagian Barat, Maluku</option>
                                <option value="Kabupaten Seram Bagian Timur, Maluku">Kabupaten Seram Bagian Timur, Maluku</option>
                                <option value="Kota Ambon, Maluku">Kota Ambon, Maluku</option>
                                <option value="Kota Tual, Maluku">Kota Tual, Maluku</option>
                                <option value="Kabupaten Halmahera Barat, Maluku Utara">Kabupaten Halmahera Barat, Maluku Utara</option>
                                <option value="Kabupaten Halmahera Tengah, Maluku Utara">Kabupaten Halmahera Tengah, Maluku Utara</option>
                                <option value="Kabupaten Halmahera Utara, Maluku Utara">Kabupaten Halmahera Utara, Maluku Utara</option>
                                <option value="Kabupaten Halmahera Selatan, Maluku Utara">Kabupaten Halmahera Selatan, Maluku Utara</option>
                                <option value="Kabupaten Kepulauan Sula, Maluku Utara">Kabupaten Kepulauan Sula, Maluku Utara</option>
                                <option value="Kabupaten Halmahera Timur, Maluku Utara">Kabupaten Halmahera Timur, Maluku Utara</option>
                                <option value="Kabupaten Pulau Morotai, Maluku Utara">Kabupaten Pulau Morotai, Maluku Utara</option>
                                <option value="Kota Ternate, Maluku Utara">Kota Ternate, Maluku Utara</option>
                                <option value="Kota Tidore Kepulauan, Maluku Utara">Kota Tidore Kepulauan, Maluku Utara</option>
                                <option value="Kabupaten Asmat, Papua">Kabupaten Asmat, Papua</option>
                                <option value="Kabupaten Biak Numfor, Papua">Kabupaten Biak Numfor, Papua</option>
                                <option value="Kabupaten Boven Digoel, Papua">Kabupaten Boven Digoel, Papua</option>
                                <option value="Kabupaten Deiyai, Papua">Kabupaten Deiyai, Papua</option>
                                <option value="Kabupaten Dogiyai, Papua">Kabupaten Dogiyai, Papua</option>
                                <option value="Kabupaten Intan Jaya, Papua">Kabupaten Intan Jaya, Papua</option>
                                <option value="Kabupaten Jayapura, Papua">Kabupaten Jayapura, Papua</option>
                                <option value="Kabupaten Jayawijaya, Papua">Kabupaten Jayawijaya, Papua</option>
                                <option value="Kabupaten Keerom, Papua">Kabupaten Keerom, Papua</option>
                                <option value="Kabupaten Kepulauan Yapen, Papua">Kabupaten Kepulauan Yapen, Papua</option>
                                <option value="Kabupaten Lanny Jaya, Papua">Kabupaten Lanny Jaya, Papua</option>
                                <option value="Kabupaten Mamberamo Raya, Papua">Kabupaten Mamberamo Raya, Papua</option>
                                <option value="Kabupaten Mamberamo Tengah, Papua">Kabupaten Mamberamo Tengah, Papua</option>
                                <option value="Kabupaten Mappi, Papua">Kabupaten Mappi, Papua</option>
                                <option value="Kabupaten Merauke, Papua">Kabupaten Merauke, Papua</option>
                                <option value="Kabupaten Mimika, Papua">Kabupaten Mimika, Papua</option>
                                <option value="Kabupaten Nabire, Papua">Kabupaten Nabire, Papua</option>
                                <option value="Kabupaten Nduga, Papua">Kabupaten Nduga, Papua</option>
                                <option value="Kabupaten Paniai, Papua">Kabupaten Paniai, Papua</option>
                                <option value="Kabupaten Pegunungan Bintang, Papua">Kabupaten Pegunungan Bintang, Papua</option>
                                <option value="Kabupaten Puncak, Papua">Kabupaten Puncak, Papua</option>
                                <option value="Kabupaten Puncak Jaya, Papua">Kabupaten Puncak Jaya, Papua</option>
                                <option value="Kabupaten Sarmi, Papua">Kabupaten Sarmi, Papua</option>
                                <option value="Kabupaten Supiori, Papua">Kabupaten Supiori, Papua</option>
                                <option value="Kabupaten Tolikara, Papua">Kabupaten Tolikara, Papua</option>
                                <option value="Kabupaten Waropen, Papua">Kabupaten Waropen, Papua</option>
                                <option value="Kabupaten Yahukimo, Papua">Kabupaten Yahukimo, Papua</option>
                                <option value="Kabupaten Yalimo, Papua">Kabupaten Yalimo, Papua</option>
                                <option value="Kota Jayapura, Papua">Kota Jayapura, Papua</option>
                                <option value="Kabupaten Fakfak, Papua Barat">Kabupaten Fakfak, Papua Barat</option>
                                <option value="Kabupaten Kaimana, Papua Barat">Kabupaten Kaimana, Papua Barat</option>
                                <option value="Kabupaten Manokwari, Papua Barat">Kabupaten Manokwari, Papua Barat</option>
                                <option value="Kabupaten Maybrat, Papua Barat">Kabupaten Maybrat, Papua Barat</option>
                                <option value="Kabupaten Raja Ampat, Papua Barat">Kabupaten Raja Ampat, Papua Barat</option>
                                <option value="Kabupaten Sorong, Papua Barat">Kabupaten Sorong, Papua Barat</option>
                                <option value="Kabupaten Sorong Selatan, Papua Barat">Kabupaten Sorong Selatan, Papua Barat</option>
                                <option value="Kabupaten Tambrauw, Papua Barat">Kabupaten Tambrauw, Papua Barat</option>
                                <option value="Kabupaten Teluk Bintuni, Papua Barat">Kabupaten Teluk Bintuni, Papua Barat</option>
                                <option value="Kabupaten Teluk Wondama, Papua Barat">Kabupaten Teluk Wondama, Papua Barat</option>
                                <option value="Kota Sorong, Papua Barat">Kota Sorong, Papua Barat</option>
                        </select>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><input placeholder="Telepon" type="text" name="telp" maxlength="45" style="height:15px; width:380px;"></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><input placeholder="Email" type="text" name="email" maxlength="45" style="height:15px; width:380px;"></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>
                        <select placeholder="Pilih Kategori" name="kategori" class="chosen-select-no-single" style="width:402px;">
                        	<option value=""></option>
							<option value="Band">Band</option>
							<option value="Guitar">Guitar</option>
							<option value="Bass">Bass</option>
                            <option value="Drum">Drum</option>
                        </select>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><input placeholder="Link Youtube" type="text" name="url" maxlength="45" style="height:15px; width:380px;"></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td class="buttons">
                        	<button type="submit" class="buttons" name="save"><img src="images/subm.png" width="68" height="22" /></button>
                        </td>
                      </tr>
              </table>
              </form>
            </center>
          </div>
        </div>
    </div>
<script src="chosen.jquery.js" type="text/javascript"></script>
<script type="text/javascript">
	var config = {
	  '.chosen-select'           : {},
	  '.chosen-select-deselect'  : {allow_single_deselect:true},
	  '.chosen-select-no-single' : {disable_search_threshold:10},
	  '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
	  '.chosen-select-width'     : {width:"95%"}
	}
		for (var selector in config) {
		  $(selector).chosen(config[selector]);
	}
</script>
<script type="text/javascript">
        $('input[type="text"][placeholder], textarea[placeholder]').each(function(){
        var o=$(this);
        if(o.attr('placeholder') != '') {
        o.addClass('IePlaceHolder');
           if($.trim(o.val())=='') {
              o.val(o.attr('placeholder')).css('color','#888888');
              o.addClass('IeIsEmpty');
              o.removeClass('focusedon');
           }
        }
    });

    $('.IePlaceHolder').focus(function(){
        var o = $(this);
        if(o.val() == o.attr('placeholder')) {
            o.css('color', '#666666');
            o.addClass('focusedon');
        } /* endIF */
    });

    $('.IePlaceHolder').blur(function (){
        var o = $(this);
        if($.trim(o.val())=='' || $.trim(o.val())==o.attr('placeholder')) {
            o.val(o.attr('placeholder'));
            o.css('color', '#888888');
            if(!o.hasClass('IeIsEmpty')) o.addClass('IeIsEmpty');
            o.removeClass('focusedon');
        }
    });

    $('.IePlaceHolder').on("keyup change paste", function(){
        var o=$(this);
        if($.trim(o.val())!='' && $.trim(o.val())!=o.attr('placeholder')) {
            o.css('color', '#111111');
            o.removeClass('IeIsEmpty');
        }
    })
    .on('keydown', function(){
        var o=$(this);
        if($.trim(o.val())!='' && $.trim(o.val())==o.attr('placeholder')) {
            o.val('');
        }
    })
    .on("click", function(){
        var o=$(this);
        if(o.val() != o.attr('placeholder')) return;
        if(this.setSelectionRange)
            {
                this.focus();
                this.setSelectionRange(0,0);
            }
            else if(this.createTextRange) {
            var r = this.createTextRange();
                r.collapse(true);
                r.moveEnd('character', 0);
                r.moveStart('character', 0);
                r.select();
            }
    });
    </script>
</body>
</html>