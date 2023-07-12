<?php

namespace App\Http\Controllers;

use App\Actions\StoreYapAction;
use App\Models\Yap;
use App\Http\Requests\StoreYapRequest;
use App\Http\Requests\UpdateYapRequest;

class YapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreYapRequest $request, StoreYapAction $action)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();

        $action->execute($data);

        return redirect()
            ->route('home')
            ->with('success', 'Yap created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Yap $yap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateYapRequest $request, Yap $yap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Yap $yap)
    {
        $this->authorize('delete', $yap);

        $yap->delete();

        return redirect()
            ->route('home')
            ->with('success', 'Yap deleted successfully.');
    }
}
