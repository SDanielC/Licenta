@extends('layout')

@section('title', 'ASD')

@section('content')
    <div class="span9">
		<div class="content">
			<div class="module">
				<div class="module-head">
                
                    <div align="right">
                        <!-- <a href="{{action('PartController@create')}}" class="btn btn-primary">Add</a> -->

                        <br />
                        <br />
                    </div>
                    <table class="table table-bordered table-striped">
                        </thead>
                            <tr>
                                <th>Cod</th>
                                <th>Denumire</th>
                                <th>Cantitate</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($parts as $part) 
                            <tr>
                                <td> {{ $part["cod"] }}</td>
                                <td> {{ $part["denumire"] }}</td>
                                <td> {{ $part["cantitate"] }}</td>
                                <td><button class="btn btn-info" data-cod="{{$part->cod}}" data-denumire="{{$part->denumire}}" data-cantitate="{{$part->cantitate}}" data-toggle="modal" data-target="#edit">Editeaza</button></td>
                                <td>{!! Form::open(['method' => 'Delete', 'route' => ['Part.destroy', $part->id ?? '']]) !!}
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                {!! Form::close() !!}</td>

                            </tr>
                        @endforeach
                            <tr id="myDIV">
                                <form action="submitpiese" method="POST">
                                @csrf
                                    <td><input type="text"  class="col-2" size="10"   maxlength="17"  name="cod" /> </td>
                                    <td><input type="text"  class="col-5"  size="10"   maxlength="17" name="denumire" /> </td>
                                    <td><input type="text"  class="col-5" size="10"   maxlength="17"  name="cantitate" /> </td>
                                    <td></td>
                                    <td><button type="submit" class="btn btn-primary">Adauga</button></td>
                                </form>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


