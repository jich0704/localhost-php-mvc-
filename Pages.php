<?php


    class Pages extends Controller
    {

       public function index()
       {
          if( isLoggedIn() ) {
            $data = [
               'title' => '반갑습니다',
               'description' => '좋은 하루 되세요.'
           ];
            $this->view('pages/index', $data);
         }
          $data = [
              'title' => '로그인을 해주세요',
              'description' => '계정이 없으면 메뉴에서 회원가입을 해주세요'
          ];
          $this->view('pages/index', $data);
       }

       public function about()
       {
          $data = [
              'title' => 'About Us',
              'description' => 'App to share posts with other users'
          ];
          $this->view('pages/about',$data);
       }
    }