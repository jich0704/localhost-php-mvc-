<?php require APP_ROOT . '/views/inc/header.php' ?>
<a href="<?php echo URL_ROOT; ?>/posts2" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
<div class="card card-body bg-light mt-5">
   <h3>학교과목 등록</h3>
   <p>게시글 편집</p>
   <form action="<?php echo URL_ROOT; ?>/posts2/edit/<?php echo $data['id']; ?>" method="post">
      <div class="form-group">
         <label for="title">제목 : <sup>*</sup></label>
         <input type="text" name="title" class="form-control form-control <?php echo (!empty($data['title_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['title']; ?>">
         <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
      </div>
      <div class="form-group">
         <label for="name">내용 : <sup>*</sup></label>
         <textarea name="body" rows="<?php substr_count( $data['body'], "\r\n" ); ?>" class="form-control form-control <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['body']; ?></textarea>
         <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
      </div>
      <input type="submit" class="btn btn-success" value="게시글 등록"/>
   </form>
</div>
<?php require APP_ROOT . '/views/inc/footer.php' ?>