<?php require APP_ROOT . '/views/inc/header.php' ?>
<a href="<?php echo URL_ROOT; ?>/posts2" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
<br/>
<h1><?php echo $data['post']->title; ?></h1>
<div class="bg-secondary text-white p-2 mb-3">
글쓴이 :  <?php echo $data['user']->name; ?> on <?php echo helper_format_date($data['post']->created_at); ?>
</div>
<p class="breakline"><?php echo $data['post']->body; ?></p>
<?php if( $data['post']->user_id == $_SESSION['user_id']) : ?>
<hr>
<a href="<?php echo URL_ROOT; ?>/posts2/edit/<?php echo $data['post']->id; ?>" class="btn btn-dark">편집</a>
<form class="pull-right" action="<?php echo URL_ROOT; ?>/posts2/delete/<?php echo $data['post']->id; ?>" method="post">
<input type="submit" value="삭제" class="btn btn-danger">
</form>
<?php endif; ?>
<?php require APP_ROOT . '/views/inc/footer.php' ?>
