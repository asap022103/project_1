<?php 
	include 'config.php';
	include 'share.php';
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
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
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
		<?php
			$id=mysql_real_escape_string($_GET ['id']);
			$sql="select * from hai_deadlycover_data WHERE id='$id' AND deleted=0 ORDER BY id DESC LIMIT 9";
			$hasil=mysql_query($sql);
			
			$row=mysql_fetch_array($hasil);
			$id=$row['id'];
			$y_iframe=$row['y_iframe'];
			$y_title=$row['y_title']
		?>
			<div class="video">
				<?php echo $y_iframe;?>
			</div>
			<div class="tittle_detail"><?php echo $y_title;?></div>
			<div class="socmed_detail">
				<div style="float:left">
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $baseurl;?>gallery_detail.php?id=<?php echo $id;?>" data-text="<?php echo $tw_text;?>">Tweet</a>
				</div>
				<div style="float:right">
					<div class="fb-like" data-href="<?php echo $baseurl;?>gallery_detail.php?id=<?php echo $id;?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
				</div>
				<div style="clear:both"></div>
			</div>
			<div class="komentar">
				<h2>KOMENTAR</h2>
				<div id="disqus_thread"></div>
				<?php
					if($_SERVER['SERVER_NAME']=='localhost' || $_SERVER['SERVER_NAME']=='127.0.0.1' || $_SERVER['SERVER_NAME']=='202.43.165.134'){
						echo '<p>Disqus tidak difungsikan pada mode development.</p>';
					}else{
				?>
				<script type="text/javascript">
				var disqus_identifier = "<?php echo $id;?>";
				var disqus_shortname = "deadlycover";
				var disqus_url = "<?php echo $baseurl;?>gallery_detail.php?id=<?php echo $id;?>";
				var disqus_title = "<?php echo str_replace('"',"''",$y_title);?>";
				(function() {
					var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
					dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
					(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
				})();
				</script>
				<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
				<?php
					}
				?>
			</div>
		</div>
    </div>
</div>
</body>
</html>
<?php
mysql_close();
?>