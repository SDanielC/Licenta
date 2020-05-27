<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Mail\Email;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all()->toArray();

        return view('Car.Detalii', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Car.PreluareMasina');
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
            'motor' => 'required',
            'defect' => 'required',
            'data_programare' => 'required'
        ]);
        $car = new Car([
            'nume' => $request->get('nume'),
            'prenume' => $request->get('prenume'),
            'telefon' => $request->get('telefon'),
            'email' => $request->get('email'),
            'nr_masina' => $request->get('nr_masina'),
            'seria' => $request->get('seria'),
            'marca' => $request->get('marca'),
            'model' => $request->get('model'),
            'an' => $request->get('an'),
            'combustibil' => $request->get('combustibil'),
            'km' => $request->get('km'),
            'motor' => $request->get('motor'),
            'defect' => $request->get('defect'),
            'detalii_reparatii' => $request->get('detalii_reparatii'),
            'data_programare' => $request->get('data_programare')
        ]);
        $car->save();
        \Mail::to($request->email)->send(new Email($request));
        // return redirect()->route('Car.CreareClient');
        return redirect()->back()->with('message', 'Masina Adaugata cu succes și confirmare trimisă pe email.');
        // return view('Car.PreluareMasina')->with('Success', 'Date Salvate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cars = Car::all()->toArray();
        
        return view('Car.Detalii', compact('cars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
        return view('Car.Edit', compact('car', 'id'));
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
        $this->validate($request, [
            'nume'    =>  'required',
            'prenume'     =>  'required',
            'telefon'     =>  'required',
            'email'    =>  'required',
            'nr_masina'     =>  'required',
            'seria'     =>  'required',
            'marca'    =>  'required',
            'model'     =>  'required',
            'an'     =>  'required',
            'combustibil'    =>  'required',
            'km'     =>  'required',
            'motor'     =>  'required',
            'defect'     =>  'required',
            'detalii_reparatii'     =>  'required',
            'data_programare'     =>  'required'
        ]);
        $car = Car::find($id);
        $car->nume = $request->get('nume');
        $car->prenume = $request->get('prenume');
        $car->telefon = $request->get('telefon');
        $car->email = $request->get('email');
        $car->nr_masina = $request->get('nr_masina');
        $car->seria = $request->get('seria');
        $car->marca = $request->get('marca');
        $car->model = $request->get('model');
        $car->an = $request->get('an');
        $car->combustibil = $request->get('combustibil');
        $car->km = $request->get('km');
        $car->motor = $request->get('motor');
        $car->defect = $request->get('defect');
        $car->detalii_reparatii = $request->get('detalii_reparatii');
        $car->data_programare = $request->get('data_programare');
        $car->save();
        return redirect('/Detalii')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        $cars = Car::all();
        return redirect('/Detalii');
        
    }
    public function send(Request $request)
    {
        $this->validate($request, [
            'nume'    =>  'required',
            'prenume'     =>  'required',
            'telefon'     =>  'required',
            'email'    =>  'required',
            'nr_masina'     =>  'required',
            'seria'     =>  'required',
            'marca'    =>  'required',
            'model'     =>  'required',
            'an'     =>  'required',
            'combustibil'    =>  'required',
            'km'     =>  'required',
            'motor'     =>  'required',
            'defect'     =>  'required',
            'detalii_reparatii'     =>  'required',
            'data_programare'     =>  'required'
        ]);

        return redirect('Car.PreluareMasina');
        
    // }
    // // // public function search($numar)
    // // // {
    // // //     $car = Car::where('nr_masina', '=', $numar)->firstOrFail();
    // // return view('Car.Detalii', compact('car'));
    // // // }
    // // if $car==null{
        
    // }
    }
}
