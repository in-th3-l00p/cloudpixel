<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Window extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public int $x,
        public int $y,
        public int $width,
        public int $height,
        public string $title = "",
        public bool $draggable = true
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.window');
    }
}
