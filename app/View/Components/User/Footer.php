<?php

namespace App\View\Components\User;

use Illuminate\View\Component;
use App\Models\Category;

class Footer extends Component
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
        $categories = Category::where('category_id', null)->get();

        return view('components.user.footer', compact('categories'));
    }
}
