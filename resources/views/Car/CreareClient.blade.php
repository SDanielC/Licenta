@extends('layout')

@section('title', 'Creare Masina')

@section('content')

    <div class="span9">
	    <div class="content">

			<div class="module">
				<div class="module-head">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                    <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                    </ul>
                    </div>
                @endif
                @if(\Session::has('success'))
                    <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                    </div>
                @endif
                    <form method="post" action="{{url('Car')}}">
                    {{csrf_field()}}
                        <div>  
                            <h3>Detalii Client</h3>

                        </div>
                        Nume:                <input type="text"   size="20"   maxlength="17" name="nume" /><br/>
                        Prenume:             <input type="text"   size="20"   maxlength="10" name="prenume" /><br/>
                        Telefon:             <input type="tel"   size="20"   maxlength="10" name="telefon" /><br/>
                        <br/>
                        <div>  
                            <h3>Detalii Masina</h3>
                        </div>

                        Nr Masina:           <input type="text" size="10" maxlength="40" name="nr_masina" /> <span class="help-inline">Ex: B523SAL</span><br />
                        Seria:               <input type="text"   size="17"   maxlength="17" name="seria" /><br/>
                        Marca:               <input type="text"   size="10"   maxlength="10" name="marca" /><br/>
                        Model:               <input type="text"   size="15"   maxlength="10" name="model" /><br/>
                        An:                  <input type="text"   size="4"   maxlength="4" name="an" /><br/>
                        Combustibil:         <input type="text"   size="10"   maxlength="10" name="combustibil" /><br/>
                        KM:                  <input type="text"   size="10"   maxlength="6" name="km" /><br/>
                        Motor:               <input type="text"   size="10"   maxlength="10" name="motor" /><br/>

                        <button type="submit" class="btn btn-primary">Adauga</button>     
                                      
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


