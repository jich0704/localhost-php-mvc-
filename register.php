<?php require APP_ROOT . '/views/inc/header.php' ?>
<div class="row">
   <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
         <h3>계정 생성</h3>
         <p>회원가입 페이지 입니다. 아래 항목을 입력하세요</p>
         <form action="<?php echo URL_ROOT; ?>/users/register" method="post">
            <div class="form-group">
               <label for="name">이름: <sup>*</sup></label>
               <input type="text" name="name" class="form-control form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['name']; ?>">
               <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
            </div>
            <div class="form-group">
               <label for="name">이메일(아이디로 사용됩니다): <sup>*</sup></label>
               <input type="email" name="email" class="form-control form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['email']; ?>">
               <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
            </div>
            <div class="form-group">
               <label for="name">비밀번호: <sup>*</sup></label>
               <input type="password" name="password" class="form-control form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['password']; ?>">
               <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
            </div>
            <div class="form-group">
               <label for="name">비밀번호 확인: <sup>*</sup></label>
               <input type="password" name="confirm_password" class="form-control form-control <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['confirm_password']; ?>">
               <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
            </div>
            <div class="row">
               <div class="col">
                  <input type="submit" value="Register" class="btn btn-success btn-block"/>
               </div>
               <div class="col">
                  <a href="<?php echo URL_ROOT; ?>/users/login" class="btn btn-light btn-block">이미 계정이 있으시면 로그인하세요</a>
               </div>
            </div>
         </form>
   </div>
</div>
<?php require APP_ROOT . '/views/inc/footer.php' ?>

