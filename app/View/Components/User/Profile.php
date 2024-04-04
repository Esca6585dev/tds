<?php

namespace App\View\Components\User;

use Illuminate\View\Component;
use App\Models\Category;
use Spatie\Permission\Models\Role;

class Profile extends Component
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
        $roles = Role::where('guard_name', 'web')->pluck('name', 'name')->all();

        return view('components.user.profile', compact('categories', 'roles'));
    }
}
