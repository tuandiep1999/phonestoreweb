<?php 
	$this->fileLayout = "LayoutTrangTrong.php"
 ?>
 <style type="text/css">
 	.middle{margin-left: 200px;}
 	img{width: 800px;}
 	p{width: 800px;}
 </style>
 <div class="middle">
 	<h3><?php  echo $record->name; ?></h3>
 	<img src="asset/upload/news/<?php echo $record->photo; ?>"  >
 	<p><?php  echo $record->description; ?></p>
 	<p><?php  echo $record->content; ?></p>
 </div>