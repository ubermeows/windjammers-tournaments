<?php

namespace App\View\Components;

use Str;
use Illuminate\View\Component;

class WinnerCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $winner,
        public string $index
    ){}


    public function rank(): string
    {
        switch ($this->index) {
            case '0':
                return '1st';
                break;
            case '1':
                return '2nd';
                break;
            case '2':
                return '3rd';
                break;
        }
    }

    public function avatar(): string
    {
        $name = Str::snake($this->winner);

        return asset('storage/players/' . $name . '.png');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.winner-card');
    }
}
