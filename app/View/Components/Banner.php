<?php

namespace App\View\Components;

use Str;
use Illuminate\View\Component;

class Banner extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public array $tournament
    ){}


    public function image(): string
    {
        $image = $this->tournament['image'] ?? 'default';

        return asset('storage/banners/' . $image . '.jpg');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.banner');
    }
}
