<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Car.CreareClient');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Car.CreateClient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nume' => 'required',
            'prenume' => 'required',
            'telefon' => 'required',
            'nr_masina' => 'required',
            'seria' => 'required',
            'marca' => 'required',
            'model' => 'required',
            'an' => 'required',
            'combustibil' => 'required',
            'km' => 'required',
            'motor' => 'required'
        ]);
        $car = new Car([
            'nume' => $request->get('nume'),
            'prenume' => $request->get('prenume'),
            'telefon' => $request->get('telefon'),
            'nr_masina' => $request->get('nr_masina'),
            'seria' => $request->get('seria'),
            'marca' => $request->get('marca'),
            'model' => $request->get('model'),
            'an' => $request->get('an'),
            'combustibil' => $request->get('combustibil'),
            'km' => $request->get('km'),
            'motor' => $request->get('motor')
        ]);
        $car->save();
        // return redirect()->route('Car.CreareClient');
        return view('Car.CreareClient');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
