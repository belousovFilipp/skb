<?php

namespace App\Http\Requests\Posts;

use App\Http\Requests\FormRequest;
use Illuminate\Support\Str;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $request = $this->request;

        $slug = Str::slug($request->get('slug'));
        $request->set('slug', $slug);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:100',
            'slug' => 'required|min:5|max:100|unique:posts,slug',
            'desc_full' => 'required|min:5|max:255',
            'desc_short' => 'required|min:5|max:10000',
            'status' => 'sometimes|accepted',
        ];
    }
}
