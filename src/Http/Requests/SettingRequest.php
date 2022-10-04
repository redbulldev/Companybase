<?php

declare(strict_types=1);

namespace Companybase\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            "logo" => 'required',
            "favicon" => 'nullable',
            "header" => "required",
            "header-content" => "required",
            "working-time" => "required",
            "email" => "required|email",
            "phone" => "required",
            "fax" => "required",
            "address" => "required",
            "facebook" => 'nullable',
            "twitter" => 'nullable',
            "instagram" => 'nullable',
            "youtube" => 'nullable',
            "link" => 'nullable',
            // "created_at" => "nullable"
        ];
    }
}
