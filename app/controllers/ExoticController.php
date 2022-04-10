<?php

class ExoticController extends AppController
{
   public function __construct(){
    $this->init();
   }

   public function init(){
    session_start();
    if(isset($_SESSION['user'])){
        $data = [];
        $data['title'] = 'Animale exotice';
        $data['firstPart'] = $this->render(APP_PATH.VIEWS.'exotica.html');
        $data['secondPart'] = '<p>Un animal special are nevoie de o îngrijire specială! De neînțeles uneori pentru cei care sunt obișnuiți ca animalele de companie să fie doar câinii sau pisicile, o mare bucurie pentru cei care le aleg, animalele exotice au nevoie de o atenție specială. Nu de puține ori, posesorii lor se găsesc în situația de a nu găsi la cabinetele veterinare specialiști care să le dea sfaturi de îngrijire, care să le diagnosticheze sau să le trateze corespunzător.

        </p>';
        $data['text'] = '';
        echo $this->render(APP_PATH.VIEWS.'layoutAuth.html', $data);
    }
    else {
        $data = [];
        $data['title'] = 'Animale exotice';
        $data['firstPart'] = $this->render(APP_PATH.VIEWS.'exotica.html');
        $data['secondPart'] = '<p>Un animal special are nevoie de o îngrijire specială! De neînțeles uneori pentru cei care sunt obișnuiți ca animalele de companie să fie doar câinii sau pisicile, o mare bucurie pentru cei care le aleg, animalele exotice au nevoie de o atenție specială. Nu de puține ori, posesorii lor se găsesc în situația de a nu găsi la cabinetele veterinare specialiști care să le dea sfaturi de îngrijire, care să le diagnosticheze sau să le trateze corespunzător.

        </p>';
        $data['text'] = '';
        echo $this->render(APP_PATH.VIEWS.'layout.html', $data);
    }
}
}