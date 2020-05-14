@extends('layout')

@section('title', 'Creare Programare')

@section('content')

    <div class="span9">
	    <div class="content">

			<div class="module">
				<div class="module-head">
                    <div>  
                        <h3>Detalii Client</h3>

                    </div>
                    Nume:                <input type="text"   size="20"   maxlength="17" name="nume" /><br/>
                    Prenume:             <input type="text"   size="20"   maxlength="10" name="prenume" /><br/>
                    <br/>
                    <div>  
                        <h3>Detalii Masina</h3>
                    </div>

                    Nr Masina:           <input type="text" size="10" maxlength="40" name="NrMasina" /> <span class="help-inline">Ex: B523SAL</span><br />
                    Seria:               <input type="text"   size="17"   maxlength="17" name="Seria" /><br/>
                    Marca:               <input type="text"   size="10"   maxlength="10" name="Marca" /><br/>
                    Model:               <input type="text"   size="15"   maxlength="10" name="Model" /><br/>
                    An:                  <input type="text"   size="4"   maxlength="4" name="An" /><br/>
                    Combustibil:         <input type="text"   size="10"   maxlength="10" name="Combustibil" /><br/>
                    KM:                  <input type="text"   size="10"   maxlength="6" name="KM" /><br/>
                    Motor:               <input type="text"   size="10"   maxlength="10" name="Motor" /><br/>
                    Defect:              <input type="text"   size="50"   maxlength="100" name="TipInterventie" /><br/>
                    Detalii:             <input type="text"   size="100"   maxlength="100" name="TipInterventie" /><br/>
                    Data Ora Programarii: <input type="datetime"   size="10"   maxlength="17" name="DataOraProgramarii" /><br/>
                
                        <input type="submit">
                </div>
                </form>
        </div>
    </div>

@endsection


