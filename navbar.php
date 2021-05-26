<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
   <a class="navbar-brand" href="<?php echo URL_ROOT;?>"><?php echo SITE_NAME; ?></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>
   
   <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URL_ROOT;?>/pages">홈으로</a>
          </li>
          <?php if( isset($_SESSION['user_id'])) : ?>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo URL_ROOT;?>/users">사용자관리</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo URL_ROOT;?>/posts">게시판</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo URL_ROOT;?>/posts2">출석체크</a>
          </li>
          <!-- <li class="nav-item">
              <a class="nav-link" href="<?php echo URL_ROOT;?>/posts3">진로고민</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo URL_ROOT;?>/posts4">취미</a>
          </li> -->
          <?php endif; ?>



      </ul>
      
      <ul class="navbar-nav mr-right">
          <?php if( isset($_SESSION['user_id'])) : ?>
          <span class="navbar-text pl-5">님 로그인 완료:</span>
          <li class="nav-item dropdown pr-5">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user"></i> <?php echo $_SESSION['user_name'];?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?php echo URL_ROOT;?>/users/changepassword"><i class="fa fa-key"></i> 비밀번호 바꾸기</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo URL_ROOT;?>/users/logout"><i class="fa fa-power-off"></i> 로그아웃</a>
              </div>
          </li>
          <?php else : ?>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo URL_ROOT;?>/users/login">로그인</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="<?php echo URL_ROOT;?>/users/register"><i class="fa fa-sign-in"></i> 회원가입 </a>
          </li>
          <?php endif; ?>
      </ul>
</nav>
