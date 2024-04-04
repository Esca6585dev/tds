<?php

namespace App\View\Components\User\Category;

use Illuminate\View\Component;
use App\Models\Category;
use App\Models\Text;

class CategoryRight extends Component
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
        $currentCategory = Category::findOrFail($this->id);

        $subCategories = Category::where('category_id', $this->id)->get();

        $text = Text::where('category_id', $this->id)->first();

        return view('components.user.category.category-right', compact('currentCategory', 'subCategories', 'text'));
    }
}
