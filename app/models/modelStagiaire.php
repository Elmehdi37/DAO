<?php 


class Stagiaire {
    private $nom;
    private $prenom;
    private $age;
    private $login;
    private $password;

    // Construct

    public function __construct($nom=null,$prenom=null,$age=null,$login=null,$password=null){
        $this->nom      = $nom;
        $this->prenom   = $prenom;
        $this->age      = $age;
        $this->login    = $login;
        $this->password = $password;
    }

    // function Setters

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    // function Getters

    public function getNom(){
        return $this->nom;
    }

    public function getPrenom($prenom){
        return $this->prenom;
    }

    public function getAge(){
        return $this->age;
    }

    public function getLogin($login){
        return $this->login;
    }

    public function getPassword($password){
        return $this->password;
    }

    // function DAO

    public function database(){
        return new PDO("mysql:host=localhost;dbname=ofppt2;","root","");
    }

    public function create(){
        $request = $this->database()->prepare('INSERT INTO stagiaire VALUE (null,?,?,?,?,?)');
        $request->execute([$this->nom,$this->prenom,$this->login,$this->password,$this->age]);
        var_dump($this->database());
    }

    public function edit(){}

    public function destroy(){}
}