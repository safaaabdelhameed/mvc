<?php

namespace MVC\models;

use MVC\core\model;

class user extends model{

    public function GetAllUsers(){
        // $data  = model::db()->rows("SELECT * FROM user");  /* دي ظاهر فيها خطأ ومش عارفة ليه */
        $data  = model::db()->run("SELECT * FROM user")->fetchAll();
        // $data  = model::db()->insert('user',['name' => 'noooor', 'email'=>'noor@n.com', 'password'=>'123' ]);
        return $data;
    }

    public function GetUser($email,$password){
        $data  = model::db()->row("SELECT * FROM user WHERE `email` = ? && `password` = ? ",[$email,$password]);
        // $data  = model::db()->row("SELECT * FROM user WHERE `email` = '$email' && `password` = '$password' ");
        return $data;
    }

    public function InsertUser($username,$email,$password){
        $data  = model::db()->insert('user', ['name' => $username, 'email'=>$email, 'password'=>$password]);
        return $data;
    }

}