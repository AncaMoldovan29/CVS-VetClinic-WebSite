<?php

class ServiceController extends AppController
{
   public function __construct(){
    $this->init();
   }
   
   public function tabel($rez){
       $html ="<div class='col-10 m-5 m-auto'>";
    $html .= "<table class='table  col-10 text-info'><tr>";
    foreach(array_keys($rez[0]) as $cheie){
    $html .= '<th>'. htmlspecialchars($cheie).'</th>';
    }
    $html .= "</tr>";
    
    foreach($rez as $myUser){
        
   
        
        $html .= "<tr>";
        foreach($myUser as $valoare){
          $html .= '<td>'.htmlspecialchars($valoare).'</td>';
        }
        
        $html .= "</tr>";
}
$html .='</table>';
$html .='</div>';
return $html;
}

   public function init(){
    session_start();
    $users = new UsersModel;
    if(isset($_SESSION['user'])){
        $data = [];
        $data['title'] = 'Servicii Client';
        $data['firstPart'] = $this->tabel($users->showService());
        $data['secondPart'] = ' ';
        $data['text'] = '';
        echo $this->render(APP_PATH.VIEWS.'layoutAuth.html', $data);
    }
    else {
        $data = [];
        $data['title'] = 'Servicii';
        $data['firstPart'] = $this->tabel($users->showService());
        $data['secondPart'] = ' ';
        $data['text'] = '';
        echo $this->render(APP_PATH.VIEWS.'layout.html', $data);
    }
}
}
   