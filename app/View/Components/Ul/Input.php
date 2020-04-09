<?php

namespace App\View\Components\Ul;

class Input extends FormField
{
    /** @var string */
    public $subTitle;

    /**
     * Create a new component instance.
     *
     * @param string $label
     * @param string|null $name
     * @param string $subTitle
     */
    public function __construct(string $label, string $name = null, string $subTitle = '')
    {
        parent::__construct($label, $name);
        $this->subTitle = __($subTitle);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('client.components.ui.input.base');
    }
}
