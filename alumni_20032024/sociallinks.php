<?php /*?><div class="blog-single-social">
	<?php $url = "http" . (isset($_SERVER['HTTPS']) ? 's' : '') . "://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING']; ?>
    
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
    <a href="https://twitter.com/home?status=<?php echo stripslashes( $title ). " ". $url; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
	<?php if (false) {?>
    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
	<?php }?>
</div><?php */?>