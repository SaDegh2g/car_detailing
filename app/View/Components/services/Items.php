<?php

namespace App\View\Components\Services;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Items extends Component
{

    public function __construct(
        public string $img,
        public string $order,
        public string $header,
        public string $text,
    )
    {}

    public function render(): View
    {
        return view('components.services.items');
    }
}
