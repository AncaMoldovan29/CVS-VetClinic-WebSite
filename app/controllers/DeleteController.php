<?php


class DeleteController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];

            $users = new UsersModel;
            $users->delUser( $id);

            header('Location:?page=users&deleteduser='.$id);
        }
       
        
     
     
    
      
      }  
}