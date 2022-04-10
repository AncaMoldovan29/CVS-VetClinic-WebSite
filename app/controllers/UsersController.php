<?php

class UsersController extends AppController
{
   public function __construct(){
    $this->init();
   }

  public function tabel($rez){
    $html = "<table class='table  col-5 text-info'><tr>";
    foreach(array_keys($rez[0]) as $cheie){
    $html .= '<th>'. htmlspecialchars($cheie).'</th>';
    }
    $html .= "<td>Delete user</td>
     
     </tr>";
    
    foreach($rez as $myUser){
        $id = $myUser['id'];
        $dname = $myUser['userName'];
        $demail = $myUser['userEmail'];
        $html .= "<tr>";
        foreach($myUser as $valoare){
          $html .= '<td>'.htmlspecialchars($valoare).'</td>';
        }
        $html .= "<td> <a href='?page=delete&id=$id' onclick='return confirm(\"Are you sure you delete $dname?\")' class='btn btn-danger'>Delete</a></td>
        
    </tr>";
}
$html .='</table>';
return $html;
}
  

   public function init(){

 
    
    
        $users = new UsersModel;

      if($users->showUsers()){
        $data = [];
        $data['title'] = 'Useri clienti';
        $data['firstPart'] = '<h3>Useri</h3>';
        $data['mainContent'] = $this->tabel($users->showUsers()); 
        $data['notification'] = '';
        if(isset($_GET['deleteduser'])){
          $data['notification']= "<h3>Userul cu id: ".$_GET['deleteduser']. ' a fost sters</h3>';
        }

        echo $this->render(APP_PATH.VIEWS.'layoutAdmin.html', $data);
   }
    }
}