<?php

class SignupController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){
        $uName = $_POST['signUpUserName'];
        $uPass = $_POST['signUpPass1'];
        $uEmail = $_POST['signUpUserEmail'];

        $user = new UsersModel;
        $user->addUser($uName, $uEmail, $uPass);
        
        if($user->isAuth($uName, $uPass)){
            
            session_start();
            $_SESSION['user'] = $uName;
            $html= '<span class="badge rounded-pill bg-info text-dark">'.htmlspecialchars($uName).'</span>';
            $html2 = '<span class="badge bg-info">'.htmlspecialchars($uName).'</span>';
            echo "<h6 class='text-info '>USER : ".$html."</h6> ";
            if(isset($_SESSION['user']) && $_SESSION['user'] =='admin'){
                $data = [];
                $data['title'] = 'Homepage Admin';
                $data['firstPart'] = '<h2>Bine ai venit!</h2>';
                $data['secondPart'] = '';
                $data['text'] = '';
                echo $this->render(APP_PATH.VIEWS.'layoutAdmin.php', $data);
            }else{
                $data = [];
                $data['title'] = 'Homepage Client';
                $data['firstPart'] = 'Bine ai venit, '. $html2.'!';
                $data['secondPart'] = '';
                $data['text'] = '';
                echo $this->render(APP_PATH.VIEWS.'homeView.html', $data);
            }
            
        }
        else {
            echo "User neautentificat!";
            header("Refresh:3; url=?page=home");
        }


    }
}