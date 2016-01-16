<?php

class DB
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = 'root';
    private $base = 'highwood';
    public $mysqli;

    public function __construct()
    {
        $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->base);
        if (!$this->mysqli) {
            throw new Exception ('Нет подключения к базе!');
        }
        $this->mysqli->query('SET NAMES utf8');
    }

    public function getAll()
    {


        $sql = "SELECT * FROM  students";
        $result = mysqli_query($this->mysqli, $sql);


        if (!$result) {
            throw new Exception ('No table');
        }
        for ($i = 0; $i < $result->num_rows; $i++) {
            $row[] = $result->fetch_assoc();
        }

        return $row;
    }


    public function add($data)
    {

        $sql = "INSERT INTO students (name, sername, department) VALUES ('".$data['name']."','".$data['sername']."','".$data['department']."')";
        $result = mysqli_query($this->mysqli, $sql);
        if (!$result)
            throw new Exception('Ошибка базы данных!');
        return true;
    }


}