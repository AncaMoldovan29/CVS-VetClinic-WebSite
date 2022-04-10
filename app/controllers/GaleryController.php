<?php

class GaleryController extends AppController
{
   public function __construct(){
    $this->init();
   }

   public function init(){
    session_start();
    if(isset($_SESSION['user'])){
        $data = [];
        $data['title'] = 'Galerie Client';
        $data['firstPart'] = $this->render(APP_PATH.VIEWS.'gallery.html');
        $data['secondPart'] = ' ';
        $data['text'] = '';
        echo $this->render(APP_PATH.VIEWS.'layoutAuth.html', $data);
    }
    else {
        $data = [];
        $data['title'] = 'Galerie';
        $data['firstPart'] = $this->render(APP_PATH.VIEWS.'gallery.html');
        $data['secondPart'] = ' ';
        $data['text'] = '';
        echo $this->render(APP_PATH.VIEWS.'layout.html', $data);
    }
}
}