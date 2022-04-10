<?php


class DeleteAppController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){
        if(isset($_GET['id3'])){
            $id = $_GET['id3'];

            $users = new UsersModel;
            $users->delAppointment($id);

            header('Location:?page=adminappointments&deletedapp='.$id);
        }
        }
    }