<?php

namespace App\View\Components\User\Digital;

use Illuminate\View\Component;
use App\Models\Section;

class DigitalName extends Component
{
    public $currentSection;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($currentSection)
    {
        $this->currentSection = $currentSection;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user.digital.digital-name');
    }
}
