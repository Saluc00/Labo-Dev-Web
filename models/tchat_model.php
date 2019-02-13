<?php

class Home {
    
    public $id;
    public $salon;

    function __construct($id) {

        global $db;

        $reqMessage = $db->prepare('SELECT * FROM salon WHERE id = ?');
        $reqMessage-execute([$id]);
        $data = $reqMessage-fetch();

        $this->id = $id;
        $this->username = $data['username'];
        $this->message = $data['message'];
    }

    static function getAllMessage() {

        global $db;
        
        $reqMessages = $db->prepare('SELECT * FROM message');
        $reqMessafe->execute([]);
        return $reqMessages-fetchall();
    }

}