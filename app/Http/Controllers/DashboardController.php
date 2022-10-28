<?php

namespace App\Http\Controllers;

use App\Http\Requests\FishingRequest;
use App\Models\FishingTable;
use App\Repositories\FishingTestRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    protected $urls;

    public function __construct(FishingTestRepository $url)
    {
        $this->urls = $url;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('dashboard.fishingPanel', ['urls' => $this->urls::paginate(8)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('dashboard.createNewUrl');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param FishingRequest $request
     * @return RedirectResponse
     */
    public function store(FishingRequest $request)
    {
        $validated = $request->validated();
        $this->urls::create($validated);

        return redirect()->action('App\Http\Controllers\DashboardController@index')
            ->with('success', 'Url Added Successfully :)');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|RedirectResponse|View
     */
    public function edit(int $id)
    {
        $query = $this->urls::where($id)->first();
        $query !== null ?
            $response = view('dashboard.editUrl',
                [
                    'UrlPath' => $query->UrlPath,
                    'id' => $query->id
                ]
            ) :
            $response = redirect()->action('App\Http\Controllers\DashboardController@index')
                ->with('warning', 'Url Not Exist :)');

        return $response;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param FishingRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(FishingRequest $request, int $id)
    {
        $validated = $request->validated();
        $this->urls::update($id, $validated);

        return redirect()->action('App\Http\Controllers\DashboardController@index')
            ->with('edited', 'Url Edited Successfully :)');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        FishingTable::findOrFail($id)->delete();

        return redirect()->action('App\Http\Controllers\DashboardController@index')
            ->with('Deleted', 'Url Deleted Successfully :)');
    }
}
