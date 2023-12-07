<?php

namespace App\View\Components\User\Standart;

use Illuminate\View\Component;
use App\Models\Standart;
use App\Models\Cart;
use Auth;

class Table extends Component
{
    public $pagination = 25;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pagination)
    {
        $this->pagination = $pagination;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $carts = null;

        if(Auth::check()){
            $carts = Cart::where('user_id', Auth::id() )->get();
        }

        $standarts = Standart::orderByDesc('id')->paginate($this->pagination);

        return view('components.user.standart.table', compact('standarts', 'carts'));
    }
}

