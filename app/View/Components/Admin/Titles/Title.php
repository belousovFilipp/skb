<?php

namespace App\View\Components\Admin\Titles;

use Illuminate\View\Component;

class Title extends Component
{
    /** @var string */
    public $title;

    /**
     * Title constructor.
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
        return view('admin.components.titles.title');
    }
}
