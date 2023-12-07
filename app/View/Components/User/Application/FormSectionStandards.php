<?php

namespace App\View\Components\User\Application;

use Illuminate\View\Component;
use App\Models\Section;
use App\Models\Cart;
use Auth;

class FormSectionStandards extends Component
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

        $childrenSections = Section::whereNotNull('section_id')->get();

        $sectionId = Section::find($this->childrenSectionId)->parent->id;

        $current_section = Section::find($this->childrenSectionId);

        $carts = Cart::where('user_id', Auth::id())->get();

        return view('components.user.application.form-section-standards', compact('sections', 'sectionId', 'childrenSections', 'current_section', 'carts'));
    }
}
