<?php

namespace App\View\Components\User\Application;

use Illuminate\View\Component;

class SectionSampleButton extends Component
{
    public $sections, $sectionId, $childrenSections, $childrenSectionId, $currentSection;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($sections, $sectionId, $childrenSections, $childrenSectionId, $currentSection)
    {
        $this->sections = $sections;
        $this->sectionId = $sectionId;
        $this->childrenSections = $childrenSections;
        $this->childrenSectionId = $childrenSectionId;
        $this->currentSection = $currentSection;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user.application.section-sample-button');
    }
}
