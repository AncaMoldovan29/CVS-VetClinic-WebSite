<?php

class LoginController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){
        $uName = $_POST['userName'];
        $uPass = $_POST['userPass'];
        

        $user = new UsersModel;
        if($user->isAuth($uName, $uPass)){
            
            
            session_start();
            $_SESSION['user'] = $uName;
            $html= '<span class="badge rounded-pill bg-info text-dark">'.htmlspecialchars($uName).'</span>';
            $html2 = '<span class="badge bg-info">'.htmlspecialchars($uName).'</span>';
            echo "<h6 class='text-info  '>USER : ".$html."</h6> ";
            if(isset($_SESSION['user']) && $_SESSION['user'] =='admin'){
                $data = [];
                $data['title'] = 'Homepage Admin';
                $data['firstPart'] = 'Bine ai venit, '. $html2.'!';
                $data['mainContent'] = ' ';
                $data['notification'] = '';
                echo $this->render(APP_PATH.VIEWS.'layoutAdmin.html', $data);
            }else{
                $data = [];
                $data['title'] = 'Homepage Client';
                $data['firstPart'] = 'Bine ai venit, '. $html2.'!';
                $data['text'] = '';
                $data['secondPart'] = '';
                echo $this->render(APP_PATH.VIEWS.'homeView.html', $data);
            }
            
        }
        else {
            echo "User neautentificat!";
            header("Refresh:3; url=?page=home");
        }


    }
}