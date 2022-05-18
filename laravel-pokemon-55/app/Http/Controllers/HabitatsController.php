<?php

namespace App\Http\Controllers;

use App\Habitat;
use Illuminate\Http\Request;

class HabitatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newHabitats = Habitat::orderBy('id', 'desc')->paginate(20);
        return view('habitats.index', ["habitats" => $newHabitats] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('habitats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $habitat = new Habitat();
        $habitat->name = $data['name'];
        $habitat->image_url = $data['image_url'];
        $habitat->affinity_types = $data['affinity_types'];
        $habitat->description = $data['description'];
        $habitat->avg_climate = $data['avg_climate'];
        $habitat->save();

        return redirect()->route("habitats.show", $habitat);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $habitat = Habitat::findOrFail($id);
        return view('habitats.show', ["habitat" => $habitat] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Habitat  $habitat
     * @return \Illuminate\Http\Response
     */
    public function edit(Habitat $habitat)
    {
        return view('habitats.edit', ["habitat" => $habitat] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Habitat $habitat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habitat $habitat)
    {
        // dd($request->all());
        $data = $request->all();
        $habitat->name = $data['name'];
        $habitat->image_url = $data['image_url'];
        $habitat->affinity_types = $data['affinity_types'];
        $habitat->description = $data['description'];
        $habitat->avg_climate = $data['avg_climate'];
        $habitat->save();

        return redirect()->route("habitats.show", $habitat);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
