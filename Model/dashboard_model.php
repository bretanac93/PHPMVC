<?php

class Dashboard_Model extends Model{

    function __construct() {
        parent::__construct();
    }
    function xhrInsert(){
        $text = $_POST['text'];
        
        $sth = $this->db->prepare('INSERT INTO data (text) VALUES (:text)');
        $sth->execute(array(':text' => $text));
        
        $data = array('text'=>$text, 'id'=>$this->db->lastInsertId());
        echo json_encode($data);
    }
    
    function xhrGetListings(){
        $query = $this->db->prepare('SELECT * FROM data');
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute();
        $data = $query->fetchAll();
        echo json_encode($data);
    }
    
    function xhrDeleteListing(){
        $id = $_POST['id'];
        $query = $this->db->prepare('DELETE FROM data WHERE id="'.$id.'"');
        $query->execute();
    }
}