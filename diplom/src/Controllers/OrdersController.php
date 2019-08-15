<?php

namespace Web\FrontController\Controllers;


use Web\FrontController\Core\Controller;
use Web\FrontController\Models\OrdersRepository;

class OrdersController extends Controller
{
    private $ordersRepository;

    public function __construct()
    {
        $this->ordersRepository=new OrdersRepository();
    }

    public function addOrderAction(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            header('Location: /');
        } else
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                session_start();
                $post = $_POST;
                $params = [
                    'service_id' => $post['id_category'],
                    'user_id'=> $_SESSION['id'],
                    'status_id' => '1',
                    'comment' => $post['comment']
                ];
                $this->ordersRepository->save($params);
                header('Location: /account');
        }

    }


    public function addStatusAction(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            header('Location: /');
        } else
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                session_start();
                $post = $_POST;
                $params = [
                    'id_ord' => $post['id_ord'],
                    'id_status' => $post['id_status']

                ];
                $this->ordersRepository->saveSt($params);
                header('Location: /account');
        }

    }



}