<?php

class AppointmentsController extends AppController
{
   public function __construct(){
    $this->init();
   }

   public function init(){
    session_start();
    if(isset($_SESSION['user'])){
        $data = [];
        $data['title'] = 'Programarile tale';
        $data['firstPart'] = $this->render(APP_PATH.VIEWS.'programari.html');
        $data['secondPart'] = ' ';
        $data['text'] = '';
        echo $this->render(APP_PATH.VIEWS.'layoutAuth.html', $data);
    }
    else {
        $data = [];
        $data['title'] = 'Programari';
        $data['firstPart'] = '<div class="d-flex justify-content-center align-items-center"><h2 class="text-info m-5">Poti face o programare la clinca noastra dupa ce iti faci un cont pe aceasta pagina !</h2></div>';
        $data['secondPart'] = ' ';
        $data['text'] = '';
        echo $this->render(APP_PATH.VIEWS.'layout.html', $data);
    }
}
}