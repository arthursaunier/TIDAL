<?php
require_once('../bdd.php');
class User{
    public $_email;
    public $_password;

    public function __construct(string $email, string $password)
    {
        $this->_email = $email;
        $this->_password = $password;
    }

    public function register(){
        try{
        $this->_password = password_hash($this->_password, PASSWORD_BCRYPT);
        $bdd_ref = bdd::connect();

            $req = $bdd_ref->prepare('INSERT INTO  user (email, password) VALUES ("'.$this->_email.'","'.$this->_password.'")');
            print_r($this);
            $req->execute(); // faire un if avec 3 = pour voir les erreurs car execute() car retourne un false 
        }catch(Exception $e){
            print_r($e);
        }
        
       /* $data = array();

        while($row = $req->fetch()){
            array_push($data, $row);
        }
*/
    
    }
}