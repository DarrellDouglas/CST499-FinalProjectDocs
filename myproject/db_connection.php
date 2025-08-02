<?php
class DBConnection {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'employee_portal';

    public function connect() {
        $con = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
        return $con;
    }

    public function executeSelectQuery($con, $sql) {
        $result = $con->query($sql);
        return $result;
    }

    public function executeQuery($con, $sql) {
        if ($con->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}
?>