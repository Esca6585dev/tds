<?php

namespace App\View\Components\User\Magazine;

use Illuminate\View\Component;
use App\Models\Magazine;
use Auth;

class Table extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $magazines = Magazine::orderByDesc('id')->get();

        return view('components.user.magazine.table', compact('magazines'));
    }
}

