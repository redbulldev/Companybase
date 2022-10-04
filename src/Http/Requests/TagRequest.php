<?php

declare(strict_types=1);

namespace Companybase\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'status' => 'nullable|in:active,inactive',
        ]
        +
        ($this->isMethod('POST') ? $this->createRules() : $this->updateRules());
    }

    public function createRules(): array
    {
        return [
            'name' => 'required|unique:tags,name|min:3|max:50',
        ];
    }

    public function updateRules(): array
    {
        return [
            'name' => 'required|min:3|max:50|unique:tags,name,'.$this->tag.',id',
        ];
    }
}
