<?php
include 'connect.php';
class Contato {
    
    public function getList() {
        global $pdo;
        $array = array();
        
        $sql = "SELECT * FROM usuarios";
        $sql = $pdo->query($sql);
        
        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
} 

