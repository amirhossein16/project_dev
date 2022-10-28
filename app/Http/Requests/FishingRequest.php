<?php

namespace App\Http\Requests;

use App\Models\FishingTable;
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
        if (request()->method === 'PUT' && !FishingTable::where('UrlPath', request()->UrlPath)->count())
            return [
                'UrlPath' => 'bail|required|url'
            ];
        return [
            'UrlPath' => 'bail|required|url|unique:fishing_tables'
        ];
    }
}
