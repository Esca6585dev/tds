<?php

namespace App\View\Components\User\Works;

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
        $works = News::where('category_id', 2)->inRandomOrder()->limit(6)->get();

        return view('components.user.works.container', compact('works'));
    }
}
