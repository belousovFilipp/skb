<?php

namespace App\View\Components\Ul;

use Illuminate\View\Component;

abstract class FormField extends Component
{
    /** @var string */
    public $label;

    /** @var string */
    public $subLabel;

    /** @var string */
    public $name;

    /** @var string */
    public $value;

    /**
     * FormField constructor.
     * @param string $label
     */
    public function __construct(
        string $label,
        string $name = null,
        string $subLabel = null)
    {
        $this->name = $name;
        $this->label = __($label);
        $this->subLabel = __($subLabel);
        $this->value = old($name);
    }
}
