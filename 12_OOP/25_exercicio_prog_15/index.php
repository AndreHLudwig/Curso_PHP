<?php


class Contact{
    public $name = "João";
    public $email = "joao@example.com";
    public $phone = "123456789";

    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPhone(){
        return $this->phone;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPhone($novoPhone){
        $this->phone = $novoPhone;
    }
}