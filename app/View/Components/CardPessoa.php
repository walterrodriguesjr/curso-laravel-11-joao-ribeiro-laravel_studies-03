<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CardPessoa extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $pessoa,
        public array $linguas
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-pessoa');
    }
}
