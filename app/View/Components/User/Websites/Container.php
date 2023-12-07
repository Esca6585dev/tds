<?php

namespace App\View\Components\User\Websites;

use Illuminate\View\Component;
use App\Models\News;

class Container extends Component
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
        $websites = News::where('category_id', 3)->inRandomOrder()->limit(9)->get();

        return view('components.user.websites.container', compact('websites'));
    }
}
