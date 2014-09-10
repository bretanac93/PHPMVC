<?php

class User_Model extends Model{

    function __construct() {
        parent::__construct();
    }
    public function userList(){
        
        $sth = $this->db->prepare('SELECT id, login, role FROM users');
        $sth->execute();
        return $sth->fetchAll();
    }
    
    public function userSingleList($id){
        $sth = $this->db->prepare('SELECT id, login, role FROM users WHERE id=:id');
        $sth->execute(array(
            ':id'=>$id
        ));
        return $sth->fetch();
    }
    
    public function create($data){
        
        $sth = $this->db->prepare('INSERT INTO users
               (`login`, `password`, `role`) 
               VALUES (:login, :password, :role)');
        
        $sth->execute(array(
            ':login' => $data['login'],
            ':password' => $data['password'],
            ':role' => $data['role']
        ));
    }
    
    public function editSave($data){
        
        $sth = $this->db->prepare('UPDATE users
               SET `login` = :login, `password` = :password, `role` = :role
               WHERE id=:id');
        
        $sth->execute(array(
            ':login' => $data['login'],
            ':password' => md5($data['password']),
            ':role' => $data['role']
        ));
    }
    
    public function delete($id){
        $sth = $this->db->prepare("DELETE FROM users WHERE id= :id");
        $sth->execute(array(
            ':id' => $id
        ));
    }
}