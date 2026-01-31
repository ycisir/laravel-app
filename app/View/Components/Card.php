<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $department;
    public $rollNo;
    public function __construct($name, $department, $rollNo)
    {
        $this->name = $name;
        $this->department = $department;
        $this->rollNo = $rollNo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }

    // components are a reusable group of elements
    // two types of components
    // 1. class based
    // 2. anonymous

    // Component method
    public function addNumbers(...$numbers)
    {   
        $total = 0;
        foreach($numbers as $number)
        {
            $total += $number;
        }
        return $total;
    }
}
