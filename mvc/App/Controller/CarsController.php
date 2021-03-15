<?php

namespace App\Controller;

use App\Controller\Common\ControllerInterface as CInterface;

class CarsController extends Controller implements CInterface{

    public function show(){
        $carId = $_GET["car"];
        $cars = $this->getData("SELECT * FROM cars WHERE id = '$carId'");

        $pictures = $this->getData("SELECT * FROM pictures WHERE cars_id = '$carId'");

        $arrayToTemplate = ['cars' => $cars, 'pictures' => $pictures];

        $this->render($arrayToTemplate, 'cars');
    }

}