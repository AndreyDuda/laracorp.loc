<?php

namespace Corp\Http\Controllers;

use Corp\Repositories\MenusRepository;
use Illuminate\Http\Request;
use Menu;

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
        $navigation = view(env('THEME') . '.navigation')->with('menu', $menu)->render();
        $this->vars = array_add($this->vars, 'navigation', $navigation);

        return view($this->template)->with($this->vars)->render();
    }
    protected function getMenu()
    {
        $menu = $this->menu_rep->get();
        $mBuilder = Menu::make('MyNav', function($m) use ($menu){
            foreach ($menu as $item){

                if ($item->parent === 0) {
                    $m->add($item->title, $item->path)->id($item->id);
                } else {
                    if ($m->find($item->parent)) {
                        $m->find($item->parent)->add($item->title, $item->path)->id($item->id);
                    }
                }
            }
        });

        return $mBuilder;
    }


}
