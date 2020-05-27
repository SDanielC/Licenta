@extends('layout')

@section('title', 'Creare Programare')

@section('content')

    <div class="span9">
	    <div class="content">

			<div class="module">
				<div class="module-head">

                    <form action="/search" method="POST" role="search">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control" name="q"
                                placeholder="Numar Masina"> <span class="input-group-btn">
                                <button type="submit" class="btn btn-default">Cautare</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>       
        </div>
    </div>

@endsection
