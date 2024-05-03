<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/KpopIdol/config/database.php';

class Contact{
    static function select(){
        global $conn;
        $sql = "SELECT * FROM contact";
        $result = $conn-> query($sql);
        $arr = array();

        if ($result-> num_rows> 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value) {
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }
    static function insert($ID, $Phone, $Idols_name) {
        global $conn;
        $sql = "INSERT INTO contact(ID,Phone,Idols_name) VALUES (?,?,?)";
        $stmt = $conn-> prepare($sql);
        $stmt-> bind_param ('sss', $ID, $Phone, $Idols_name);
        $stmt->execute();
        $result = $stmt-> affected_rows > 0 ? true : false; 
        return $result;
    }
    static function update($ID, $Phone, $Idols_name) {
        global $conn;
        $sql = "UPDATE contact SET Phone=?, Idols_name=? WHERE ID=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss', $Phone, $Idols_name, $ID);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }
    
    static function delete($ID) {
        global $conn;
        $sql = "DELETE FROM contact WHERE ID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $ID);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }
    
}