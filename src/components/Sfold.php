<?php

namespace LuckyRomka\LaravelAdmin\Components;

use Illuminate\View\Component;

class Sfold extends Component
{
    public function __construct()
    {

    }

    public function render()
    {
        $data = 'power';
        return view('lradmin::sfold', ['data' => $data]);
    }
}
