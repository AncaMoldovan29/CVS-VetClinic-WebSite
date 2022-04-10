<?php

class TreatamentsController extends AppController
{
   public function __construct(){
    $this->init();
   }

   public function init(){
    session_start();
    if(isset($_SESSION['user'])){
        $data = [];
        $data['title'] = 'Tratamente';
        $data['firstPart'] = $this->render(APP_PATH.VIEWS.'tratamente.html');
        $data['secondPart'] = '';
        $data['text'] = '';
        echo $this->render(APP_PATH.VIEWS.'layoutAuth.html', $data);
    }
    else {
        $data = [];
        $data['title'] = 'Tratamente';
        $data['firstPart'] = $this->render(APP_PATH.VIEWS.'tratamente.html');
        $data['secondPart'] = '';
        $data['text'] = '';
        echo $this->render(APP_PATH.VIEWS.'layout.html', $data);
    }
}
}