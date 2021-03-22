<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beers = Beer::all();
        return view('beers.index', ['beers' => $beers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validateBeer($request);
        $data = $request->all();
        $newBeer = new Beer();
        $newBeer->fill($data);
        $newBeer->save();

        $beer = Beer::orderBy('id', 'desc')->first();
        return redirect()->route('beers.show', $beer);
    }

    /**
     * Display the specified resource.
     *
     * @param  Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {
        return view('beers.show', compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
        return view('beers.edit', compact('beer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Beer $beer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
        $this->validateBeer($request);
        $data = $request->all();
        $beer->update($data);
        return redirect()->route('beers.show', compact('beer'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    {
        $beer->delete();
        return redirect()->route('beers.index');
    }

    protected function validateBeer(Request $request)
    {
        $request->validate([
            'brand' => 'required|max:255',
            'name' => 'required|max:255',
            'gradation' => 'required|numeric|between:0,100',
            'type' => 'required|max:255',
            'brewery' => 'required|max:255'
        ]);
    }
}
