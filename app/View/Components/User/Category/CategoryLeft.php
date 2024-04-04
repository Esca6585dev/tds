<?php

namespace App\View\Components\User\Category;

use Illuminate\View\Component;
use App\Models\Category;

class CategoryLeft extends Component
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
        $categories = Category::where('category_id', null)->get();

        $currentCategory = Category::findOrFail($this->id);
        
        return view('components.user.category.category-left', compact('categories', 'currentCategory'));
    }
}
