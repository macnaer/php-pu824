<?php
class DB
{
    private $conn;
    function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "usersdb";
        $this->conn = new mysqli($servername, $username, $password, $db);
    }
    function CheckEmail($email)
    {
        $sql = "SELECT * FROM `tbluser` WHERE `Email`='$email' ";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0)
            return false;
        else
            return true;
    }
    public function Login($email)
    {
        $login_result = $this->conn->query("SELECT * FROM `tbluser` WHERE Email = '$email' ");
        $login_data = mysqli_fetch_assoc($login_result);
        return $login_data;


        //  return $login_result;
    }
    function Register($Email, $Password)
    {
        $this->conn->query("INSERT INTO tbluser (Email, HashPassword) VALUES ('$Email', '$Password')");
    }
    function __destruct()
    {
        $this->conn->close();
    }
}
