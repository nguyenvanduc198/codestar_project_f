<?php

function getData($sql){
    require "models/db_connect.php";
   
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        $conn = null;
        return $result;
    
    } catch(PDOException $e) {
        $conn = null;
        echo $sql . "<br>" . $e->getMessage();
    }
}

function getDataSecure($sql, $input, $fetchAll =true){
    require "models/db_connect.php";
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute($input);
        $result = $fetchAll ? $stmt-> fetchAll(PDO::FETCH_ASSOC) :$stmt -> fetch(PDO::FETCH_ASSOC)  ;
        $stmt->closeCursor();
        $conn = null;
        return $result;
    
    } catch(PDOException $e) {
        $conn = null;
        echo $sql . "<br>" . $e->getMessage();
    }
}

function executeQuery($sql){
    require "models/db_connect.php";
    try {
        $conn->exec($sql);
        $conn = null;
        return $result;
    
    } catch(PDOException $e) {
        $conn = null;
        echo $sql . "<br>" . $e->getMessage();
    }
}

function executeQueryPrepare($sql,$input){
    require "models/db_connect.php";
    try{
        $stmt = $conn->prepare($sql);
       
        $result = $stmt->execute($input);
        $stmt->closeCursor();
        $conn = null;
        return $result;
        
    } catch(PDOException $e){
        $conn = null;
        echo $sql."<br>".$e->getMessage();
    }
}

?>