<?php

class ReadmsgController extends AppController
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
        $id2 = $myUser['id'];
   
        $demail = $myUser['userEmail'];
        $html .= "<tr>";
        foreach($myUser as $valoare){
          $html .= '<td>'.htmlspecialchars($valoare).'</td>';
        }
        $html .= "<td> <a href='?page=delete2&id2=$id2 ' onclick='return confirm(\"Are you sure you delete message from $demail?\")' class='btn btn-danger'>Delete</a></td>
        
    </tr>";
}
$html .='</table>';
return $html;
}
  

   public function init(){
    
        $users = new UsersModel;

      if($users->showMsg()){
        $data = [];
        $data['title'] = 'Mesaje clienti';
        $data['firstPart'] = 'Mesaje clienti';
        $data['mainContent'] = $this->tabel($users->showMsg());
        $data['notification'] = '';
        if(isset($_GET['deletedmsg'])){
          $data['notification']= "<h3>Mesajul cu id-ul: ".$_GET['deletedmsg']. ' a fost sters</h3>';
        }
        echo $this->render(APP_PATH.VIEWS.'layoutAdmin.html', $data);
   }
    }
}