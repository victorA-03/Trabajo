<?php
include 'db.php';

class User extends DB{
    
    private $Nombre;
    private $Usuario;


    public function userExists($user, $pass){
    
        $query = $this->connect()->prepare('SELECT * FROM prueba WHERE Usuario = :user AND Contraseña = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM prueba WHERE Usuario = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
      
            $this->usuario = $currentUser['Usuario'];
        }
    }
    
    public function getNombre(){
        return $this->usuario;
    }    
}
?>