<?php

class AppController 
{
    protected $routes = [
        'home' => 'HomeController',
        'about' => 'AboutController',
        'contact' => 'ContactController',
        'service' => 'ServiceController',
        'grooming' => 'GroomingController',
        'galery' => 'GaleryController',
        'login' => 'LoginController',
        'logout' => 'LogoutController',
        'signup' => 'SignupController',
        'sendmessage' => 'SendMessageController',
        'message' => 'MessageController',
        'users' => 'UsersController',
        'delete' => 'DeleteController',
        'readmsg' => 'ReadmsgController',
        'adminappointments' => 'AdminappointmentsController',
        'sendapp' => 'SendappController',
        'trataments' => 'TreatamentsController',
        'accomodation' => 'AccomodationController',
        'exotic' => 'ExoticController',
        'delete2' => 'DeleteMessageController',
        'deleteapp' => 'DeleteAppController',
        'editprof' => 'EditProfileController',
        'appointments' => 'AppointmentsController',

    ];



    public function __construct(){
        
        $this->init();
    }

    public function init(){
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }
        else $page = 'home'; //landing page

        if(array_key_exists($page, $this->routes)){
            $className = $this->routes[$page];
        }
        else $className =  $this->routes['home'];

         new $className;
    }


    public function render($page, $data=array()){
        $template = file_get_contents($page);

        preg_match_all("[{{\w+}}]", $template, $matches);

       

        foreach($matches[0] as $value){
    
            $item = str_replace("{{", "", $value);
            $item = str_replace("}}", "", $item);

            if(array_key_exists($item, $data)){
                $template = str_replace($value, $data[$item], $template);
            }
        }
        return $template;
    }
   
}