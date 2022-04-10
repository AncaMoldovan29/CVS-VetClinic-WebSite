<?php

class SendappController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){
        
        $Name = $_POST['Name'];
        $petName = $_POST['petName'];
        $number = $_POST['nrTel'];
        $problem = $_POST['anamneza'];
        $ora = $_POST['ora'];
        $day = $_POST['ziua'];
        $specie = $_POST['specie'];
        $contact = $_POST['contact'];
        


        $user = new UsersModel;
        $user->addApp( $Name, $petName ,$number,$problem, $ora , $day , $specie , $contact);
        header('Location:?page=appointments');
    }
}