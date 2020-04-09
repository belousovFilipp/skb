<?php

namespace App\View\Components\Lists;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Posts extends Component
{
    /** @var Collection */
    public $posts;

    /**
     * Create a new component instance.
     *
     * @param Collection $posts
     */
    public function __construct(Collection $posts)
    {
        $this->posts = $posts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('client.components.lists.posts.base');
    }
}
