@extends('layout')

@section('title', 'Preluare Masina')

@section('content')

    <div class="span9">
	    <div class="content">

			<div class="module">
				<div class="module-head">
                @if(session('message'))
                    <div class="alert alert-succes">{{session('message')}}</div>
                @endif
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
                    <!-- <form action="sendEmail" method="post"> -->
                    <form method="post" action="{{url('Car')}}">
                    {{csrf_field()}}
                        <div>  
                            <h3>Detalii Client</h3>

                        </div>
                        Nume:                <input type="text"   size="20"   maxlength="17" name="nume" /><br/>
                        Prenume:             <input type="text"   size="20"   maxlength="10" name="prenume" /><br/>
                        Telefon:             <input type="tel"   size="20"   maxlength="10" name="telefon" /><br/>
                        Email:             <input type="email"   size="20"   maxlength="50" name="email" /><br/>
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
                        Defect:               <input type="text"   size="50"   maxlength="50" name="defect" /><br/>
                        Detalii Reparatii:    <input type="text"   size="150"   maxlength="150" name="detalii_reparatii" /><br/>
                        Data Programare:    <input type="text"   size="150"   maxlength="150" name="data_programare" /><br/>
                        </br>

                            <button type="submit" class="btn btn-primary">Adauga</button>     
                        <!-- </form>            -->
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

@endsection


