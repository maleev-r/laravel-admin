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
        return view('lradmin::sfold');
    }
}
