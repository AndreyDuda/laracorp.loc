<?php

namespace Corp\Http\Controllers;

use Corp\Repositories\MenusRepository;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    protected $menu_rep;
    protected $slider_rep;
    protected $article_rep;
    protected $portfolio_rep;

    protected $vars            = array();
    protected $template;

    protected $bar             = false;
    protected $contentLrftBar  = false;
    protected $contentRightBar = false;

    public function __construct(MenusRepository $menu_rep)
    {
        $this->menu_rep = $menu_rep;
    }

    protected function renderOutput()
    {
        $menu = $this->getMenu();
        dd($menu);
        $navigation = view(env('THEME') . '.navigation')->render();
        $this->vars = array_add($this->vars, 'navigation', $navigation);

        return view($this->template)->with($this->vars)->render();
    }
    protected function getMenu()
    {
        $menu = $this->menu_rep->get();
        return $menu;
    }


}
