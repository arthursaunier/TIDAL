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
            $req = $bdd_ref->prepare('INSERT INTO "user" ("email", "password") VALUES (\''.$this->_email.'\',\''.$this->_password.'\')');
            print_r($bdd_ref->errorInfo());
            $req->execute(); // faire un if avec 3 = pour voir les erreurs car execute() car retourne un false 
        }catch(PDOException $e){
            print_r($e);
        }
    }
    public function login(){
        try{
            $bdd_ref = bdd::connect();
            $req = $bdd_ref->prepare('SELECT * from "user" where email= \'titi\'');
            $req->execute(); 
            $user= $req->fetch(PDO::FETCH_OBJ);

            if(password_verify($this->_password, $user->password)){
                return $user;
            }else{
                return false;
            }
        }catch(PDOException $e){
            print_r($e);
        }
    }
    
    
}