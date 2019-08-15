<?php
namespace Web\FrontController\Controllers;

use Web\FrontController\Core\Controller;



class IndexController extends Controller
{
     public function indexAction(){
        session_start();
        $content='main.php';
        $template='template.php';

        $data=[
        	'auth' => isset($_SESSION['name']),
            'title'=>'by-Vision'
            
        ];
        echo $this->renderPage($content,$template,$data);
    }

}

