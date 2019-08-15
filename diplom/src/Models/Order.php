<?php


namespace Web\FrontController\Models;


use Web\FrontController\Core\DB;

class Order
{
    private $db;

    public function __construct()
    {
        $this->db=DB::getDB();
    }

    public function getAll()
    {
        return $this->db->getAll('SELECT ord.id_ord, u.id, s.service, st.status, o.comment FROM orders ord INNER JOIN orders o ON o.id_ord = ord.id_ord INNER JOIN user u ON o.user_id = u.id INNER JOIN service s ON s.id = o.service_id INNER JOIN status st ON st.id = o.status_id');
    }

 

    public function getOrdId($id)
    {
       $sql = 'SELECT s.service, st.status FROM service s INNER JOIN orders o ON o.service_id = s.id INNER JOIN status st ON st.id = o.status_id WHERE o.user_id=:id';
       $params =['id'=>$id];
       return $this->db->paramsGetAll($sql, $params);
    }



}