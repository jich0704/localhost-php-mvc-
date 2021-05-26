<?php require APP_ROOT . '/views/inc/header.php' ?>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h3>새로운 회원 가입</h3>
            <form action="<?php echo URL_ROOT; ?>/users/add" method="post">
                <div class="form-group">
                    <label for="name">이름 : <sup>*</sup></label>
                    <input type="text" name="name" class="form-control form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['name']; ?>">
                    <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="name">이메일 : <sup>*</sup></label>
                    <input type="email" name="email" class="form-control form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['email']; ?>">
                    <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="name">비밀번호 : <sup>*</sup></label>
                    <input type="password" name="password" class="form-control form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['password']; ?>">
                    <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="name">비밀번호(확인): <sup>*</sup></label>
                    <input type="password" name="confirm_password" class="form-control form-control <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['confirm_password']; ?>">
                    <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
                </div>
                 <input type="submit" value="저장" class="btn btn-success"/>
            </form>
        </div>
    </div>
    <?php require APP_ROOT . '/views/inc/footer.php' ?>

