<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plant;

class PlantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plants = Plant::paginate(12);
        return view('plant.index', [
            'plants' => $plants
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plant = Plant::create([
            'name' => $request->input('name'),
            'original_name' => $request->input('original_name'),
            'description' => $request->input('description'),
            'breeder_id' => $request->input('breeder_id'),
            'group_id' => $request->input('group_id'),
            'image_path' => $request->input('image_path')
        ]);

        return redirect('/plant');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plant = Plant::find($id);
        return view('plant.show')
            ->with('plant', $plant);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plant = Plant::find($id);

        return view('plant.edit')
            ->with('plant', $plant);
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
        $plant = Plant::where('id', $id)
        ->update([
            'name' => $request->input('name'),
            'original_name' => $request->input('original_name'),
            'description' => $request->input('description'),
            'breeder_id' => $request->input('breeder_id'),
            'group_id' => $request->input('group_id'),
            'image_path' => $request->input('image_path')
        ]);

        return redirect('/plant/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plant = Plant::find($id);

        $plant->delete();

        return redirect('/plant');
    }
}
