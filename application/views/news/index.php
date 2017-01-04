<?php
function custom_echo($x, $length)
{
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo $y;
  }
}
?>
<h2><?php echo $title; ?></h2>
<?php
if ($news) {?>
	<?php foreach ($news as $news_item): ?>
        <h3><?php echo $news_item['title']; ?></h3>
        <div class="main">
                <?php custom_echo($news_item['text'], 400); ?> .........
        </div>
	        <a class="btn btn-info" href="<?php echo site_url('news/'.$news_item['slug']); ?>">Read More</a>
	<?php endforeach; ?>
<?php
}else{?>
	<div class="row">
	  <div class="col-lg-12">
	    <h1 align="center">DATA TIDAK ADA, Mari <a href="news/create"><button class="btn btn-info">BUAT</button></a></h1>
	  </div>
	</div>
<?php
}
?>