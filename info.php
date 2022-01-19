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
       		<h2>INFO & RULES</h2>
                <ol>
                	<li>Wajib follow twitter <a href="https://twitter.com/HaiMagazine">@HaiMagazine</a> dan <a href="https://twitter.com/DEADSQUAD_Band">@DEADSQUAD_Band</a></li>
                	<li>Ada 4 kategori cover video yang dilombakan: Kategori Cover Band, Kategori Gitar, Kategori Bass dan Kategori Drum</li>
                	<li>Pemenang kategori Gitar, Bass dan Drum ditentukan oleh likes terbanyak dan penilaian Tim Hai &amp; Deadsquad</li>
                	<li>Pemenang kategori Gitar, Bass dan Drum akan mendapatkan uang cash Rp 500 ribu, Voucher Dhrone Clothing Rp 250 ribu plus T-Shirt dan CD DeadSquad terbaru, masing-masing 1 pemenang per-kategorinya</li>
                	<li>Pemenang cover band ditentukan oleh tim Hai &amp; Deadsquad akan mendapat uang Rp 2,5 juta, kesempatan manggung di konser launching Deadsquad tanggal 22 Desember 2013 (Untuk pemenang luar kota, transportasi dan akomodasi ditanggung sendiri)</li>
                	<li>Keputusan pemenang bersifat mutlak dan tidak dapat diganggu gugat</li>
                	<li>Untuk info kontes bisa ditanyakan langsung via <a href="https://twitter.com/HaiMagazine">@HaiMagazine</a></li>
            </ol>
          </div>
        </div>
    </div>
</body>
</html>