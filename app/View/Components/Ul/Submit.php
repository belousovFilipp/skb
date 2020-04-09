<?php

namespace App\View\Components\Ul;

class Submit extends FormField
{
    /**
     * Create a new component instance.
     *
     * @param string $label
     */
    public function __construct(string $label)
    {
        parent::__construct($label);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('client.components.ui.submit.base');
    }
}
