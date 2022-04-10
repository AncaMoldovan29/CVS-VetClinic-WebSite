<?php


class DeleteMessageController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){
        if(isset($_GET['id2'])){
            $id = $_GET['id2'];

            $users = new UsersModel;
            $users->delMessage($id);

            header('Location:?page=readmsg&deletedmsg='.$id);
        }
        }
    }