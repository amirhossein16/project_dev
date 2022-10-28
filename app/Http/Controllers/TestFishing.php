<?php

namespace App\Http\Controllers;

use App\Http\Requests\FishingFieldTestRequest;
use App\Repositories\FishingRepository;
use Illuminate\Http\Request;

class TestFishing extends Controller
{
    protected $fieldTest;

    public function __construct(FishingRepository $field)
    {
        $this->fieldTest = $field;
    }

    public function FishingTestMethod(FishingFieldTestRequest $field)
    {
        $validated = $field->validated();
        $a = $this->fieldTest::where($validated['FishingTest'], 'UrlPath')->select(['id', 'UrlPath'])->first();
        if ($a !== null)
            return redirect()->action('App\Http\Controllers\TestFishing@welcome')
                ->with('success', 'Fishing Url Exist :)');
        return redirect()->action('App\Http\Controllers\TestFishing@welcome')
            ->with('warning', 'Fishing Url Not Exist :((');
    }

    public function welcome()
    {
        return view('welcome');
    }
}
