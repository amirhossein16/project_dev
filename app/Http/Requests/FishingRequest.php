<?php

namespace App\Http\Requests;

use App\Models\FishingTable;
use App\Rules\EditUrlRule;
use App\Rules\UrlRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Route;

class FishingRequest extends FormRequest
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
        if (request()->method === 'PUT')
            return [
                'UrlPath' => ["bail", "required", new EditUrlRule()]
            ];
        return [
            'UrlPath' => ["bail", "required", "unique:fishing_tables", new UrlRule()]
        ];
    }
}
