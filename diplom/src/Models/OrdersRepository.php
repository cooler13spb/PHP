<?php


namespace Web\FrontController\Models;


use Web\FrontController\Core\DB;
use Web\FrontController\Core\Repository;

class OrdersRepository implements Repository
{
    private $db;
    public function __construct()
    {
        $this->db=DB::getDB();
    }

    public function getAll()
    {
        $sql='SELECT * FROM Orders';
        return $this->db->getAll($sql);
    }
    
    public function getById(int $id)
    {
    }
   
    public function save($params)
    {
        $sql = 'INSERT INTO Orders (user_id, service_id, status_id, comment) VALUES
         (:user_id, :service_id, :status_id, :comment)';
         
        return $this->db->nonSelectQuery($sql, $params);
    }

     public function saveSt($params)
    {
        $sql = 'UPDATE Orders SET status_id = :id_status WHERE id_ord = :id_ord';
         
        return $this->db->nonSelectQuery($sql, $params);
    }

}