<?php

namespace db;

use PDO;

class Db
{

    protected $db;

    function __construct()
    {
        $configDBPath = 'config/db.php';
        if (file_exists($configDBPath)) {
            $config = include_once $configDBPath;
            try {
                $this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['name'], $config['user'], $config['password']);
            } catch (PDOException $e) {
                die('Connection failed: ' . $e->getMessage());
            }
        }
    }

    // function query($sql)
    // {
    //     $this->db->query($sql);
    // }
}
