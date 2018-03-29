<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 29.03.2018
 * Time: 18:43
 */

namespace Corp\Repositories;

use Config;


abstract class Repository
{
    protected $model = false;

    public function get()
    {
        $builder = $this->model->select('*');

        return $builder->get();
    }
}