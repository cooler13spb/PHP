<?php


namespace Web\FrontController\Models;


use Web\FrontController\Core\DB;

class Service
{
    private $db;

    public function __construct()
    {
        $this->db=DB::getDB();
    }

    public function getAll()
    {
        return $this->db->getAll('SELECT * FROM service');
    }


    public function getCat($id_cat)
    {
        return $this->db->getAll('SELECT * FROM service where category='.$id_cat);
    }

   


}