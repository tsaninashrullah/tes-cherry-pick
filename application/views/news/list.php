<h2><?php echo $title; ?></h2>
<?php
if ($news) {?>
	<div class="row">
		<div class="col-lg-12 "><a href="create" class="pull-right"><button class="btn btn-success">BUAT</button></a></div>
	</div>
	<br>
	<table class="table table-hover table-responsive">
		<tr>
		<th>ID</th>
		<th>Title</th>
		<th>Slug</th>
		<th>Action</th>
		<?php foreach ($news as $news_item): ?>
			<tr>
				<td><?=$news_item['id']?></td>
				<td><?=$news_item['title']?></td>
				<td><?=$news_item['slug']?></td>
				<td>
					<a href="edit/<?=$news_item['slug']?>"><button class="btn btn-info"><i class="glyphicon glyphicon-asterisk"></i> EDIT</button></a>
					|
					<a href="delete/<?=$news_item['id']?>"><button class="btn btn-danger"><i class="glyphicon glyphicon-asterisk"></i> HAPUS</button></a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
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