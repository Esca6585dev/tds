<?php

namespace App\View\Components\User\Cart;

use Illuminate\View\Component;

class Pagination extends Component
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
    public function render($pagination = 5)
    {
        if($request->pagination) {
            $pagination = (int)$request->pagination;
        }

        return view('components.user.cart.pagination', compact('pagination'));
    }
}
