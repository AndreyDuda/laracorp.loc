<?php

namespace Corp\Http\Controllers;

use Corp\Menu;
use Corp\Repositories\MenusRepository;
use Corp\Repositories\SliderRepository;
use Illuminate\Http\Request;

class IndexController extends SiteController
{
    public function __construct(SliderRepository $slider_rep)
    {
        parent::__construct(new MenusRepository(new Menu));

        $this->slider_rep = $slider_rep;

        $this->bar = 'right';
        $this->template = env('THEME') . '.index';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sliderItem = $this->getSliders();

        $sliders = view(env('THEME') . '.slider')->with('sliders', $sliderItem)->render();
        $this->vars = array_add($this->vars, 'sliders', $sliders);
        return $this->renderOutput();
    }


    public function getSliders()
    {
        $sliders = $this->slider_rep->get();

        return $sliders;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
