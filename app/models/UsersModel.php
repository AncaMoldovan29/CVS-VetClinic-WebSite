<?php



class UsersModel extends DBModel
{
    protected $name;
    protected $email;
    protected $password;

    public function __construct($userName ='Anca', $userEmail='aanca@gmail.com', $pass='123'){
        $this->name = $userName;
        $this->email = $userEmail;
        $this->password = $pass;

    }

    public function details(){
        return $this->name
        . ' are e-mailul '
        . $this->email;
    }

    public function showUsers(){
        $q = 'SELECT * FROM users_proiect';
        $result = $this->db()->query($q);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    
    public function showMsg(){
        $q = 'SELECT * FROM mesaj_client';
        $result = $this->db()->query($q);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function showService(){
        $q = 'SELECT * FROM servicii';
        $result = $this->db()->query($q);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function showAppointments(){
        $q = 'SELECT * FROM programari';
        $result = $this->db()->query($q);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function addUser($uName , $uEmail, $uPass){
      
            $passH = password_hash($uPass, PASSWORD_DEFAULT);
            $interog = "INSERT INTO `users_proiect`(`userName`, `userEmail`, `hashedPass`) VALUES (?,?,?)";
            $myPrep = $this->db()->prepare($interog);
            $myPrep->bind_param("sss",$uName , $uEmail, $passH);
            $myPrep->execute();
            $myPrep->close();
       
        }
    public function delUser($id){
        
        $quer = "DELETE FROM `users_proiect` WHERE `id` = '$id' ";
        $result2 = $this->db()->query($quer);
        
        
    }    
    public function delMessage($id){
        
        $quer = "DELETE FROM `mesaj_client` WHERE `id` = '$id' ";
        $result2 = $this->db()->query($quer);
        
        
    } 
    public function delAppointment($id){
        
        $quer = "DELETE FROM `programari` WHERE `id` = '$id' ";
        $result2 = $this->db()->query($quer);
        
        
    } 

    public function isAuth($uName, $uPass){
        $q = "SELECT * FROM `users_proiect` WHERE `userName` = ? ";
        $myPrep = $this->db()->prepare($q);
        $myPrep->bind_param("s",$uName);
        $myPrep->execute();
        $result = $myPrep->get_result()->fetch_assoc();
        $myPrep->close();
        if($result){
            if(password_verify($uPass, $result['hashedPass'])){
                return true;
            }
            else return false;
        }
        return false;
    }
    
    public function addMessage( $email, $message){
      
     
        $interog = "INSERT INTO `mesaj_client`( `userEmail`, `message`) VALUES ('$email' , '$message')";
        $rez = $this->db()->query($interog);
       
   
    }
    public function addApp( $Name, $petName ,$number,$problem, $ora , $day , $specie , $contact){
      
     
        $interog = "INSERT INTO `programari`( `userName`, `petName`, `number` , `problem` , `ora` ,`zi`, `specie`, `contact`) VALUES ('$Name', '$petName' ,'$number','$problem', '$ora' , '$day' , '$specie' , '$contact')";
        $rez = $this->db()->query($interog);
       
   
    }
    
    public function editUser($name,$uName, $uEmail, $uPass){
       
        $passH = password_hash($uPass, PASSWORD_DEFAULT);
        $qu = "UPDATE users_proiect SET  `userName`='$uName', `userEmail` ='$uEmail', `hashedPass` ='$passH'  WHERE  `userName` = '$name'  ";
         $resul = $this->db()->query($qu);
    



}
    
        
    

}