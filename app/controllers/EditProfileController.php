
  <?php

class EditProfileController extends AppController
{
   public function __construct(){
    $this->init();
   }
   
      

   public function init(){
    $uName = $_POST['editUserName'];
    $uPass = $_POST['editPass1'];
    $uEmail = $_POST['editUserEmail'];
    session_start();
    $name = $_SESSION['user'];
    $user = new UsersModel;
    $user->editUser($name,$uName, $uEmail, $uPass);
    if($user->isAuth($uName, $uPass)){
        $_SESSION['user'] = $uName;
        $html= '<span class="badge rounded-pill bg-info text-dark">'.htmlspecialchars($uName).'</span>';
        $html2 = '<span class="badge bg-info">'.htmlspecialchars($uName).'</span>';
        echo "<h6 class='text-info '>USER : ".$html."</h6> ";
    if(isset($_SESSION['user'])){
        $html2 = '<span class="badge bg-info">'.$_SESSION['user'].'</span>';
        $data = [];
        $data['title'] = 'Homepage Client';
        $data['firstPart'] = 'Bine ai venit, '. $html2.'!';
        $data['user'] = 'Homepage Client';
        $data['text'] = '';
        $data['secondPart'] = '';
        echo $this->render(APP_PATH.VIEWS.'homeView.html', $data);
    }

}
}
}