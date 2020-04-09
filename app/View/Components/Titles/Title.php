<?php

namespace App\View\Components\Titles;

use Illuminate\View\Component;

class Title extends Component
{
    /** @var string */
    public $title;

    /**
     * Create a new component instance.
     *
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = __($title);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('client.components.titles.base');
    }
}
