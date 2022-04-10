<?php

class AdminappointmentsController extends AppController
{
   public function __construct(){
    $this->init();
   }

  public function tabel($rez){
    $html = "<table class='table  col-5 text-info'><tr>";
    foreach(array_keys($rez[0]) as $cheie){
    $html .= '<th>'. htmlspecialchars($cheie).'</th>';
    }
    $html .= "<td>Delete message</td>
     
     </tr>";
    
    foreach($rez as $myUser){
        $id = $myUser['id'];
        $petName=$myUser['petName'];
   
        
        $html .= "<tr>";
        foreach($myUser as $valoare){
          $html .= '<td>'.htmlspecialchars($valoare).'</td>';
        }
        $html .= "<td> <a href='?page=deleteapp&id3=$id ' onclick='return confirm(\"Are you sure you want to delete $petName appointment ?\")' class='btn btn-danger'>Delete</a></td>
        
    </tr>";
}
$html .='</table>';
return $html;
}
  

   public function init(){
    
        $users = new UsersModel;

      if($users->showAppointments()){
        $data = [];
        $data['title'] = 'Programarile clientilor';
        $data['firstPart'] = '<h3>Programarile clientilor</h3>';
        $data['mainContent'] = $this->tabel($users->showAppointments());
        $data['notification'] = '';
        if(isset($_GET['deletedapp'])){
          $data['notification']= "<h3>Programarea cu id-ul: ".$_GET['deletedapp']. ' a fost stearsa.</h3>';
        }
        echo $this->render(APP_PATH.VIEWS.'layoutAdmin.html', $data);
   }
    }
}