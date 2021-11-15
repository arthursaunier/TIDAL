<?php
require_once('bdd.php');
class User{
    public $_email;
    public $_password;
    public $_prenom;
    public $_nom;

    public function __construct(string $email, string $password, string $nom = null, string $prenom = null)
    { 
        $this->_email = $email;
        $this->_password = $password;
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        

    }

    public function register(){
        try{
        $this->_password = password_hash($this->_password, PASSWORD_BCRYPT);
        $bdd_ref = bdd::connect();
            $req = $bdd_ref->prepare('INSERT INTO "user" ("email", "password", "prenom", "nom") VALUES (?,?,?,?)');            
            print_r($bdd_ref->errorInfo());
            $req->execute(array($this->_email,$this->_password,$this->_prenom,$this->_nom)); 
            print_r($req);
        }catch(PDOException $e){
            print_r($e);
        }
    }
    public function login(){
        try{
            $bdd_ref = bdd::connect();
            $req = $bdd_ref->prepare('SELECT * from "user" where email= ?');
            $req->execute(array($this->_email)); 
            $user= $req->fetch(PDO::FETCH_OBJ);
           
            if(password_verify($this->_password, $user->password)){
                return $user;
            }else{
                return false;
            }
        }catch(PDOException $e){
            //print_r($e);
        }
    }
    
    
}