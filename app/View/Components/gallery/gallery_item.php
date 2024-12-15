<?php

namespace App\View\Components\gallery;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class gallery_item extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $img1,
        public string $img2,
        public string $header,
        public string $message,
        public string $route,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.gallery.gallery_item');
    }
}
