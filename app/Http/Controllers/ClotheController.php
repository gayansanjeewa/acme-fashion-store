<?php

namespace App\Http\Controllers;

use Domain\Command\CreateClotheCommand;
use Domain\Query\GetClothesQuery;
use Illuminate\Http\Request;

/**
 * @author Gayan Sanjeewa <iamgayan@gmail.com>
 */
class ClotheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function index()
    {
        $clothes = $this->query->execute(new GetClothesQuery(1, 10));

        return view('clothes.list')->with('clothes', $clothes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('clothes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'cost' => 'required|numeric|min:0',
            'brand_id' => 'required',
            'description' => 'max:255',
        ]);

        $criteria = $request->toArray();

        $criteria['short_description'] = $criteria['description'];
        unset($criteria['_token']);
        unset($criteria['description']);

        $this->command->dispatch(new CreateClotheCommand($criteria));

        return redirect('clothes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function destroy($id)
    {
        //
    }
}
