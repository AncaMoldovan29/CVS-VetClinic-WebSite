<?php

class AccomodationController extends AppController
{
   public function __construct(){
    $this->init();
   }

   public function init(){
    session_start();
    if(isset($_SESSION['user'])){
        $data = [];
        $data['title'] = 'Cazare';
        $data['firstPart'] = $this->render(APP_PATH.VIEWS.'cazare.html');
        $data['text'] = '';
        $data['secondPart'] = '';
        echo $this->render(APP_PATH.VIEWS.'layoutAuth.html', $data);
    }
    else {
        $data = [];
        $data['title'] = 'Cazare';
        $data['firstPart'] = $this->render(APP_PATH.VIEWS.'cazare.html');
        $data['text'] = '';
        $data['secondPart'] = '';
        echo $this->render(APP_PATH.VIEWS.'layout.html', $data);
    }
}
}