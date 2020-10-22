<?php
class ConnectionManager {

  public function getConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "root";  
    $dbname = "phriscoskitt";
    
    return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);     
  }
 
}
?>