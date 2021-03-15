<?php

namespace App\Controller;

use App\Controller\Common\ControllerInterface as CInterface;

class BrandsController extends Controller implements CInterface{

    public function show(){

        $brandTitle = $_GET["brand"];
        $brands =  $this->getData("SELECT * FROM brands WHERE title = '$brandTitle'");

        $brandId = $brands[0]['id'];
        $cars = $this->getData("SELECT * FROM cars WHERE brands_id = $brandId");

        $pictures = $this->getData("SELECT * FROM pictures");

        $arrayToTemplate = ['brands' => $brands, 'cars' => $cars, 'pictures' => $pictures];

        $this->render($arrayToTemplate, 'brands');
    }

}