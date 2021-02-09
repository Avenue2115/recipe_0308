<?php

namespace App\View\Components;

use App\Food;
use Illuminate\View\Component;

class Card extends Component
{
    public $food;
    public $recipe;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($recipe)
    {
        //$this->food = $food;

        $this->recipe = $recipe;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card');
    }
}
