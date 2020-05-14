@extends('layout')

@section('title', 'Creare Client')

@section('content')

    <div class="span9">
	    <div class="content">

			<div class="module">
				<div class="module-head">
                    <div>  
                        <h3>Detalii Client</h3>
                    </div>
                    Nume:      <input type="text"   size="20"   maxlength="17" name="nume" /><br/>
                    Prenume:   <input type="text"   size="20"   maxlength="10" name="prenume" /><br/>
                    Telefon:   <input type="text"   size="10"   maxlength="10" name="telefon" /><br/>
                    Email:     <input type="text"   size="30"   maxlength="10" name="email" /><br/>

                        <input type="submit">
                </div>
                </form>
        </div>
    </div>

@endsection


