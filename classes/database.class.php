<?php
class Database
{
    
    private $servername = 'sql300.epizy.com';
    private $username = 'epiz_31963332';
    private $password = 'iVz3A78HjF';
    private $dbname = 'epiz_31963332_list';
    
    

    protected function connect()
    {
       $dsname = 'mysql:host=' . $this->servername . ';dbname=' . $this->dbname;
       $pdo = new PDO($dsname,$this->username,$this->password);
       $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
       return $pdo;
    }
}

/*
private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'productlist';
    
    */