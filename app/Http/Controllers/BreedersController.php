<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Breeder;

class BreedersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breeders = Breeder::all()->sortBy('name');

        return view('breeder.index', [
            'breeders' => $breeders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('breeder.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:breeders'
        ]);

        $breeder = Breeder::create([
            'name' => $request->input('name'),
            'original_name' => $request->input('original_name'),
            'shortcut' => $request->input('shortcut')
        ]);

        return redirect('/breeder');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $breeder = Breeder::find($id);
        
        return view('breeder.show')
            ->with('breeder', $breeder);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $breeder = Breeder::find($id);

        return view('breeder.edit')
            ->with('breeder', $breeder);
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
        $request->validate([
            'name' => 'required'
        ]);

        $breeder = Breeder::where('id', $id)
        ->update([
            'name' => $request->input('name'),
            'original_name' => $request->input('original_name'),
            'shortcut' => $request->input('shortcut')
        ]);

        return redirect('/breeder');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $breeder = Breeder::find($id);

        $breeder->delete();

        return redirect('/breeder');
    }
}
