<?php 
	include 'config.php';
	include 'nicePaging.php';
	include 'share.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta property="og:title" content="Deadly Cover"/>
<meta property="og:image" content="images/deadsquad.jpg"/>
<meta property="og:site_name" content="Hai Online"/>
<meta property="og:description" content="<?php echo $fb_text;?>"/>
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
<link href="style.css" rel="stylesheet" type="text/css">
<title>Deadly Cover Competition</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="chosen.css">
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
}(document, 'script', 'facebook-jssdk'));</script>
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
          	<div class="wrap_search_art">
                <div class="box_form_search" style="margin-left:40px;float:right;">
                    <label class="custom-select">
                        <select placeholder="All Categories" class="chosen-select-no-single" onChange="window.location.href='gallery.php?category='+this.value+'&page=1';">
                            <option value=""></option>
                            <option value="Band">Band</option>
                            <option value="Guitar">Guitar</option>
                            <option value="Bass">Bass</option>
                            <option value="Drum">Drum</option>
                        </select>
                    </label>                    
                </div>                   
            </div>
            <?php
				$paging=new nicePaging();
				$rowsPerPage=9;
				
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
				
				$result=$paging->pagerQuery("SELECT * FROM hai_deadlycover_data WHERE deleted=0 $category_sql", $rowsPerPage);
				
				$link="gallery.php?category=".$category;
				$paging->setMaxPages=5;
				$pages = $paging->createPaging($link);
				
				$sql="select * from hai_deadlycover_data WHERE deleted=0 $category_sql ORDER BY id DESC LIMIT $cPage,$rowsPerPage";
				//die($sql);
				$hasil=mysql_query($sql);	
				while($row=mysql_fetch_array($hasil)){
					$id=$row['id'];
					$y_image=$row['y_image'];
					$y_title=$row['y_title'];
			?>
                    <div class="wrap_gallery">
                        <div class="thumbnail_gallery">
                        	<a href="gallery_detail.php?id=<?php echo $id;?>">
                            <img src="<?php echo $y_image;?>" width="200" height="150" />
                            <div class="tittle_gallery"><?php echo $y_title;?></div>
                            </a>
                        </div>
                        <div class="socmed">
                        	<div style="float:left">
                            	<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $baseurl;?>gallery_detail.php?id=<?php echo $id;?>" data-text="<?php echo $tw_text;?>">Tweet</a>
                        	</div>
                                <div style="float:right">
                                    <div class="fb-like" data-href="<?php echo $baseurl;?>gallery_detail.php?id=<?php echo $id;?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                                </div>
                            <div style="clear:both"></div>
                        </div>
                    </div>
            <?php
				}
			?>
            <div style="clear:both"></div>
            <?php echo $pages; ?>
          </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
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
</body>
</html>
<?php
mysql_close();
?>