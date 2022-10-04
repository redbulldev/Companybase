<?php

declare(strict_types=1);

namespace Companybase\Rules;

use Illuminate\Contracts\Validation\Rule;
use Hash;
use Auth;

class MatchOldPassword implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return Hash::check($value, Auth::user()->password);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Mật khẩu hiện tại phải khớp với mật khẩu cũ';
    }
}
