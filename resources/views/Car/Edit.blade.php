
    <div class="span9">
	    <div class="content">

			<div class="module">
				<div class="module-head">
                    <br />
                    <h3>Editare Client</h3>
                    <br />
                @if(count($errors) > 0)

                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                @endif
                    <form method="post" action="{{action('CarController@update', $id)}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PATCH" />
                            <div class="form-group">

                                <div>  
                                    <h3>Detalii Client</h3>
                                </div>
                            Nume: </br>    <input type="text" name="nume" class="form-control" value="{{$car->nume}}" placeholder="Nume" />
                            </div>
                            <div class="form-group">
                            </br>
                            Prenume: </br>    <input type="text" name="prenume" class="form-control" value="{{$car->prenume}}" placeholder="Prenume" />
                            </div>
                            <div class="form-group">
                            </br>
                            Telefon: </br>    <input type="text" name="telefon" class="form-control" value="{{$car->telefon}}" placeholder="Telefon" />
                            </div>
                            <div class="form-group">
                            </br>
                            Email: </br>    <input type="text" name="email" class="form-control" value="{{$car->email}}" placeholder="Email" />
                            </div>
                            <div class="form-group">
                            </br>
                                <div>  
                                    <h3>Detalii Masina</h3>
                                </div>
                            Nr Masina: </br>    <input type="text" name="nr_masina" class="form-control" value="{{$car->nr_masina}}" placeholder="NrMasina" />
                            </div>
                            <div class="form-group">
                            </br>
                            Seria: </br>    <input type="text" name="seria" class="form-control" value="{{$car->seria}}" placeholder="Seria" />
                            </div>
                            <div class="form-group">
                            </br>
                            Marca: </br>    <input type="text" name="marca" class="form-control" value="{{$car->marca}}" placeholder="Marca" />
                            </div>
                            <div class="form-group">
                            </br>
                            Model: </br>    <input type="text" name="model" class="form-control" value="{{$car->model}}" placeholder="Model" />
                            </div>
                            <div class="form-group">
                            </br>
                            An: </br>    <input type="text" name="an" class="form-control" value="{{$car->an}}" placeholder="An" />
                            </div>
                            <div class="form-group">
                            </br>
                            Combustibil: </br>    <input type="text" name="combustibil" class="form-control" value="{{$car->combustibil}}" placeholder="Combustibil" />
                            </div>
                            <div class="form-group">
                            </br>
                            Km: </br>    <input type="text" name="km" class="form-control" value="{{$car->km}}" placeholder="Km" />
                            </div>
                            <div class="form-group">
                            </br>
                            Motor: </br>    <input type="text" name="motor" class="form-control" value="{{$car->motor}}" placeholder="Motor" />
                            </div>
                            <div class="form-group">
                            </br>
                            Defect: </br>    <input type="text" name="defect" class="form-control" value="{{$car->defect}}" placeholder="Defect" />
                            </div>
                            <div class="form-group">
                            </br>
                            Detalii Reparatii: </br>    <input type="text" name="detalii_reparatii" class="form-control" value="{{$car->detalii_reparatii}}" placeholder="Detalii Reparatii" />
                            </div>
                            <div class="form-group">
                            </br>
                            Data Programare: </br>    <input type="text" name="data_programare" class="form-control" value="{{$car->data_programare}}" placeholder="Detalii Reparatii" />
                            </div>
                            <div class="form-group">
                            </br>
                            </br>
                                <input type="submit" class="btn btn-primary" value="Salvare" />
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

