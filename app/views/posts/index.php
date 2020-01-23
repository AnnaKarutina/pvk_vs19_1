<?php
require_once '../app/views/inc/header.php';
?>
<h1><?php echo $data['title'];?></h1>
<p><?php echo $data['content'];?></p>
<?php foreach($data['posts'] as $post):?>
  <h3><?php echo $post->title; ?></h3>
  <p><?php echo $post->content; ?></p>
<?php endforeach ?>
<?php
require_once '../app/views/inc/footer.php';
?>