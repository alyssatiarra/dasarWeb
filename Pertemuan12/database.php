<?php
    class database{
        private $host = "localhost", $username = "root", $password = "", $database = "prakwebdb";
        public $conn;

        public function __construct()
        {
            // $this->conn = new mysqli
            //     ($this->host, 
            //     $this->username, 
            //     $this->database);
            $this->conn = new mysqli("localhost", "root", "", "prakwebdb");
            if($this->conn->connect_error){
                die("Connection failed: " . $this->conn->connect_error);
            }
        }
    }