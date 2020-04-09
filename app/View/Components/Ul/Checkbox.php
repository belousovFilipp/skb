<?php

namespace App\View\Components\Ul;

class Checkbox extends FormField
{
    /**
     * Create a new component instance.
     *
     * @param string $label
     * @param string|null $name
     */
    public function __construct(string $label, string $name = null)
    {
        parent::__construct($label, $name);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('client.components.ui.checkbox.base');
    }
}
