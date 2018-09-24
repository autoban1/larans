<?php

namespace App\Http\Controllers;

use App\Cartag;
use Illuminate\Http\Request;

class CartagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartags = Cartag::all();

        return view('cartags.index', compact('cartags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('cartags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cartag = new Cartag;
        $cartag->name = $request->name;
        $cartag->slug = str_slug($request->slug);
        $cartag->description = $request->description;
        $cartag->save();

        return redirect('/cartags');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cartag = Cartag::whereId($id)->first();

        return view('cartags.show', compact('cartag'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cartag = Cartag::findOrFail($id);

        return view('cartags.edit', compact('cartag'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cartag = Cartag::findOrFail($id);

        $cartag->update($request->all());


        return redirect('/cartags');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Cartag::findOrFail($id)->delete();

        return redirect('/cartags');
    }
}
