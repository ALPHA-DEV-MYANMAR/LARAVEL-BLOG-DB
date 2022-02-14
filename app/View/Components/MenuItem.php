<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MenuItem extends Component
{
    public $link,$icon,$name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link='#',$icon='fas fa-home',$name='title')
    {
        $this->link = $link;
        $this->icon = $icon;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.menu-item');
    }
}
