<?php

namespace Corp\Http\Controllers;

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

    public function __construct()
    {

    }

    protected function renderOutput()
    {
        return view($this->template)->with($this->vars)->render();
    }


}
