<?php

namespace App\Rules;

use App\Repositories\FishingRepository;
use Illuminate\Contracts\Validation\Rule;

class EditUrlRule implements Rule
{
    protected $url;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->url = new FishingRepository();
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        $regex = "/^https?:\/\/(?:www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b(?:[-a-zA-Z0-9()@:%_\+.~#?&\/=]*)$|^[-a-zA-Z0-9@:%._+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b[-a-zA-Z0-9()@:%_+.~#?&\/=]*$/";

        preg_match("$regex", $value, $matches_1);
        if (!empty($matches_1)) {
            if ($this->url::where("%$matches_1[0]", 'UrlPath', "LIKE")->count())
                return false;
            return true;
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Url Not unique or invalid ! :(';
    }
}
