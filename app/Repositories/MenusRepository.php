<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 29.03.2018
 * Time: 18:44
 */

namespace Corp\Repositories;

use Corp\Menu;


class MenusRepository extends Repository
{

    public function __construct(Menu $menu)
    {
        $this->model = $menu;
    }
}