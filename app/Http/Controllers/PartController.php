<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Part;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parts = Part::all()->toArray();
        
        return view('part.index', compact('parts'));
        /*$students = Student::all()->toArray();
        return view('student.index', compact('students'));*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $parts = Part::all();
        // $create = true;
        // return view('part.index', compact('parts', 'create'));   
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'cod' => 'required',
            'denumire' => 'required',
            'cantitate' => 'required'
        ]);
        // print_r($request->input());
        $part= new Part;
        $part->cod= $request->cod;
        $part->denumire= $request->denumire;
        $part->cantitate= $request->cantitate;
        $part->save();
        $parts = Part::all();
        return view('part.index', compact('parts'));
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
        // $edit = $id;
        // $parts = Part::all();
        // return view('part.index')->with('edit', $edit)->with('parts', $parts);
        $part = Part::find($id);
        return view('part.edit', compact('part', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    
        // $this->validate($request,[
        //     'cod' => 'required',
        //     'denumire' => 'required',
        //     'cantitate' => 'required'
        // ]);

        // $part = Part::findOrFail($id);
        // $part->cod= $request->cod;
        // $part->denumire= $request->denumire;
        // $part->cantitate= $request->cantitate;
        // $part->save();
        // $parts = Part::all();
        // return view('part.index', compact('parts'));
        // $part = Part::findOrFail($request->parts_id);
        // $part->update($request->all());
        // return back();
    {
        $this->validate($request, [
            'cod'    =>  'required',
            'denumire'     =>  'required',
            'cantitate'     =>  'required'
        ]);
        $part = Part::find($id);
        $part->cod = $request->get('cod');
        $part->denumire = $request->get('denumire');
        $part->cantitate = $request->get('cantitate');
        $part->save();
        return redirect('/Part')->with('success', 'Data Updated');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $part = Part::findOrFail($id);
        $part->delete();
        $parts = Part::all();
        return redirect('/Part');
    }

    // public function editeaza(Request $request)

    // {
    //     $category = Category::findOrFail($request->category_id);

    //     $category->update($request->all());
       
    //     return back();
    // }
    // {
    //         $part = Part::findOrFail($request->parts_id);
    //         $part->update($request->all());
    //         return back();
    // }
    // {
    //     $edit = $request;
    //     $parts = Part::all();
    //     return view('part.index', compact('parts'));
    // }
}
