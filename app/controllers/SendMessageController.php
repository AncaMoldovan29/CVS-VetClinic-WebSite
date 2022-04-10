<?php

class SendMessageController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){
        
        $email = $_POST['emailm'];
        $message = $_POST['message'];

        $user = new UsersModel;
        $user->addMessage($email, $message);
        session_start();
        if(isset($_SESSION['user'])){
            header('Location:?page=contact');
        }else{
            include APP_PATH.VIEWS.'index.html';
        }
    }
}