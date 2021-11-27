<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plant;
use App\Models\Breeder;
use App\Models\Group;

class PlantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plants = Plant::orderBy('name')->paginate(12);
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
        $groups = Group::all()->sortBy('name');
        $breeders = Breeder::all()->sortBy('name');

        return view('plant.create', [
            'breeders' => $breeders,
            'groups' => $groups
        ]);
        //return view('plant.create');
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
            'name' => 'required|unique:plants'
        ]);

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
        $groups = Group::all()->sortBy('name');
        $breeders = Breeder::all()->sortBy('name');

        return view('plant.edit', [
            'plant' => $plant,
            'breeders' => $breeders,
            'groups' => $groups
    ]);
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
            'name' => 'required',
            'image' => 'mimes:jpg,png,jpeg|max:5120'
        ]);

        
        $imageName = $id . '.' . $request->image->extension();
        //dd($imageName);

        $request->image->move(public_path('images'), $imageName);
       

        $plant = Plant::where('id', $id)
        ->update([
            'name' => $request->input('name'),
            'original_name' => $request->input('original_name'),
            'description' => $request->input('description'),
            'breeder_id' => $request->input('breeder_id'),
            'group_id' => $request->input('group_id'),
            'image_path' => $imageName
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
