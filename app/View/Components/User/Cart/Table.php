<?php

namespace App\View\Components\User\Cart;

use Illuminate\View\Component;
use App\Models\Cart;
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
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render($pagination = 5)
    {
        $carts = Cart::orderByDesc('id')->where('user_id', Auth::id() )->paginate($pagination);

        return view('components.user.cart.table', compact('carts'));
    }
}
