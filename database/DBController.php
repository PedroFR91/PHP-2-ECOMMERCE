<?php

class DBController
{
    //Databse connection
    protected $host='localhost';
    protected $user='root';
    protected $password='';
    protected $database='mobile_ecommerce';

    //connection property
    public $con=null;

    //call constructor
    public function __construct()
    {
        $this->con=mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error) {
            echo 'Fallo'.$this->con->connect_error;
        }
        echo 'Conexión con éxito';
    }
}


