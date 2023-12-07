<?php

namespace App\View\Components\User\Digital;

use Illuminate\View\Component;
use App\Models\Section;

class Service extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $sections = Section::whereNull('section_id')->get();

        return view('components.user.digital.service', compact('sections'));
    }
}
