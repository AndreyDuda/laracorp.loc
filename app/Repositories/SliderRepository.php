<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 29.03.2018
 * Time: 20:56
 */

namespace Corp\Repositories;

use Corp\Slider;

class SliderRepository extends Repository
{

    public function __construct(Slider $slider)
    {
        $this->model = $slider;
    }
}