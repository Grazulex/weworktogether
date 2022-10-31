<?php

namespace App\View\Components;

use App\Models\Blog;
use Illuminate\View\Component;

class LastBlog extends Component
{
    public function __construct(public Blog $blog)
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
        return view('components.last-blog');
    }
}
