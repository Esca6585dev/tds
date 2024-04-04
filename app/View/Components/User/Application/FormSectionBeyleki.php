<?php

namespace App\View\Components\User\Application;

use Illuminate\View\Component;
use App\Models\Section;

class FormSectionBeyleki extends Component
{
    public $childrenSectionId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($childrenSectionId)
    {
        $this->childrenSectionId = $childrenSectionId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $sections = Section::whereNull('section_id')->get();

        $sectionId = Section::find($this->childrenSectionId)->parent->id;

        $childrenSections = Section::where('section_id', $sectionId)->get();

        $currentSection = Section::find($this->childrenSectionId);

        return view('components.user.application.form-section-beyleki', compact('sections', 'sectionId', 'childrenSections', 'currentSection'));
    }
}
