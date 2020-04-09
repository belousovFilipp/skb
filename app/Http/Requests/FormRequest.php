<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest as BaseFormRequest;

class FormRequest extends BaseFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /** @return array */
    public function getFormData(): array
    {
        $this->request->remove('_token');
        return $this->request->all();
    }

    public function attributes()
    {
        return array_map(function () {
            return '';
        } , $this->rules());
    }
}
