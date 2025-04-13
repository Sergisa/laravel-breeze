<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Ramsey\Uuid\Nonstandard\Uuid;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return function (array &$data) {
            $data['attributes']['id'] ??= Uuid::uuid4()->toString();
            return view('components.card');
        };
    }
}
