<?php

class Usuario{

    public function login($email,$senha){
        global $conn;

        $sql = "SELECT * FROM pessoas WHERE email = :email AND senha = :senha";
        $sql = $conn->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", $senha);
        $sql->execute();
    }

}




?>