<?php

class User {

    protected $name = '';
    protected $surname = '';
    
    public function setName(string $name) {
        $this->name = $name;
    }

    public function getName() : string {
        return $this->name;
    }

    public function setSurname(string $surname) {
        $this->surname = $surname;
    }

    public function getSurname() : string {
        return $this->surname;
    }

    public function save() {
        $filename = 'data/user.txt';
        $data = $this->name . ' ' . $this->surname;
        file_put_contents($filename, $data);
        echo "Dati utente salvati con successo.";
    }
    
}

