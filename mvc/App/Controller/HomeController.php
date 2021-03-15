<?php

namespace App\Controller;

use App\Controller\Common\ControllerInterface as CInterface;

class HomeController extends Controller implements CInterface{

    public function show(){
        
        $brands =  $this->getData("SELECT * FROM brands");
        $cars = $this->getData("SELECT * FROM cars");
        $pictures = $this->getData("SELECT * FROM pictures");

        $introduction = "ceci est l'introduction de ma home page.";

        $arrayToTemplate = ['title' => 'webstart automobile', 'introduction' => $introduction ,'brands' => $brands, 'cars' => $cars, 'pictures' => $pictures];

        $this->render($arrayToTemplate, 'home');
    }

}