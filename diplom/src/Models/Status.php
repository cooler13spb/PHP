<?php


namespace Web\FrontController\Models;


use Web\FrontController\Core\DB;

class Status
{
    private $db;

    public function __construct()
    {
        $this->db=DB::getDB();
    }


    public function getAddSt()
    {
        return $this->db->getAll('SELECT * FROM status');    
    }


}