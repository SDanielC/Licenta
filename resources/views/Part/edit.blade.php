
    <div class="span9">
	    <div class="content">

			<div class="module">
				<div class="module-head">
                    <br />
                    <h3>Editare Piesa</h3>
                    <br />
                @if(count($errors) > 0)

                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                @endif
                    <form method="post" action="{{action('PartController@update', $id)}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PATCH" />
                            <div class="form-group">
                            Cod: </br>    <input type="text" name="cod" class="form-control" value="{{$part->cod}}" placeholder="Cod" />
                            </div>
                            <div class="form-group">
                            </br>
                            Denumire: </br>    <input type="text" name="denumire" class="form-control" value="{{$part->denumire}}" placeholder="Denumire" />
                            </div>
                            <div class="form-group">
                            </br>
                            Cantitate: </br>    <input type="text" name="cantitate" class="form-control" value="{{$part->cantitate}}" placeholder="Cantitate" />
                            </div>
                            </br>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Salvare" />
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


