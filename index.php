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
          <div class="deadsquad"></div>
            <div class="submit"><a href="deadly.php"><img src="images/submit.png" width="200" height="60" /></a></div>
        </div>
    </div>
</body>
</html>