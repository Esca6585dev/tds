<?php

namespace App\View\Components\User\Digital;

use Illuminate\View\Component;
use App\Models\Section;
use App\Models\Text;

class DigitalRight extends Component
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
        $subSections = Section::where('section_id', $this->currentSection->id)->get();

        return view('components.user.digital.digital-right', compact('subSections'));
    }
}
