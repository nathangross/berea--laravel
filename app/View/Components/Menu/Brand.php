<?php

namespace App\View\Components\Menu;

use Corcel\Model\Menu;
use Illuminate\View\Component;

class Brand extends Component
{

    /**
     * The wordpress menu.
     *
     * @var string
     */
    public $menu;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->menu = Menu::slug('brand')->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.menu.brand');
    }
}
