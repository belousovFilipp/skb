<?php

namespace App\View\Components\Cards;

use App\Post as ModelPost;
use Illuminate\View\Component;

class Post extends Component
{
    /** @var ModelPost|Post */
    public $post;

    /**
     * Create a new component instance.
     *
     * @param \App\View\Components\Cards\Post $post
     */
    public function __construct(ModelPost $post)
    {
        $this->post = $post;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('client.components.cards.post.base');
    }
}
