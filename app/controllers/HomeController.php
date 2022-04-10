<?php

class HomeController extends AppController
{
   public function __construct(){
    $this->init();
   }

   public function init(){
    session_start();
    
    
   
    
    if(isset($_SESSION['user']) && $_SESSION['user'] =='admin'  ){
        $html2 = '<span class="badge bg-info">'.$_SESSION['user'].'</span>';
        $data = [];
        $data['title'] = 'Homepage Admin';
        $data['firstPart'] = 'Bine ai venit, '. $html2.'!';
        $data['mainContent'] = ' ';
        $data['notification'] = '';
        $data['text'] = '';
        $data['secondPart'] = '';
        echo $this->render(APP_PATH.VIEWS.'layoutAdmin.html', $data);

    }
    else if(isset($_SESSION['user'])){
        $html2 = '<span class="badge bg-info">'.$_SESSION['user'].'</span>';
        $data = [];
        $data['title'] = 'Homepage Client';
        $data['firstPart'] = 'Bine ai venit, '. $html2.'!';
        $data['user'] = 'Homepage Client';
        $data['text'] = '';
        $data['secondPart'] = '';
        echo $this->render(APP_PATH.VIEWS.'homeView.html', $data);
    }
    else {
        $data = [];
        echo $this->render(APP_PATH.VIEWS.'index.html', $data);
    }

}
}