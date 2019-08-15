<?php
namespace Web\FrontController\Controllers;

use Web\FrontController\Core\Controller;
use Web\FrontController\Models\Service;

class pageController extends Controller
{

    public function designAction(){
        session_start();

        $content='design.php'; 
        $template='template.php'; 
        $service = new Service();
        $services = $service->getCat(1);

        $data=[
            'auth' => isset($_SESSION['name']),
            'services' => $services,
            'title' => 'Дизайн'
        ];
        
        echo $this->renderPage($content,$template,$data);
}

    public function webAction(){
       session_start();

        $content='web.php'; 
        $template='template.php'; 

        $service = new Service();
        $services = $service->getCat(2);


        $data=[
            'auth' => isset($_SESSION['name']),
            'services' => $services,
            'title' => 'Web'
        ];
        echo $this->renderPage($content,$template,$data);

       
}

    public function promoAction(){
       session_start();

        $content='promo.php';
        $template='template.php'; 

        $service = new Service();
        $services = $service->getCat(3);


        $data=[
            'auth' => isset($_SESSION['name']),
            'services' => $services,
            'title' => 'Promo'
        ];
        echo $this->renderPage($content,$template,$data);
    }

    public function visualAction(){
       session_start();

        $content='visual.php';
        $template='template.php'; 

        $service = new Service();
        $services = $service->getCat(4);


        $data=[
            'auth' => isset($_SESSION['name']),
            'services' => $services,
            'title' => 'Visual'
        ];
        echo $this->renderPage($content,$template,$data);
    }
}