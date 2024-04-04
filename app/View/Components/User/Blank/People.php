<?php

namespace App\View\Components\User\Blank;

use Illuminate\View\Component;
use App\Models\User;

class People extends Component
{
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $user = User::findOrFail($this->id);

        return view('components.user.blank.people', compact('user'));
    }
}